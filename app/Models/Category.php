<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'icon',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('category')
            ->setDescriptionForEvent(fn (string $eventName) => "Category {$this->name} has been {$eventName}")
            ->logOnly(['name', 'description', 'slug', 'icon', 'status'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}
