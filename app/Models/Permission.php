<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guard_name',
        'module',
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

    /**
     * Scope query to get permissions by module
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $module
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByModule($query, $module)
    {
        return $query->where('module', $module);
    }

    /**
     * Scope query to get system permissions (not removable)
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSystem($query)
    {
        return $query->where('removable', false);
    }

    /**
     * Scope query to get custom permissions (removable)
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCustom($query)
    {
        return $query->where('removable', true);
    }

    /**
     * Check if the permission is a system permission
     */
    public function isSystem(): bool
    {
        return ! $this->removable;
    }

    /**
     * Get list of permissions grouped by module
     *
     * @return \Illuminate\Support\Collection
     */
    public static function getGroupedByModule()
    {
        return self::orderBy('module')->get()->groupBy('module');
    }
}
