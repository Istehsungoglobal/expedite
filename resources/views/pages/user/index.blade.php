@extends('layouts.app')
@section('title', 'User Management')
@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">User Management</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-falcon-default btn-sm" type="button">
                                <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">New User</span>
                            </a>
                            <button class="btn btn-falcon-default btn-sm mx-2" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">
                                <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Filter</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0">
                <x-datatable
                    id="usersTable"
                    :route="route('admin.users.index')"
                    :columns="[
                        ['data' => 'id', 'title' => 'ID', 'width' => '5%'],
                        ['data' => 'full_name', 'data' => 'first_name', 'title' => 'Name'],
                        ['data' => 'email', 'title' => 'Email'],
                        ['data' => 'phone', 'title' => 'Phone'],
                        ['data' => 'roles', 'title' => 'Roles', 'orderable' => false],
                        ['data' => 'status', 'title' => 'Status', 'orderable' => false],
                        ['data' => 'last_login', 'title' => 'Last Login', 'orderable' => false],
                        ['data' => 'action', 'title' => 'Actions', 'orderable' => false, 'class' => 'text-end no-export', 'width' => '10%']
                    ]"
                    :order="[1, 'desc']"
                    :pageLength="25"
                    :exportable="true"
                />
            </div>
        </div>
    </div>
</div>

<!-- Filter Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userFilterForm">
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-select">
                            <option value="">All Roles</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select">
                            <option value="">All Statuses</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    @isset($subscriptionOptions)
                    <div class="mb-3">
                        <label for="subscription" class="form-label">Subscription</label>
                        <select id="subscription" name="subscription" class="form-select">
                            <option value="">All Subscriptions</option>
                            @foreach($subscriptionOptions as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endisset

                    <div class="mb-3">
                        <label for="last_login" class="form-label">Last Login</label>
                        <select id="last_login" name="last_login" class="form-select">
                            <option value="">All Users</option>
                            <option value="yes">Has Logged In</option>
                            <option value="no">Never Logged In</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="last_activity" class="form-label">Last Activity</label>
                        <select id="last_activity" name="last_activity" class="form-select">
                            <option value="">All Activity</option>
                            <option value="recent">Active in Last 7 Days</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="resetUserFilter">Reset</button>
                <button type="button" class="btn btn-primary" id="applyUserFilter">Apply Filters</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const usersTable = $('#usersTable').DataTable();
        const filterForm = document.getElementById('userFilterForm');
        const applyFilterBtn = document.getElementById('applyUserFilter');
        const resetFilterBtn = document.getElementById('resetUserFilter');

        // Apply filter button click
        applyFilterBtn.addEventListener('click', function() {
            const formData = new FormData(filterForm);
            let params = {};

            for (const [key, value] of formData.entries()) {
                if (value) {
                    params[key] = value;
                }
            }

            // Reload the table with filter parameters
            usersTable.ajax.url(`{{ route('admin.users.index') }}?${new URLSearchParams(params)}`).load();

            // Close modal
            $('#filterModal').modal('hide');
        });

        // Reset filter button click
        resetFilterBtn.addEventListener('click', function() {
            filterForm.reset();

            // Reload the table with default parameters
            usersTable.ajax.url('{{ route('admin.users.index') }}').load();
        });
    });
</script>
@endpush
