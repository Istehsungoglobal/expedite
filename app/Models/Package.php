<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'type',
        'price',
        'renew_price',
        'interval',
        'interval_count',
        'status',
        'auto_renew',
        'features'
    ];

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'status' => 'boolean',
            'auto_renew' => 'boolean',
            'price' => 'double',
            'renew_price' => 'double',
            'interval_count' => 'integer',
        ];
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($package) {
            // Generate slug from name if not provided
            if (!$package->slug) {
                $package->slug = Str::slug($package->name);
            }
        });
    }

    /**
     * Get formatted price attribute.
     *
     * @return string
     */
    public function getAmountAttribute()
    {
        return $this->price;
    }

    /**
     * Get formatted renew price attribute.
     *
     * @return string
     */
    public function getRenewAmountAttribute()
    {
        return $this->renew_price;
    }

    /**
     * Set the amount attribute.
     *
     * @param mixed $value
     * @return void
     */
    public function setAmountAttribute($value)
    {
        $this->attributes['price'] = $value;
    }

    /**
     * Set the renew amount attribute.
     *
     * @param mixed $value
     * @return void
     */
    public function setRenewAmountAttribute($value)
    {
        $this->attributes['renew_price'] = $value;
    }

    /**
     * Get interval display text.
     *
     * @return string
     */
    public function getIntervalDisplayAttribute()
    {
        $interval = $this->interval ?? 'month';
        $count = $this->interval_count ?? 1;

        $text = Str::plural($interval, $count);

        return $count > 1 ? "{$count} {$text}" : $text;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('package')
            ->setDescriptionForEvent(fn (string $eventName) => "Package {$this->name} has been {$eventName}")
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}
