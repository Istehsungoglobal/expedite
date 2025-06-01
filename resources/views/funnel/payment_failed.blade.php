@extends('funnel.funnel')

@section('title', 'Payment Failed')

@push('styles')


@endpush

@section('content')
	<div class="failure-container">
		<img src="{{ url('assets/images/funnel/Payment.png') }}" class="failure-image">
		<h2 class="failure-title">Payment Failed</h2>
		<p class="failure-description">100% Confidential & Remote | Fastest Set-up in <br>the Industry | Stripe & Bank-Ready Access
		</p>
    	<a href="#" class="btn btn-try-again">Try Again</a>
  	</div>



@endsection

@push('scripts')

@endpush