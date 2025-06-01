<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Throwable;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     */
    public function index(Request $request): AnonymousResourceCollection | JsonResponse
    {
        try {
            $query = Category::query();

            // Filter by status
            if ($request->filled('status')) {
                $query->where('status', $request->boolean('status'));
            }

            // Search
            if ($request->filled('search')) {
                $search = $request->input('search');
                $query->where(fn ($q) => $q->where('name', 'like', "%{$search}%")
                    ->orWhere('slug', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                );
            }

            // Ordering
            $sortField = $request->input('sort_by', 'created_at');
            $sortDir = $request->input('sort_dir', 'desc');
            $query->orderBy($sortField, $sortDir);

            // Pagination
            $perPage = $request->input('per_page', 15);
            $categories = $query->paginate($perPage);

            return CategoryResource::collection($categories);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to fetch categories.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(StoreCategoryRequest $request): JsonResponse
    {
        try {
            $category = Category::create($request->validated());

            return (new CategoryResource($category))
                ->response()
                ->setStatusCode(201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
            ], 422);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to create category.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified category.
     */
    public function show($id): JsonResponse
    {
        try {
            $category = Category::findOrFail($id);
            return response()->json(new CategoryResource($category));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Category not found.',
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to fetch category.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified category in storage.
     */
    public function update(UpdateCategoryRequest $request, $id): JsonResponse
    {
        try {
            $category = Category::findOrFail($id);
            $category->update($request->validated());

            return response()->json(new CategoryResource($category));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Category not found.',
            ], 404);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
            ], 422);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to update category.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy($id): JsonResponse
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();

            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Category not found.',
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to delete category.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
