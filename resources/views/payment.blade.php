<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedite - Payment Details</title>
    <!--css file-->
    <link rel="stylesheet" href="{{ asset('assets/css/funnel/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/funnel/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/funnel/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/funnel/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/funnel/normalize.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap" />


    <link rel="stylesheet" href="{{ asset('assets/css/funnel/funnel.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/funnel/favicon.svg') }}">
</head>
<body>
	<!------------------- funnel menu start -------------------------->

	<div class="container">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
		  <div class="container-fluid">
		  	<a class="navbar-brand" href="#" >
		      <img src="{{ asset('assets/images/funnel/logo.png') }}" alt="Bootstrap" width="100" height="50">
		    </a>
		  </div>
		</nav>
		<hr>
	</div>

	<!------------------- funnel menu end -------------------------->


	<div class="container text-center py-5">
	  <h3 class="fw-bold">Payment Details</h3>
	  <p class="text-muted">Please fill the form below to receive a quote for your project.</p>
	</div>

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
	        <input type="text" class="form-control" value="Pranto Islam" readonly>
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
	      <input type="email" class="form-control" value="microchips" readonly>
	    </div>

	    <div class="form-check mb-4">
	      <input class="form-check-input" type="checkbox" id="sendInvoice" checked>
	      <label class="form-check-label text-muted" for="sendInvoice">
	        Will send invoice for your mail.
	      </label>
	    </div>

	    <!-- Buttons -->
	    <div class="d-flex justify-content-between">
	      <button class="btn btn-outline-secondary btn-custom prebtn">Previous step</button>
	      <button type="submit" class="btn btn-primary btn-rounded nextbtn">Pay Now $257</button>
	    </div>
	  </form>
	</div>





	<script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/brands.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/popper.min.js"></script> 
    
</body>
</html>