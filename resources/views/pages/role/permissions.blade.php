@extends('layouts.app')

@section('title', "Manage Permissions: {$role->name}")

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Manage Permissions: {{ $role->name }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.roles.show', $role) }}">{{ $role->name }}</a></li>
        <li class="breadcrumb-item active">Manage Permissions</li>
    </ol>

    @if($role->name === 'Super Admin')
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>
            The Super Admin role has all permissions by default and cannot be modified.
        </div>

        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('admin.roles.show', $role) }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to Role Details
            </a>
        </div>
    @else
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-key me-1"></i>
                    Manage Permissions
                </div>

                @if($role->isSystem())
                    <span class="badge bg-danger">System Role</span>
                @else
                    <span class="badge bg-success">Custom Role</span>
                @endif
            </div>
            <div class="card-body">
                <form id="syncPermissionsForm" data-role-id="{{ $role->id }}">
                    <div class="mb-2">
                        <button type="button" id="selectAllPermissions" class="btn btn-sm btn-outline-primary me-1">Select All</button>
                        <button type="button" id="deselectAllPermissions" class="btn btn-sm btn-outline-secondary">Deselect All</button>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                        @foreach($permissionsByModule as $module => $permissions)
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-header bg-light d-flex align-items-center justify-content-between">
                                        <strong>{{ $module ?? 'General' }}</strong>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-outline-primary select-module" data-module="{{ Str::slug($module) }}">Select All</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary deselect-module" data-module="{{ Str::slug($module) }}">Deselect All</button>
                                        </div>
                                    </div>
                                    <div class="card-body" style="max-height: 250px; overflow-y: auto;">
                                        @foreach($permissions as $permission)
                                            <div class="form-check mb-2">
                                                <input class="form-check-input permission-checkbox module-{{ Str::slug($module) }}"
                                                       type="checkbox"
                                                       value="{{ $permission->id }}"
                                                       id="permission-{{ $permission->id }}"
                                                       name="permissions[]"
                                                       {{ in_array($permission->id, $rolePermissionIds) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="permission-{{ $permission->id }}">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('admin.roles.show', $role) }}" class="btn btn-secondary me-2">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save me-1"></i> Save Permissions
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
@endsection

@push('script')
@endpush
