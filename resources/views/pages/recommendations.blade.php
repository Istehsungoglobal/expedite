@extends('layouts.app')
@section('title', 'Recommendations')

@push('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" />

 <style>
    .service-box {
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 2rem;
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }


    .service-title {
      color: #FF6B00;
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .service-highlight {
      font-weight: 600;
      font-size: 1.05rem;
      margin-bottom: 0.5rem;
    }

    .service-description {
      font-size: 0.95rem;
      color: #555;
      line-height: 1.6;
    }
    .congratulations1 {
        color: #f8561b;
    }
    .span {
        white-space: pre-wrap;
    }
    .congratulations {
        margin: 0;
    }
    .congratulations-here-are-container {
        font-size: 22px;
        font-weight: 500;
        font-family: Inter;
        text-align: left;
        color: #080808;
    }
    .these-5-services {
        font-size: 16px;
        line-height: 24px;
        font-family: Inter;
        color: #4b4b4b;
        text-align: justify;
        display: inline-block;
    }

    .message-smile-circle {
        position: absolute;
        top: 12px;
        left: 12px;
        width: 24px;
        height: 24px;
        overflow: hidden;
    }
    .featured-icon {
        width: 48px;
        position: relative;
        border-radius: 100px;
        background-color: #f8561b;
        height: 48px;
    }
    .text {
        align-self: stretch;
        position: relative;
        line-height: 30px;
        font-weight: 600;
    }
    .supporting-text {
        align-self: stretch;
        position: relative;
        font-size: 16px;
        line-height: 24px;
        color: #475467;
    }
    .text-and-supporting-text {
        align-self: stretch;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 8px;
    }
    .buttonsbutton {
        width: 168px;
        height: 24px;
        overflow: hidden;
        flex-shrink: 0;
    }
    .contentrecom {
        align-self: stretch;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 20px;
    }
    .contact-text {
        width: 100%;
        position: relative;
        border-radius: 24px;
        background-color: #fff;
        border: 1px solid #e4e7ec;
        box-sizing: border-box;
        height: 323px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        padding: 32px;
        gap: 32px;
        min-width: 280px;
        text-align: left;
        font-size: 20px;
        color: #101828;
        font-family: Inter;
    }
    .message-smile-circle {
        position: absolute;
        top: 12px;
        left: 12px;
        width: 61px;
        height: 61px;
        background-color: #f8561b;
        padding: 12px;
        border-radius: 50%;
    }
    .featured-icon{
        width: 70px;
        border-radius: 100px;
        background-color: #f8561b;
        height: 70px;
        padding: 10px;
    }
    
    .bank-building-1-1 {
        width: 100%;
        position: relative;
        max-width: 100%;
        overflow: hidden;
        max-height: 100%;
        object-fit: cover;
    }

     .get-now-btn {
      background-color: #FF5A1F;
      color: white;
      padding: 0.5rem 1.2rem;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      font-weight: 500;
      border: none;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .get-now-btn:hover {
      background-color: #e24f1a;
    }

    .arrow-circle {
      background-color: white;
      color: #FF5A1F;
      border-radius: 50%;
      width: 28px;
      height: 28px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-left: 8px;
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Recommendations</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="service-box">
            <div class="service-icon">
                <img style="width: 3%; display:block" src="{{ asset('assets/images/recom1.png') }}" alt="">
                <div class="congratulations-here-are-container">
                    <p class="congratulations">
                        <span class="congratulations1">Congratulations!</span>
                        <span class="span"> </span>
                    </p>
                    <p class="congratulations">Here are 5 handpicked services that can help your business grow.</p>
                </div>
                <div class="these-5-services">These 5 services: Business Bank Account, ITIN, EIN, Registered Agent, and Tax Filing are essential building blocks for starting, running, and scaling your U.S. business with confidence. We've picked them to help you stay compliant, financially ready, and fully set for growth.</div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="contact-text">
            <div class="featured-icon">
                <img class="bank-building-1-1" alt="" src="{{ asset('assets/images/recom2.png') }}">
                
            </div>
            <div class="contentrecom">
                <div class="text-and-supporting-text">
                    <div class="text">Business Bank Account</div>
                    <div class="supporting-text">Open a U.S. business bank account to accept payments globally, build trust, and keep your business finances secure and organized.</div>
                </div>
                <div class="text-end" style="position: absolute;right: 20px;bottom: 25px;margin: auto;">
                    <a href="#" class="get-now-btn">
                    Get Now
                    <span class="arrow-circle">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="contact-text">
            <div class="featured-icon">
                <img class="bank-building-1-1" alt="" src="{{ asset('assets/images/recom3.png') }}">
                
            </div>
            <div class="contentrecom">
                <div class="text-and-supporting-text">
                    <div class="text">Business Bank Account</div>
                    <div class="supporting-text">Open a U.S. business bank account to accept payments globally, build trust, and keep your business finances secure and organized.</div>
                </div>
                <div class="text-end" style="position: absolute;right: 20px;bottom: 25px;margin: auto;">
                    <a href="#" class="get-now-btn">
                    Get Now
                    <span class="arrow-circle">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="contact-text">
            <div class="featured-icon">
                <img class="bank-building-1-1" alt="" src="{{ asset('assets/images/recom4.png') }}">
                
            </div>
            <div class="contentrecom">
                <div class="text-and-supporting-text">
                    <div class="text">Business Bank Account</div>
                    <div class="supporting-text">Open a U.S. business bank account to accept payments globally, build trust, and keep your business finances secure and organized.</div>
                </div>
                <div class="text-end" style="position: absolute;right: 20px;bottom: 25px;margin: auto;">
                    <a href="#" class="get-now-btn">
                    Get Now
                    <span class="arrow-circle">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="contact-text">
            <div class="featured-icon">
                <img class="bank-building-1-1" alt="" src="{{ asset('assets/images/recom5.png') }}">
                
            </div>
            <div class="contentrecom">
                <div class="text-and-supporting-text">
                    <div class="text">Business Bank Account</div>
                    <div class="supporting-text">Open a U.S. business bank account to accept payments globally, build trust, and keep your business finances secure and organized.</div>
                </div>
                <div class="text-end" style="position: absolute;right: 20px;bottom: 25px;margin: auto;">
                    <a href="#" class="get-now-btn">
                    Get Now
                    <span class="arrow-circle">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="contact-text">
            <div class="featured-icon">
                <img class="bank-building-1-1" alt="" src="{{ asset('assets/images/recom6.png') }}">
                
            </div>
            <div class="contentrecom">
                <div class="text-and-supporting-text">
                    <div class="text">Business Bank Account</div>
                    <div class="supporting-text">Open a U.S. business bank account to accept payments globally, build trust, and keep your business finances secure and organized.</div>
                </div>
                <div class="text-end" style="position: absolute;right: 20px;bottom: 25px;margin: auto;">
                    <a href="#" class="get-now-btn">
                    Get Now
                    <span class="arrow-circle">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

   







@endsection

@push('script')




@endpush
