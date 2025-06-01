<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateFee\StoreStateFeeRequest;
use App\Http\Requests\StateFee\UpdateStateFeeRequest;
use App\Http\Resources\StateFeeResource;
use App\Models\StateFee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class StateFeeController extends Controller
{
    /**
     * Display a listing of state fees.
     */
    public function index(Request $request): ResourceCollection | JsonResponse
    {
        try {
            $query = StateFee::query();

            // Filters
            if ($request->filled('status')) {
                $query->where('status', $request->boolean('status'));
            }
            if ($request->filled('auto_renew')) {
                $query->where('auto_renew', $request->boolean('auto_renew'));
            }
            if ($request->filled('search')) {
                $search = $request->input('search');
                $query->where(fn ($q) => $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%"));
            }

            // Ordering
            $sortField = $request->input('sort_by', 'created_at');
            $sortDir = $request->input('sort_dir', 'desc');
            $query->orderBy($sortField, $sortDir);

            // Pagination
            $perPage = $request->input('per_page', 15);
            $stateFees = $query->paginate($perPage);

            return StateFeeResource::collection($stateFees);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to fetch state fees.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created state fee in storage.
     */
    public function store(StoreStateFeeRequest $request): JsonResponse
    {
        try {
            $stateFee = StateFee::create($request->validated());

            return (new StateFeeResource($stateFee))
                ->response()
                ->setStatusCode(201);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to create state fee.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified state fee.
     */
    public function show(string $id): JsonResponse
    {
        try {
            $stateFee = StateFee::findOrFail($id);
            return response()->json(new StateFeeResource($stateFee));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'State fee not found.',
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to fetch state fee.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified state fee in storage.
     */
    public function update(UpdateStateFeeRequest $request, string $id): JsonResponse
    {
        try {
            $stateFee = StateFee::findOrFail($id);
            $stateFee->update($request->validated());
            return response()->json(new StateFeeResource($stateFee));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'State fee not found.',
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to update state fee.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified state fee from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $stateFee = StateFee::findOrFail($id);
            $stateFee->delete();

            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'State fee not found.',
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'message' => 'Failed to delete state fee.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
