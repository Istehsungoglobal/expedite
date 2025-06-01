
@extends('layouts.app')
@section('title', 'My Business')

@push('style')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />

<style>
.price-card {
        position: relative;
        background-color: white;
        border-radius: 16px;
        padding: 24px;
        text-align: center;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        width: 250px;
        margin: auto;
        height: 160px;
    }

    .price-card:hover{
        background-color: rgba(248, 86, 27, 0.04);
    }
    .price-card small {
        font-size: 14px;
        font-family: Inter;
        color: #4b4b4b;
        text-align: center;
        display: block;
        margin-top: 10px;
        text-align: center
    }

    .price-card h5 {
        font-size: 17px;
        font-weight: 600;
        font-family: Inter;
        color: #080808;
        text-align: center;
        margin: 10px 0px;
    }
    .briefcase-1-icon {
        width: 20%;
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">My Business</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5" style="width: 90%;">
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
    </div>
    <div class="row mt-4" style="width: 90%;">
         <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <img class="briefcase-1-icon" alt="" src="{{ asset('assets/images/businessmy.png') }}">
                <small>Business Name</small>
                <h5>Business Globalizer LLC</h5>
            </div>
        </div>
    </div>
</div>
   



@endsection

@push('script')




@endpush
