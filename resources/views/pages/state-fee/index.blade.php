@extends('layouts.app')
@section('title', 'State Fees Management')
@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">State Fees Management</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.state-fees.create') }}" class="btn btn-falcon-default btn-sm" type="button">
                                <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">New Fee</span>
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
                    id="stateFeesTable"
                    :route="route('admin.state-fees.index')"
                    :columns="[
                        ['data' => 'id', 'title' => 'ID', 'width' => '5%'],
                        ['data' => 'name', 'title' => 'Name'],
                        ['data' => 'amount_formatted', 'title' => 'Amount', 'orderable' => false],
                        ['data' => 'renew_amount_formatted', 'title' => 'Renewal Amount', 'orderable' => false],
                        ['data' => 'auto_renew_badge', 'title' => 'Renewal Type', 'orderable' => false],
                        ['data' => 'status_badge', 'title' => 'Status', 'orderable' => false],
                        ['data' => 'action', 'title' => 'Actions', 'orderable' => false, 'class' => 'text-end no-export', 'width' => '10%']
                    ]"
                    :order="[1, 'asc']"
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
                <h5 class="modal-title" id="filterModalLabel">Filter State Fees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userFilterForm">
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select">
                            <option value="">All</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="auto_renew" class="form-label">Auto Renewal</label>
                        <select id="auto_renew" name="auto_renew" class="form-select">
                            <option value="">All Fees</option>
                            <option value="yes">Yes, Only Auto Renew</option>
                            <option value="no">No, Show Manual Renew</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="resetFilter">Reset</button>
                <button type="button" class="btn btn-primary" id="applyFilter">Apply Filters</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stateFeesTable = $('#stateFeesTable').DataTable();
        const filterForm = document.getElementById('userFilterForm');
        const applyFilterBtn = document.getElementById('applyFilter');
        const resetFilterBtn = document.getElementById('resetFilter');

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
            stateFeesTable.ajax.url(`{{ route('admin.state-fees.index') }}?${new URLSearchParams(params)}`).load();

            // Close modal
            $('#filterModal').modal('hide');
        });

        // Reset filter button click
        resetFilterBtn.addEventListener('click', function() {
            filterForm.reset();

            // Reload the table with default parameters
            stateFeesTable.ajax.url('{{ route('admin.state-fees.index') }}').load();
        });
    });
</script>
@endpush
