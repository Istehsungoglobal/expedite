<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateFee\StoreStateFeeRequest;
use App\Http\Requests\StateFee\UpdateStateFeeRequest;
use App\Models\StateFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class StateFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getStateFeesDataTable($request);
        }

        return view('pages.state-fee.index');
    }

    /**
     * Generate DataTables response for state fees
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getStateFeesDataTable(Request $request)
    {
        // Build the query with necessary relationships and eager loading
        $query = StateFee::query();

        // Apply filters if they exist
        if ($request->has('search')) {
            $search = $request->input('search.value');
            if (! empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            }
        }

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
            ->addColumn('amount_formatted', fn ($stateFee) => '$'.number_format($stateFee->amount, 2))
            ->addColumn('renew_amount_formatted', fn ($stateFee) => '$'.number_format($stateFee->renew_amount, 2))
            ->addColumn('status_badge', function ($stateFee) {
                $statusClass = $stateFee->status ? 'success' : 'danger';
                $statusText = $stateFee->status ? 'Active' : 'Inactive';

                return '<span class="badge bg-'.$statusClass.'">'.$statusText.'</span>';
            })
            ->addColumn('auto_renew_badge', function ($stateFee) {
                $autoRenewClass = $stateFee->auto_renew ? 'success' : 'warning';
                $autoRenewText = $stateFee->auto_renew ? 'Auto' : 'Manual';

                return '<span class="badge bg-'.$autoRenewClass.'">'.$autoRenewText.'</span>';
            })
            ->addColumn('action', function ($stateFee) {
                return view('pages.state-fee.action', compact('stateFee'))->render();
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
        return view('pages.state-fee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreStateFeeRequest $request)
    {
        DB::beginTransaction();

        try {
            // Create the state fee
            $stateFee = StateFee::create([
                'name' => $request->name,
                'description' => $request->description,
                'amount' => $request->amount,
                'renew_amount' => $request->renew_amount,
                'status' => $request->filled('status')? true : false,
                'auto_renew' => $request->filled('auto_renew')? true : false,
                'features' => $request->features ?? [],
            ]);

            DB::commit();

            return redirect()->route('admin.state-fees.index')
                ->with('success', 'State fee created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to create state fee: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function show(StateFee $stateFee)
    {
        return view('pages.state-fee.show', compact('stateFee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit(StateFee $stateFee)
    {
        return view('pages.state-fee.edit', compact('stateFee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateStateFeeRequest $request, StateFee $stateFee)
    {
        DB::beginTransaction();

        try {
            // Update state fee
            $stateFee->update([
                'name' => $request->name,
                'description' => $request->description,
                'amount' => $request->amount,
                'renew_amount' => $request->renew_amount,
                'status' => $request->filled('status')? true : false,
                'auto_renew' => $request->filled('auto_renew')? true : false,
                'features' => $request->features ?? $stateFee->features,
            ]);

            DB::commit();

            return redirect()->route('admin.state-fees.index')
                ->with('success', 'State fee updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to update state fee: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(StateFee $stateFee)
    {
        try {
            DB::beginTransaction();
            // Delete the state fee
            $stateFee->delete();

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'State fee deleted successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete state fee: '.$e->getMessage(),
            ]);
        }
    }
}
