@extends('funnel.funnel')
@section('title', 'Congrats Massage')

@push('styles')


<style>
    .confirmation-wrapper {
      background-color: #fff;
      border-radius: 16px;
      padding: 30px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      margin: 15px auto;

    }

    .confirmation-icon {
      background-color: #ff6b2c;
      color: #fff;
      font-size: 32px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    .btn-orange {
      background-color: #ff6b2c;
      font-weight: 500;
      padding: 8px 20px;
      border-radius: 6px;
      margin: 15px 0;
      display: inline-block;
      text-decoration: none;
    }

    .summary-section {
      margin-top: 30px;
    }

    .summary-section small {
      color: #6c757d;
      font-size: 13px;
      display: block;
      margin-bottom: 10px;
    }

    .summary-section .label {
      font-weight: 500;
      color: #555;
    }

    .summary-section .value {
      text-align: right;
    }

    .nextbtn:hover{
        background-color: #ff6b2c;
    }
</style>



@endpush


@section('content')
<div class="confirmation-wrapper text-center">
    <div class="confirmation-icon">
      ✓
    </div>
    <h4 class="fw-bold">Congrats! Your Order is Confirmed!</h4>
    <p class="text-muted">
      Thank you for choosing Steady Formation! We’ve received your payment and will now guide you through the next steps
    </p>
    <a href="#" style=" color: #fff;" class="btn-orange">Fill Company Details Form Now</a>

    <div class="summary-section text-start">
      <h6 class="fw-semibold">Order Summary</h6>
      <p class="mb-2 fw-semibold">LLC</p>
      <small>Choose an LLC for the ultimate flexibility and protection of your personal assets—
      streamline your business structure effortlessly.</small>

      <div class="row py-1">
        <div class="col-6 label">Name</div>
        <div class="col-6 value">Nasir Uddin</div>
      </div>
      <div class="row py-1">
        <div class="col-6 label">Email</div>
        <div class="col-6 value">nasir@gmail.com</div>
      </div>
      <div class="row py-1">
        <div class="col-6 label">Transaction ID</div>
        <div class="col-6 value">Thbd254 2543 21452</div>
      </div>
      <div class="row py-1">
        <div class="col-6 label">Time</div>
        <div class="col-6 value">10:00 AM</div>
      </div>
      <div class="row py-1">
        <div class="col-6 label">Date</div>
        <div class="col-6 value">Jun 6, 2025</div>
      </div>
      <div class="row py-1">
        <div class="col-6 label">Payment Method</div>
        <div class="col-6 value">Stripe</div>
      </div>
      <div class="row py-1 fw-semibold">
        <div class="col-6 label">Total Amount</div>
        <div class="col-6 value">$100.00</div>
      </div>
    </div>
    <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-primary btn-rounded nextbtn">
            <a style="text-decoration: none; color:white" href="{{ route('admin.singleforms') }}">  Next Stap (Need Some Information) </a>
        </button>
    </div>
</div>
<!-- Buttons -->

@endsection

@push('scripts')




@endpush
