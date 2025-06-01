<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use App\Notifications\UserCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getUsersDataTable($request);
        }

        // Get all roles for the filter dropdown
        $roles = Role::all(['id', 'name']);

        // Subscription options for filter
        $subscriptionOptions = [
            'active' => 'Active Subscription',
            'expired' => 'Expired Subscription',
            'canceled' => 'Canceled Subscription',
            'none' => 'No Subscription',
        ];

        return view('pages.user.index', [
            'roles' => $roles,
            'subscriptionOptions' => $subscriptionOptions,
        ]);
    }

    /**
     * Generate DataTables response for users
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getUsersDataTable(Request $request)
    {
        // Build the query with necessary relationships and eager loading
        $query = User::with(['roles']);

        // Apply filters if they exist
        if ($request->has('search')) {
            $search = $request->input('search.value');
            if (! empty($search)) {
                $query->whereAny(['first_name', 'last_name', 'email', 'phone'], 'like', "%{$search}%");
            }
        }

        // Role filter
        if ($request->has('role') && ! empty($request->role)) {
            $query->whereHas('roles', function ($q) use ($request) {
                $q->where('id', $request->role);
            });
        }

        // Status filter
        if ($request->has('status')) {
            if ($request->status === 'active') {
                $query->where('is_active', true);
            } elseif ($request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        // Subscription filter
        if ($request->has('subscription') && ! empty($request->subscription)) {
            $query = $this->applySubscriptionFilter($query, $request->subscription);
        }

        // Last login filter
        if ($request->has('last_login')) {
            if ($request->last_login === 'yes') {
                $query->whereNotNull('last_login_at');
            } elseif ($request->last_login === 'no') {
                $query->whereNull('last_login_at');
            }
        }

        // Last activity filter
        if ($request->has('last_activity') && $request->last_activity === 'recent') {
            $query->where('last_active_at', '>=', now()->subDays(7));
        }

        // Create DataTable from query
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('roles', function ($user) {
                return $user->roles->pluck('name')->implode(', ');
            })
            ->addColumn('status', function ($user) {
                $statusClass = $user->is_active ? 'success' : 'danger';
                $statusText = $user->is_active ? 'Active' : 'Inactive';

                return '<span class="badge bg-'.$statusClass.'">'.$statusText.'</span>';
            })
            ->addColumn('last_login', function ($user) {
                return $user->last_login_at ? $user->last_login_at->diffForHumans() : 'Never';
            })
            ->addColumn('last_active', function ($user) {
                return $user->last_active_at ? $user->last_active_at->diffForHumans() : 'Never';
            })
            ->addColumn('action', function ($user) {
                return view('pages.user.action', compact('user'))->render();
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    /**
     * Apply subscription filter to query
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $subscription
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function applySubscriptionFilter($query, $subscription)
    {
        switch ($subscription) {
            case 'active':
                $query->whereHas('subscriptions', function ($q) {
                    $q->where('ends_at', '>', now())
                        ->orWhereNull('ends_at');
                });
                break;
            case 'expired':
                $query->whereHas('subscriptions', function ($q) {
                    $q->where('ends_at', '<=', now());
                });
                break;
            case 'canceled':
                $query->whereHas('subscriptions', function ($q) {
                    $q->whereNotNull('canceled_at');
                });
                break;
            case 'none':
                $query->doesntHave('subscriptions');
                break;
        }

        return $query;
    }

    /**
     * Export users to Excel file
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    
    public function export(Request $request)
    {
        $format = $request->format ?? 'xlsx';
        $fileName = 'users_'.date('Y-m-d').'.'.$format;

        // Create a filtered export
        return Excel::download(new UsersExport($request), $fileName);
    }

    /*
        user home page
    */

      public function userindex()
    {
        return view('pages.user.dashboard'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response|\Illuminate\View\View
     */
    public function create()
    {
        // If using Blade
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if (isset($data['avatar'])) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        if (isset($data['cover_photo'])) {
            $data['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }
        $data['password'] = Hash::make($data['password']);
        $data['email_verified_at'] = $request->filled('status') ? now() : null;

        try {
            $user = User::create($data);

            // Assign role to user
            if (isset($data['role'])) {
                $user->assignRole(Role::find($data['role']));
            }

            // Send notification
            $user->notify(new UserCreatedNotification(user()));

            return redirect()->route('admin.users.index')
                ->with('success', 'User created successfully');
        } catch (\Exception $e) {
            return $e->getMessage();

            return redirect()->back()
                ->with('error', 'Failed to create user: '.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Inertia\Response|\Illuminate\View\View
     */
    public function show(User $user)
    {
        $user->load('roles');

        // If using Blade
        return view('pages.user.details', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Inertia\Response|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        $user->load('roles');

        // If using Blade
        return view('pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();

        // Handle file uploads
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        if ($request->hasFile('cover_photo')) {
            $data['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

        // Only update password if provided
        if (! empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if ($user->isDirty('email')) {
            $data['email_verified_at'] = null;
        }

        try {
            // Update the user
            $user->update($data);

            // Assign role to user
            if (isset($data['role'])) {
                // Detach all roles first
                $user->roles()->detach();
                // Assign the new role
                $user->assignRole(Role::find($data['role']));
            }

            return redirect()->route('admin.users.index')
                ->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to update user: '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        // Prevent deleting yourself
        if (auth()->id() === $user->id) {
            return back()->with('error', 'You cannot delete your own account');
        } elseif ($user->hasRole('super-admin')) {
            return back()->with('error', 'You cannot delete a super admin account');
        }
        try {
            // Delete the user
            $user->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'User deleted successfully',
            ]);
        } catch (\Exception $e) {
            // return $e->getMessage();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete user: '.$e->getMessage(),
            ]);
        }
    }

    /**
     * Impersonate a user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function impersonate(User $user)
    {
        // Store current user ID in session
        session()->put('impersonate', auth()->id());

        // Login as the impersonated user
        auth()->login($user);

        return redirect()->route('admin.dashboard')
            ->with('message', 'You are now impersonating '.$user->name);
    }


    public function profile(){
        return view('pages.profile');
    }
}
