@extends('funnel.funnel')

@section('title', 'Single Services Payment Details')

@push('styles')
<style>
    .nextbtn:hover{
        background-color: #f85c24;
    } 
</style>

@endpush

@section('content')
	<div class="container" style="width: 45%">
        <div class="payment-container mb-5">
        <!-- Payment Method -->
        <div class="mb-4">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" checked>
            <label class="form-check-label d-flex align-items-center gap-2" for="paypal">
                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal" style="height:24px;">
                <span>Pay with PayPal</span>
            </label>
            </div>
            <hr>
            <div class="form-check mt-3">
            <input class="form-check-input" type="radio" name="paymentMethod" id="card">
            <label class="form-check-label" for="card">
                Pay with credit or debit card
            </label>
            </div>
            <div class="payment-icons mt-2 d-flex align-items-center">
            <img src="https://img.icons8.com/color/48/visa.png" alt="Visa">
            <img src="https://img.icons8.com/color/48/mastercard-logo.png" alt="MasterCard">
            <img src="https://img.icons8.com/color/48/amex.png" alt="Amex">
            <img src="https://img.icons8.com/color/48/discover.png" alt="Discover">
            <img src="https://img.icons8.com/color/48/stripe.png" alt="Stripe">
            </div>
        </div>

        <!-- Form Fields -->
        <form>
            <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Full Name Card*</label>
                <input type="text" class="form-control" value="Pranto Islam">
            </div>
            <div class="col-md-6">
                <label class="form-label">Expired</label>
                <input type="text" class="form-control" placeholder="MM/YY" value="100%">
            </div>
            </div>

            <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Card Number*</label>
                <input type="text" class="form-control" placeholder="•••• •••• •••• 1234">
            </div>
            <div class="col-md-6">
                <label class="form-label">CVV*</label>
                <input type="text" class="form-control" placeholder="123">
            </div>
            </div>

            <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="saveCard" checked>
            <label class="form-check-label text-muted" for="saveCard">
                Save Bank Account
            </label>
            </div>

            <div class="mb-3">
            <label class="form-label">Email Address*</label>
            <input type="email" class="form-control" value="microchips@gmail.com">
            </div>

            <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="sendInvoice" checked>
            <label class="form-check-label text-muted" for="sendInvoice">
                Will send invoice for your mail.
            </label>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary btn-rounded nextbtn">
                    <a style="text-decoration: none; color:white" href="{{ route('admin.congrats') }}">  Pay Now </a>
                </button>
            </div>
        </form>
        </div>
    </div>



@endsection

@push('scripts')

@endpush