@extends('layouts.app')

@section('title', 'Package Details')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">
                            <i class="fas fa-box me-1"></i> Package Details: {{ $package->name }}
                        </h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.packages.index') }}" class="btn btn-falcon-default btn-sm"
                                type="button">
                                <span class="fas fa-arrow-left" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Package List</span>
                            </a>
                            @can('edit-state-fee')
                            <a href="{{ route('admin.packages.edit', $package->id) }}"
                                class="btn btn-falcon-primary btn-sm ms-2" type="button">
                                <span class="fas fa-edit" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Edit Package</span>
                            </a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-1">
                                <div class="badge bg-{{ $package->status ? 'success' : 'danger' }} me-2">
                                    {{ $package->status ? 'Active' : 'Inactive' }}
                                </div>
                                @if($package->type)
                                <div class="badge bg-info me-2">{{ $package->type }}</div>
                                @endif
                                <div class="badge bg-{{ $package->auto_renew ? 'success' : 'warning' }}">
                                    {{ $package->auto_renew ? 'Auto Renewal' : 'Manual Renewal' }}
                                </div>
                            </div>

                            <h3 class="fs-4">{{ $package->name }}</h3>

                            @if($package->description)
                            <p class="text-muted mt-2">{{ $package->description }}</p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold">Pricing</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-2">
                                        <div class="card-body py-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0">Initial Price</h6>
                                                    <p class="mb-0 fs-3 fw-bold text-primary">${{ number_format($package->price, 2) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-2">
                                        <div class="card-body py-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0">Renewal Price</h6>
                                                    <p class="mb-0 fs-3 fw-bold text-success">${{ number_format($package->renew_price, 2) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold">Billing Cycle</h5>
                            <div class="card mb-2">
                                <div class="card-body py-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="mb-0 fs-5">{{ $package->interval_display }}</p>
                                            <small class="text-muted">
                                                {{ $package->interval_count }} {{ Str::plural(Str::ucfirst($package->interval), $package->interval_count) }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(count($package->features ?? []) > 0)
                        <div class="mb-4">
                            <h5 class="fw-bold">Features</h5>
                            <ul class="list-group">
                                @foreach($package->features as $feature)
                                <li class="list-group-item d-flex">
                                    <span class="fas fa-check-circle text-success me-2 mt-1"></span>
                                    <span>{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>

                    <div class="col-md-4">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-primary text-white">Package Information</div>
                            <div class="card-body">
                                <table class="table table-sm table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td><strong>ID:</strong></td>
                                            <td>{{ $package->id }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Slug:</strong></td>
                                            <td>{{ $package->slug }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created:</strong></td>
                                            <td>{{ $package->created_at->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Last Updated:</strong></td>
                                            <td>{{ $package->updated_at->format('M d, Y') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card shadow-sm h-50">
                            <div class="card-header bg-primary text-white">
                                <i class="fas fa-history me-1"></i>
                                Change Logs
                            </div>
                            <div class="card-body p-0">
                                @if($package->activities->isEmpty())
                                    <div class="p-3 text-muted text-center">No change logs found.</div>
                                @else
                                    <ul class="list-group list-group-flush">
                                        @foreach($package->activities as $activity)
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
            </div>
        </div>
    </div>
</div>
@endsection
