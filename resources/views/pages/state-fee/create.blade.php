@extends('layouts.app')

@section('title', 'Create New State Fee')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-dollar-sign me-1"></i> Create New State Fee</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.state-fees.index') }}" class="btn btn-falcon-default btn-sm"
                                type="button">
                                <span class="fas fa-arrow-left" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Fee List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.state-fees.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <x-forms.text-input name="name" label="Fee Name" :value="old('name')" required
                                help="Enter a descriptive name for this fee (e.g., California Business License, New York LLC Filing)"/>
                        </div>

                        <div class="col-md-3">
                            <x-forms.text-input name="amount" label="Initial Amount ($)" :value="old('amount')" required type="number"
                                step="0.01" min="0.00" help="Enter the initial fee amount in dollars"/>
                        </div>

                        <div class="col-md-3">
                            <x-forms.text-input name="renew_amount" label="Renewal Amount ($)" :value="old('renew_amount')" required
                                type="number" step="0.01" min="0.00" help="Enter the renewal fee amount in dollars"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <x-forms.textarea name="description" label="Description" :value="old('description')"
                                help="Provide details about this fee (purpose, requirements, etc.)" rows="4"/>
                        </div>
                    </div>

                    <div class="row mb-3" id="features-container">
                        <div class="col-12 mb-2">
                            <label for="features" class="form-label">Features</label>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" id="add-feature" class="btn btn-sm btn-falcon-default">
                                    <i class="fas fa-plus me-1"></i> Add Feature
                                </button>
                                <span class="text-muted small">Add key features or benefits associated with this fee</span>
                            </div>
                        </div>

                        <div class="col-lg-6 feature-inputs">
                            @if(old('features'))
                                @foreach(old('features') as $index => $feature)
                                    <div class="feature-item d-flex align-items-center gap-2 mb-2">
                                        <input type="text" name="features[]" class="form-control" value="{{ $feature }}" placeholder="Enter feature">
                                        <button type="button" class="btn btn-sm btn-falcon-danger remove-feature">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="1"
                                    {{ old('status', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active Status</label>
                            </div>
                            <div class="form-text text-muted">
                                Enable this option to make the fee active and available for use
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="auto_renew" name="auto_renew" value="1"
                                    {{ old('auto_renew') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="auto_renew">Auto Renewal</label>
                            </div>
                            <div class="form-text text-muted">
                                Enable this option if this fee should be automatically renewed
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.state-fees.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create State Fee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.feature-inputs');
        const addButton = document.getElementById('add-feature');

        // Add new feature input
        addButton.addEventListener('click', function() {
            const featureItem = document.createElement('div');
            featureItem.classList.add('feature-item', 'd-flex', 'align-items-center', 'gap-2', 'mb-2');
            featureItem.innerHTML = `
                <input type="text" name="features[]" class="form-control" placeholder="Enter feature">
                <button type="button" class="btn btn-sm btn-falcon-danger remove-feature">
                    <i class="fas fa-times"></i>
                </button>
            `;
            container.appendChild(featureItem);

            // Focus the new input
            featureItem.querySelector('input').focus();
        });

        // Remove feature input (delegated event)
        container.addEventListener('click', function(event) {
            if (event.target.closest('.remove-feature')) {
                const featureItem = event.target.closest('.feature-item');
                featureItem.remove();
            }
        });

        // Add initial feature input if none exist
        if (!document.querySelector('.feature-item')) {
            addButton.click();
        }
    });
</script>
@endpush
