<?php

namespace App\Http\Controllers;

use App\Http\Requests\Select2Request;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Psr\Log\LoggerInterface;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Select2Controller extends Controller
{
    private const PER_PAGE = 10;

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Fetch permissions for Select2 dropdown
     */
    public function permissions(Select2Request $request): JsonResponse
    {
        return $this->handleSelect2(
            Permission::class,
            'id',
            'name',
            $request,
            fn ($query) => $query
        );
    }

    /**
     * Fetch roles for Select2 dropdown, excluding Super Admin
     */
    public function roles(Select2Request $request): JsonResponse
    {
        return $this->handleSelect2(
            Role::class,
            'id',
            'name',
            $request,
            fn ($query) => $query->where('name', '!=', 'Super Admin')
        );
    }

    /**
     * Fetch countries for Select2 dropdown
     */
    public function countries(Select2Request $request): JsonResponse
    {
        return $this->handleSelect2(
            Country::class,
            'id',
            'name',
            $request
        );
    }

    /**
     * Generic handler for Select2 dropdown data retrieval
     *
     * @template T of \Illuminate\Database\Eloquent\Model
     *
     * @param  class-string<T>  $modelClass
     */
    private function handleSelect2(
        string $modelClass,
        string $idColumn,
        string $textColumn,
        Select2Request $request,
        ?callable $constraint = null
    ): JsonResponse {
        try {
            $search = $request->input('search', '');
            $page = (int) $request->input('page', 1);
            $preload = $request->filled('preload') ? $request->input('preload') : [];
            $query = $modelClass::query();
            if ($constraint) {
                $query = $constraint($query);
            }

            if (! empty($preload) && is_array($preload)) {
                $items = $query->whereIn($idColumn, $preload)->get();

                return response()->json([
                    'results' => $items->map(fn ($item) => [
                        'id' => (string) $item->{$idColumn},
                        'text' => $item->{$textColumn},
                    ]),
                    'pagination' => ['more' => false],
                ]);
            }

            if (! empty($search)) {
                $query->where($textColumn, 'like', "%{$search}%");
            }

            $offset = ($page - 1) * self::PER_PAGE;
            $total = $query->count();
            $hasMore = $total > ($offset + self::PER_PAGE);

            $items = $query->skip($offset)
                ->take(self::PER_PAGE)
                ->get();

            return response()->json([
                'results' => $items->map(fn ($item) => [
                    'id' => (string) $item->{$idColumn},
                    'text' => $item->{$textColumn},
                ]),
                'pagination' => ['more' => $hasMore],
            ]);
        } catch (\Throwable $e) {
            $this->logger->error('Select2 retrieval failed', [
                'model' => $modelClass,
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'message' => 'Failed to load data.',
            ], 500);
        }
    }
}
