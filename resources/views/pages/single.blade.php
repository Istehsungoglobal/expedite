@extends('layouts.app')
@section('title', 'Single Services')

@push('style')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />

<style>
.price-card {
      position: relative;
      background: white;
      border-radius: 16px;
      padding: 24px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      width: 250px;
      margin: auto;
        height: 160px;
    }

    .tab-top {
        position: absolute;
        top: -7px;
        left: 50%;
        transform: translateX(-50%);
        background: #ff5a1f;
        width: 84px;
        height: 6px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        box-shadow: 0 8px 20px rgba(255, 90, 31, 0.6);
        z-index: 10;
    }

    .price-card small {
      font-size: 15px;
    font-family: Inter;
    color: #4b4b4b;
    text-align: left;
    display: block;
    text-align: center
    }

    .price-card h2 {
        font-size: 35px;
        font-weight: 600;
        font-family: Inter;
        color: #080808;
        text-align: left;
        display: inline-block;
    }

    .get-btn {
      background-color: #ff5a1f;
      border: none;
      color: white;
      border-radius: 30px;
      padding: 8px 20px;
      font-size: 14px;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 4px 12px rgba(255, 90, 31, 0.3);
    }

    .get-btn .circle {
      background-color: white;
      color: #ff5a1f;
      border-radius: 50%;
      padding: 4px;
      width: 22px;
      height: 22px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Single Service</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5" style="width: 90%;">
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <div class="tab-top"></div>
                <small>Register agent</small>
                <h2>$299.00</h2>
                <button class="get-btn">
                    <a style="text-decoration: none; color:white" href="{{ route('admin.singleservicepayment') }}"> Get Now </a>
                    <span class="circle"><i class="fas fa-arrow-right"></i></span>
                </button>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <div class="tab-top"></div>
                <small>ITIN</small>
                <h2>$195.00</h2>
                <button class="get-btn">
                   <a style="text-decoration: none; color:white" href="{{ route('admin.singleservicepayment') }}"> Get Now </a>
                <span class="circle"><i class="fas fa-arrow-right"></i></span>
                </button>
            </div>
        </div>
        <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <div class="tab-top"></div>
                <small>EIN</small>
                <h2>$85.00</h2>
                <button class="get-btn">
                    <a style="text-decoration: none; color:white" href="{{ route('admin.singleservicepayment') }}"> Get Now </a>
                    <span class="circle"><i class="fas fa-arrow-right"></i></span>
                </button>
            </div>
         </div>
         <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <div class="tab-top"></div>
                <small>Business Bank Account</small>
                <h2>$215.00</h2>
                <button class="get-btn">
                    <a style="text-decoration: none; color:white" href="{{ route('admin.singleservicepayment') }}"> Get Now </a>
                    <span class="circle"><i class="fas fa-arrow-right"></i></span>
                </button>
            </div>
         </div>
    </div>
    <div class="row mt-5" style="90%">
         <div class="col-md-4" style="width: 25%;">
            <div class="price-card">
                <div class="tab-top"></div>
                <small>Business Stripe Account</small>
                <h2>$189.00</h2>
                <button class="get-btn">
                    <a style="text-decoration: none; color:white" href="{{ route('admin.singleservicepayment') }}"> Get Now </a>
                    <span class="circle"><i class="fas fa-arrow-right"></i></span>
                </button>
            </div>
         </div>
    </div>


</div>
   



@endsection

@push('script')




@endpush
