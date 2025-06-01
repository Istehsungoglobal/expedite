<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getCategoriesDataTable($request);
        }

        return view('pages.category.index');
    }

    /**
     * Generate DataTables response for categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getCategoriesDataTable(Request $request)
    {
        // Build the query with necessary filters
        $query = Category::query();

        // Status filter
        if ($request->filled('status')) {
            $status = $request->status === 'active';
            info($status);
            $query->where('status', $status);
        }

        // Create DataTable from query
        return DataTables::eloquent($query)
            ->addIndexColumn()
            ->addColumn('status_badge', function ($category) {
                $statusClass = $category->status ? 'success' : 'danger';
                $statusText = $category->status ? 'Active' : 'Inactive';

                return '<span class="badge bg-'.$statusClass.'">'.$statusText.'</span>';
            })
            ->addColumn('icon_display', function ($category) {
                if (empty($category->icon)) {
                    return '<i class="fas fa-tag"></i> '.$category->name;
                }

                return '<i class="'.$category->icon.'"></i> '.$category->name;
            })
            ->addColumn('action', function ($category) {
                return view('pages.category.action', compact('category'))->render();
            })
            ->rawColumns(['status_badge', 'icon_display', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        $data['status'] = $request->has('status') ? 1 : 0;

        DB::beginTransaction();

        try {
            // Create the category
            $category = Category::create($data);

            DB::commit();

            return redirect()->route('admin.categories.index')
                ->with('success', 'Category created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to create category: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function show(Category $category)
    {
        $category->load(['activities.causer:first_name,email,id']);

        return view('pages.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['status'] = $request->has('status') ? 1 : 0;

        DB::beginTransaction();

        try {
            // Update category
            $category->update($data);

            DB::commit();

            return redirect()->route('admin.categories.index')
                ->with('success', 'Category updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to update category: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();
            // Delete the category
            $category->delete();

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Category deleted successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete category: '.$e->getMessage(),
            ]);
        }
    }
}
