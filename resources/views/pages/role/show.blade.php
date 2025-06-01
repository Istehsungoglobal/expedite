@extends('layouts.app')

@section('title', "Role: {$role->name}")

@section('content')
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Basic Information
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 30%">Name</th>
                                <td>{{ $role->name }}</td>
                            </tr>
                            <tr>
                                <th>Guard Name</th>
                                <td>{{ $role->guard_name }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($role->removable)
                                        <span class="badge bg-success">Custom Role</span>
                                    @else
                                        <span class="badge bg-danger">System Role</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $role->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $role->updated_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Role List
                        </a>

                        <div>
                            @if($role->name !== 'Super Admin')
                                @can('roles.edit')
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-primary">
                                    <i class="fas fa-edit me-1"></i> Edit Role
                                </a>
                                @endcan
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-key me-1"></i>
                    Permissions ({{ $role->permissions->count() }})
                </div>
                <div class="card-body">
                    <div class="accordion" id="permissionsAccordion">
                        @forelse($permissionsByModule as $module => $permissions)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#module{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="module{{ $loop->index }}">
                                        <strong>{{ Str::ucfirst(str_replace('-', ' ', $module)) ?? 'General' }}</strong> <span class="badge bg-primary ms-2">{{ $permissions->count() }}</span>
                                    </button>
                                </h2>
                                <div id="module{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#permissionsAccordion">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            @foreach($permissions as $permission)
                                                <li class="list-group-item">
                                                    <i class="fas fa-check-circle text-success me-2"></i>
                                                    {{ Str::ucfirst(str_replace('-', ' ', $permission->name)) }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info">
                                This role has no permissions assigned.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="card shadow-sm h-50">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-history me-1"></i>
                    Change Logs
                </div>
                <div class="card-body p-0">
                    @if($role->activities->isEmpty())
                        <div class="p-3 text-muted text-center">No change logs found.</div>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach($role->activities as $activity)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>{{ ucfirst($activity->description) }}</strong>
                                            <br>
                                            <small class="text-muted">
                                                By {{ $activity->causer?->name ?? 'System' }}
                                                &middot;
                                                {{ $activity->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                    @if($activity->properties && $activity->properties->isNotEmpty())
                                        <details class="mt-2">
                                            <summary class="small text-primary">View Changes</summary>
                                            <pre class="bg-light p-2 rounded small mb-0">{{ json_encode($activity->properties->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                                        </details>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
