<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Role extends SpatieRole
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guard_name',
        'removable',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'removable' => 'boolean',
    ];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('role')
            ->setDescriptionForEvent(fn (string $eventName) => "Role {$this->name} has been {$eventName}")
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    /**
     * A role can have many users.
     */
    public function users(): MorphToMany
    {
        return $this->morphedByMany(
            getModelForGuard($this->attributes['guard_name'] ?? config('auth.defaults.guard')),
            'model',
            config('permission.table_names.model_has_roles'),
            config('permission.column_names.role_pivot_key'),
            config('permission.column_names.model_morph_key')
        );
    }

    /**
     * Scope query to get system roles (not removable)
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSystem($query)
    {
        return $query->where('removable', false);
    }

    /**
     * Scope query to get custom roles (removable)
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCustom($query)
    {
        return $query->where('removable', true);
    }

    /**
     * Check if the role is a system role
     */
    public function isSystem(): bool
    {
        return ! $this->removable;
    }

    /**
     * Check if the role is the Super Admin role
     */
    public function isSuperAdmin(): bool
    {
        return $this->name === 'Super Admin';
    }

    /**
     * Get all roles that are not Super Admin
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotSuperAdmin($query)
    {
        return $query->where('name', '!=', 'Super Admin');
    }
}
