@extends('layouts.app')

@section('title', "Fee: {$stateFee->name}")

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
                                <td>{{ $stateFee->name }}</td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>${{ number_format($stateFee->amount, 2) }}</td>
                            </tr>
                            <tr>
                                <th>Renewal Amount</th>
                                <td>${{ number_format($stateFee->renew_amount, 2) }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($stateFee->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Auto Renewal</th>
                                <td>
                                    @if($stateFee->auto_renew)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-warning">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $stateFee->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $stateFee->updated_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('admin.state-fees.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Fee List
                        </a>

                        <div>
                            @can('state-fees.edit')
                            <a href="{{ route('admin.state-fees.edit', $stateFee) }}" class="btn btn-primary">
                                <i class="fas fa-edit me-1"></i> Edit Fee
                            </a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-file-alt me-1"></i>
                    Description & Features
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5>Description</h5>
                        <div class="p-3 border rounded bg-light">
                            {!! nl2br(e($stateFee->description)) ?? '<em class="text-muted">No description provided</em>' !!}
                        </div>
                    </div>

                    <h5>Features ({{ is_array($stateFee->features) ? count($stateFee->features) : 0 }})</h5>
                    @if(is_array($stateFee->features) && count($stateFee->features) > 0)
                        <ul class="list-group">
                            @foreach($stateFee->features as $feature)
                                <li class="list-group-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="alert alert-info">
                            No features defined for this fee.
                        </div>
                    @endif
                </div>
            </div>
            <div class="card shadow-sm h-50">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-history me-1"></i>
                    Change Logs
                </div>
                <div class="card-body p-0">
                    @if($stateFee->activities->isEmpty())
                        <div class="p-3 text-muted text-center">No change logs found.</div>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach($stateFee->activities as $activity)
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
