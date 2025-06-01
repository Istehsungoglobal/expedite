<?php

namespace App\Http\Controllers;

use App\Http\Requests\Package\StorePackageRequest;
use App\Http\Requests\Package\UpdatePackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getPackagesDataTable($request);
        }

        return view('pages.package.index');
    }

    /**
     * Generate DataTables response for packages
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getPackagesDataTable(Request $request)
    {
        // Build the query with necessary relationships and eager loading
        $query = Package::query();

        // Auto Renewal filter
        if ($request->filled('auto_renew')) {
            $autoRenew = $request->auto_renew === 'yes';
            $query->where('auto_renew', $autoRenew);
        }
        // Status filter
        if ($request->filled('status')) {
            $status = $request->status === 'active';
            $query->where('status', $status);
        }

        // Create DataTable from query
        return DataTables::eloquent($query)
            ->addIndexColumn()
            ->addColumn('amount_formatted', fn ($package) => '$'.number_format($package->price, 2))
            ->addColumn('renew_amount_formatted', fn ($package) => '$'.number_format($package->renew_price, 2))
            ->addColumn('interval_display', fn ($package) => $package->interval_display)
            ->addColumn('status_badge', function ($package) {
                $statusClass = $package->status ? 'success' : 'danger';
                $statusText = $package->status ? 'Active' : 'Inactive';

                return '<span class="badge bg-'.$statusClass.'">'.$statusText.'</span>';
            })
            ->addColumn('auto_renew_badge', function ($package) {
                $autoRenewClass = $package->auto_renew ? 'success' : 'warning';
                $autoRenewText = $package->auto_renew ? 'Auto' : 'Manual';

                return '<span class="badge bg-'.$autoRenewClass.'">'.$autoRenewText.'</span>';
            })
            ->addColumn('action', function ($package) {
                return view('pages.package.action', compact('package'))->render();
            })
            ->rawColumns(['status_badge', 'auto_renew_badge', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $intervals = [
            'monthly' => 'Monthly',
            'weekly' => 'Weekly',
            'fortnightly' => 'Fortnightly',
            'yearly' => 'Yearly'
        ];

        return view('pages.package.create', compact('intervals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePackageRequest $request)
    {
        DB::beginTransaction();

        try {
            // Create the package
            $package = Package::create([
                'name' => $request->name,
                'description' => $request->description,
                'slug' => $request->slug,
                'type' => $request->type,
                'price' => $request->price,
                'renew_price' => $request->renew_price,
                'interval' => $request->interval,
                'interval_count' => $request->interval_count,
                'status' => $request->boolean('status', true),
                'auto_renew' => $request->boolean('auto_renew', false),
                'features' => $request->features ?? [],
            ]);

            DB::commit();

            return redirect()->route('admin.packages.index')
                ->with('success', 'Package created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to create package: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function show(Package $package)
    {
        return view('pages.package.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit(Package $package)
    {
        $intervals = [
            'monthly' => 'Monthly',
            'weekly' => 'Weekly',
            'fortnightly' => 'Fortnightly',
            'yearly' => 'Yearly'
        ];

        return view('pages.package.edit', compact('package', 'intervals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        DB::beginTransaction();

        try {
            // Update package
            $package->update([
                'name' => $request->name,
                'description' => $request->description,
                'slug' => $request->slug,
                'type' => $request->type,
                'price' => $request->price,
                'renew_price' => $request->renew_price,
                'interval' => $request->interval,
                'interval_count' => $request->interval_count,
                'status' => $request->boolean('status', true),
                'auto_renew' => $request->boolean('auto_renew', false),
                'features' => $request->features ?? $package->features,
            ]);

            DB::commit();

            return redirect()->route('admin.packages.index')
                ->with('success', 'Package updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to update package: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Package $package)
    {
        try {
            DB::beginTransaction();
            // Delete the package
            $package->delete();

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Package deleted successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete package: '.$e->getMessage(),
            ]);
        }
    }
}
