@extends('funnel.funnel')

@section('title', 'Checkout')

@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/funnel/funnel.css') }}">

@endpush


@section('content')
	<div class="container py-5">
	  <div class="row">
	    <!-- Left Form -->
	    <div class="col-lg-7">
	      <div class="checkout-header d-flex align-items-center mb-4">
	        <i class="bi bi-list-check me-2"></i>
	        <div>
	          <h4>Checkout</h4>
	          <p>You're so close to making your business official 🎉</p>
	        </div>
	      </div>

	      <form>
	        <div class="row g-3">
	          <div class="col-md-6">
	            <label class="form-label">Company Name</label>
	            <input type="text" class="form-control" value="nhcompany" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">LLC Type</label>
	            <input type="text" class="form-control" value="Single member LLC" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">Business Model</label>
	            <input type="text" class="form-control" value="Development" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">State</label>
	            <input type="text" class="form-control" value="Wyoming" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">First Name</label>
	            <input type="text" class="form-control" value="N H Imon" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">Email</label>
	            <input type="email" class="form-control" value="nhimonwork@gmail.com" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">Primary Mobile Number</label>
	            <input type="text" class="form-control" value="+8801775368537" readonly>
	          </div>
	          <div class="col-md-6">
	            <label class="form-label">Package Price</label>
	            <input type="text" class="form-control" value="$257" readonly>
	          </div>
	        </div>

	        <div class="d-flex justify-content-between mt-4">
	          <button class="btn btn-outline-secondary btn-custom prebtn">Previous step</button>
	          <button class="btn btn-dark btn-custom nextbtn">Checkout</button>
	        </div>
	      </form>
	    </div>

	    <!-- Right Summary -->
	    <div class="col-lg-5">
	      <div class="order-summary">
		    <div class="order-tab"></div>
		    <h6 class="mb-3">Order Details</h6>

		    <div class="price-box">
		      <div class="item">
		        <span>Company Formation</span>
		        <span>$257</span>
		      </div>
		    </div>

		    <div class="price-box">
		      <div class="item">
		        <span><i class="bi bi-check-circle me-1"></i> ITIN</span>
		        <span>$299</span>
		      </div>
		      <div class="item">
		        <span><i class="bi bi-check-circle me-1"></i> Business Bank</span>
		        <span>$149</span>
		      </div>
		    </div>

		    <div class="total-price">
		      <span>Total</span>
		      <span class="text-primary fw-bold">$705</span>
		    </div>
		  </div>
	    </div>
	  </div>
	</div>

@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/funnel/script.js') }}"></script>
@endpush