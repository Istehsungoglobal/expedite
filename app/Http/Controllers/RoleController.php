<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getRolesDataTable($request);
        }

        return view('pages.role.index');
    }

    /**
     * Generate DataTables response for roles
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getRolesDataTable(Request $request)
    {
        // Build the query with necessary relationships and eager loading
        $query = Role::withCount(['permissions', 'users'])->where('name', '!=', 'Super Admin');

        // Apply filters if they exist
        if ($request->has('search')) {
            $search = $request->input('search.value');
            if (! empty($search)) {
                $query->whereAny(['name', 'guard_name'], 'like', "%{$search}%");
            }
        }

        // Status filter
        if ($request->filled('status')) {
            if ($request->status === 'system') {
                $query->where('removable', false);
            } else {
                $query->where('removable', true);
            }
        }

        // Create DataTable from query
        return DataTables::eloquent($query)
            ->addIndexColumn()
            ->addColumn('permissions', function ($role) {
                return '<span class="badge bg-primary">'.$role->permissions_count.'</span>';
            })
            ->addColumn('users', function ($role) {
                return '<span class="badge bg-primary">'.$role->users_count.'</span>';
            })
            ->addColumn('status', function ($role) {
                $statusClass = $role->removable ? 'success' : 'danger';
                $statusText = $role->removable ? 'Custom Role' : 'System Role';

                return '<span class="badge bg-'.$statusClass.'">'.$statusText.'</span>';
            })
            ->addColumn('action', function ($role) {
                return view('pages.role.action', compact('role'))->render();
            })
            ->rawColumns(['status', 'action', 'permissions', 'users'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Get all permissions grouped by module
        $permissionsByModule = Permission::orderBy('module')
            ->get()
            ->groupBy('module');

        return view('pages.role.create', compact('permissionsByModule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRoleRequest $request)
    {
        DB::beginTransaction();

        try {
            // Create the role
            $role = Role::create([
                'name' => $request->name,
                'guard_name' => 'web',
            ]);

            // Sync permissions
            $role->syncPermissions($request->permissions);

            DB::commit();

            return redirect()->route('admin.roles.index')
                ->with('success', 'Role created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to create role: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\View\View
     */
    public function show(Role $role)
    {
        // Get role with all permissions
        $role->load('permissions');

        // Group permissions by module
        $permissionsByModule = $role->permissions->groupBy('module');

        return view('pages.role.show', compact('role', 'permissionsByModule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\View\View
     */
    public function edit(Role $role)
    {
        // Check if the role is the Super Admin
        if ($role->name === 'Super Admin') {
            return redirect()->route('admin.roles.index')
                ->with('error', 'The Super Admin role cannot be edited.');
        }

        // Get all permissions grouped by module
        $permissionsByModule = Permission::orderBy('module')
            ->get()
            ->groupBy('module');

        // Get current permissions IDs for the role
        $rolePermissionIds = $role->permissions->pluck('id')->toArray();

        return view('pages.role.edit', compact('role', 'permissionsByModule', 'rolePermissionIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        // Check if the role is the Super Admin
        if ($role->name === 'Super Admin') {
            return redirect()->route('admin.roles.index')
                ->with('error', 'The Super Admin role cannot be edited.');
        }

        // Check if the role is a system role (non-removable)
        if (! $role->removable && $request->name !== $role->name) {
            return redirect()->route('admin.roles.index')
                ->with('error', 'System role names cannot be changed.');
        }

        DB::beginTransaction();

        try {
            // Update role name
            $role->update([
                'name' => $request->name,
            ]);

            // Sync permissions
            $role->syncPermissions($request->permissions);

            DB::commit();

            return redirect()->route('admin.roles.index')
                ->with('success', 'Role updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to update role: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Role $role)
    {
        // Prevent deleting the Super Admin role
        if ($role->name === 'Super Admin') {
            return response()->json([
                'status' => 'error',
                'message' => 'The Super Admin role cannot be deleted.',
            ]);
        }

        // Prevent deleting system roles
        if (! $role->removable) {
            return response()->json([
                'status' => 'error',
                'message' => 'System roles cannot be deleted.',
            ]);
        }

        try {
            DB::beginTransaction();
            // Delete the role
            $role->delete();

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Role deleted successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete role: '.$e->getMessage(),
            ]);
        }
    }
}
