@extends('layouts.app')
@section('title', 'Tax Filling Quote Page')

@push('style')
<style>
.btn-orange {
    background-color: #f26522;
    color: white;
    border: none;
    font-weight: 500;
    transition: 0.3s;
}
.btn-orange:hover {
    background-color: #e2551c;
}
.taxforms{
    width: 60%;
    margin: 10px auto;
    padding: 5px;
}
</style>



@endpush


@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">USA Federal Tax Filing Quotation Forms</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 taxforms">
        <form method="POST" action="">
            @csrf
            <div class="container mt-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Company Name*</label>
                        <input type="text" name="company_name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address for Communication*</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Phone Number for Communication*</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Entity Type</label>
                        <select name="entity_type" class="form-select">
                            <option value="LLC" selected>LLC</option>
                            <option value="Corporation">Corporation</option>
                            <option value="Sole Proprietorship">Solo Proprietorship</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">State Name Where the Company Incorporated*</label>
                        <input type="text" name="state" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">EIN Number</label>
                        <input type="text" name="ein_number" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Company Business Address</label>
                        <input type="text" name="business_address" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Estimated Revenue</label>
                        <select name="estimated_revenue" class="form-select">
                            <option value="$0-$1000" selected>$0-$1000</option>
                            <option value="$1000-$5000">$1000-$5000</option>
                            <option value="$5000+">$5000+</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label">Company Member</label>
                        <select name="member_type" class="form-select">
                            <option value="Single member">Single member</option>
                            <option value="Multi member">Multi member</option>
                        </select>
                    </div>
                </div>

                <!-- Submit button centered -->
                <div style="text-align: right">
                    <button type="submit" class="btn btn-orange px-5 py-2 rounded-pill">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>


@endsection

@push('script')




@endpush
