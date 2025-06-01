<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StateFee extends Model
{
    /** @use HasFactory<\Database\Factories\StateFeeFactory> */
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'description',
        'amount',
        'renew_amount',
        'status',
        'auto_renew',
        'features',
    ];
    protected $table = 'state_fees';

    protected $casts = [
        'tags' => 'array', // Optional, if tags are stored as JSON
    ];

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'status' => 'boolean',
            'auto_renew' => 'boolean',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('stateFee')
            ->setDescriptionForEvent(fn (string $eventName) => "State Fee {$this->name} has been {$eventName}")
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}
