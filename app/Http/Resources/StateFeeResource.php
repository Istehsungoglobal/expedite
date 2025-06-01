<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StateFeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'amount' => (float) $this->amount,
            'amount_formatted' => '$'.number_format($this->amount, 2),
            'renew_amount' => (float) $this->renew_amount,
            'renew_amount_formatted' => '$'.number_format($this->renew_amount, 2),
            'status' => (bool) $this->status,
            'status_label' => $this->status ? 'Active' : 'Inactive',
            'auto_renew' => (bool) $this->auto_renew,
            'auto_renew_label' => $this->auto_renew ? 'Auto' : 'Manual',
            'features' => $this->features ?? [],
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
