<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping, WithStyles
{
    use Exportable;

    protected $request;

    /**
     * Create a new export instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        $query = User::query()
            ->with(['roles']);

        // Apply filters from request if present
        if ($this->request->has('role') && ! empty($this->request->role)) {
            $query->whereHas('roles', function ($q) {
                $q->where('id', $this->request->role);
            });
        }

        if ($this->request->has('status')) {
            if ($this->request->status === 'active') {
                $query->where('is_active', true);
            } elseif ($this->request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        if ($this->request->has('search') && ! empty($this->request->search)) {
            $search = $this->request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
            'Roles',
            'Status',
            'Last Login',
            'Created At',
            'Updated At',
        ];
    }

    /**
     * @param  User  $user
     */
    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->phone ?? 'N/A',
            $user->roles->pluck('name')->implode(', '),
            $user->is_active ? 'Active' : 'Inactive',
            $user->last_login_at ? $user->last_login_at->format('Y-m-d H:i:s') : 'Never',
            $user->created_at->format('Y-m-d H:i:s'),
            $user->updated_at->format('Y-m-d H:i:s'),
        ];
    }

    /**
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row (header row)
            1 => ['font' => ['bold' => true]],
        ];
    }
}
