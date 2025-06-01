@extends('layouts.app')

@section('title', 'Create New Package')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-box me-1"></i> Create New Package</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.packages.index') }}" class="btn btn-falcon-default btn-sm"
                                type="button">
                                <span class="fas fa-arrow-left" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Package List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.packages.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <x-forms.text-input name="name" label="Package Name" :value="old('name')" required
                                help="Enter a descriptive name for this package (e.g., Pro Plan, Business Tier)"/>
                        </div>

                        <div class="col-md-6">
                            <x-forms.text-input name="type" label="Package Type" :value="old('type')"
                                help="Optional package type (e.g., Subscription, One-time)"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <x-forms.text-input name="price" label="Price ($)" :value="old('price')" required type="number"
                                step="0.01" min="0.00" help="Enter the package price in dollars"/>
                        </div>

                        <div class="col-md-3">
                            <x-forms.text-input name="renew_price" label="Renewal Price ($)" :value="old('renew_price')" required
                                type="number" step="0.01" min="0.00" help="Enter the renewal price in dollars"/>
                        </div>

                        <div class="col-md-3">
                            <x-forms.select name="interval" label="Billing Interval" :options="$intervals" :value="old('interval')" required
                                help="Select the billing interval period"/>
                        </div>

                        <div class="col-md-3">
                            <x-forms.text-input name="interval_count" label="Interval Count" :value="old('interval_count', 1)" required
                                type="number" min="1" step="1" help="How many intervals? (e.g., 1 month, 3 months)"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <x-forms.textarea name="description" label="Description" :value="old('description')"
                                help="Provide details about this package (features, benefits, etc.)" rows="4"/>
                        </div>
                    </div>

                    <div class="row mb-3" id="features-container">
                        <div class="col-12 mb-2">
                            <label for="features" class="form-label">Features</label>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" id="add-feature" class="btn btn-sm btn-falcon-default">
                                    <i class="fas fa-plus me-1"></i> Add Feature
                                </button>
                                <span class="text-muted small">Add key features or benefits included in this package</span>
                            </div>
                        </div>

                        <div class="col-12 feature-inputs">
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
                                Enable this option to make the package active and available for purchase
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="auto_renew" name="auto_renew" value="1"
                                    {{ old('auto_renew') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="auto_renew">Auto Renewal</label>
                            </div>
                            <div class="form-text text-muted">
                                Enable this option if this package should be automatically renewed
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.packages.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Package</button>
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
