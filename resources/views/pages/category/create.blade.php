@extends('layouts.app')

@section('title', 'Create New Category')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-dollar-sign me-1"></i> Create New Category</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-falcon-default btn-sm"
                                type="button">
                                <span class="fas fa-arrow-left" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Category List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <x-forms.text-input name="name" label="Name" :value="old('name')" required
                                help="Enter a descriptive name for category (e.g., Healthcare)"/>
                        </div>

                        <div class="col-md-6">
                            <x-forms.text-input name="icon" label="Category Icon" :value="old('icon')" required help="Enter the fontawesome icon class"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <x-forms.textarea name="description" label="Description" :value="old('description')"
                                help="Provide details about this category (purpose, requirements, etc.)" rows="4"/>
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
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
@endpush
