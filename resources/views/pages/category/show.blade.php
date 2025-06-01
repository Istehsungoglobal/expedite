@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
<div class="container py-4">
    <div class="row">
        <!-- Category Details -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Category Details</h5>
                </div>
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Name</dt>
                        <dd class="col-sm-8">{{ $category->name }}</dd>

                        <dt class="col-sm-4">Description</dt>
                        <dd class="col-sm-8">{{ $category->description ?? '-' }}</dd>

                        <dt class="col-sm-4">Created At</dt>
                        <dd class="col-sm-8">{{ $category->created_at->format('Y-m-d H:i') }}</dd>

                        <dt class="col-sm-4">Updated At</dt>
                        <dd class="col-sm-8">{{ $category->updated_at->format('Y-m-d H:i') }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Change Logs -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-history me-1"></i>
                    Change Logs
                </div>
                <div class="card-body p-0">
                    @if($category->activities->isEmpty())
                        <div class="p-3 text-muted text-center">No change logs found.</div>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach($category->activities as $activity)
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
@endsection
