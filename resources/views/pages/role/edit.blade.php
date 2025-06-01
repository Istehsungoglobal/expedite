@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')

<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-user-shield me-1"></i> Edit
                            Role: {{ $role->name }}</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-falcon-default btn-sm"
                                type="button">
                                <span class="fas fa-arrow-left" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">User List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $role->name) }}" required {{ !$role->removable ?
                            'readonly' : '' }}>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if(!$role->removable)
                            <small class="form-text text-danger">This is a system role. The name cannot be
                                changed.</small>
                            @else
                            <small class="form-text text-muted">Enter a descriptive name for this role (e.g., Editor,
                                Author, Manager)</small>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="form-label">Permissions <span class="text-danger">*</span></label>

                            <div class="mb-2">
                                <button type="button" id="selectAllPermissions"
                                    class="btn btn-sm btn-outline-primary me-1"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Select all permissions">Select All</button>
                                <button type="button" id="deselectAllPermissions"
                                    class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Deselect all permissions">Deselect All</button>
                            </div>

                            @error('permissions')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                                @foreach($permissionsByModule as $module => $permissions)
                                <div class="col">
                                    <div class="card h-100">
                                        <div
                                            class="card-header bg-light d-flex align-items-center justify-content-between">
                                            <strong>{{ $module ?? 'General' }}</strong>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-primary select-module"
                                                    data-module="{{ $module }}"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Select all permissions in this module">
                                                    <i class="fas fa-check-square me-1"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary deselect-module"
                                                    data-module="{{ $module }}"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Deselect all permissions in this module">
                                                    <i class="far fa-square me-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @foreach($permissions as $permission)
                                            <div class="form-check mb-2">
                                                <input class="form-check-input permission-checkbox module-{{ $module }}"
                                                    type="checkbox" value="{{ $permission->name }}"
                                                    id="permission-{{ $permission->id }}" name="permissions[]" {{
                                                    in_array($permission->id, old('permissions', $rolePermissionIds)) ?
                                                'checked' : '' }}>
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
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        // Select all permissions
        $('#selectAllPermissions').click(function() {
            $('.permission-checkbox').prop('checked', true);
        });

        // Deselect all permissions
        $('#deselectAllPermissions').click(function() {
            $('.permission-checkbox').prop('checked', false);
        });

        // Select all permissions in a module
        $('.select-module').click(function() {
            const module = $(this).data('module');
            $(`.module-${module}`).prop('checked', true);
        });

        // Deselect all permissions in a module
        $('.deselect-module').click(function() {
            const module = $(this).data('module');
            $(`.module-${module}`).prop('checked', false);
        });
    });
</script>
@endpush
