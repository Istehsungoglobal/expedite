@extends('funnel.funnel')

@section('title', 'Thanks')

@push('styles')
	<style type="text/css">


    /* thanks page */

    .thank-you-container {
      max-width: 1100px;
      margin: auto;
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .title-icon {
      width: 35px;
      height: 35px;
      background-color: #ff5b00;
      border-radius: 8px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 18px;
    }

    .section-title {
      font-weight: 700;
    }

    .order-card {
      	background-color: #f1f1f1;
    	border-radius: 20px;
    	box-shadow: 3px 3px 15px 4px rgba(0, 0, 0, 0.05);
    }

    .order-summary {
      background-color: #0d0c3d;
      color: white;
      border-radius: 14px;
      padding: 20px;
    }

    .order-details-box {
      border-top: 1px dashed #ccc;
      padding: 20px 0 0;
      position: relative;
    }

    .order-details-box::before,
    .order-details-box::after {
      content: "";
      position: absolute;
      width: 25px;
      height: 25px;
      background-color: #f9f9f9;
      border-radius: 50%;
      top: -13px;
    }

    .order-details-box::before {
      left: -12px;
    }

    .order-details-box::after {
      right: -12px;
    }

    .btn-pill {
      border-radius: 30px;
      padding: 10px 30px;
    }

    .btn-primary {
      background-color: #0d0c3d;
      border: none;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .btn-outline-primary {
      border: 1px solid #0d0c3d;
      color: #0d0c3d;
    }

    .btn-outline-primary:hover {
      background-color: #0d0c3d;
      color: #fff;
    }

    .download-icon {
      background-color: #ff5b00;
      border-radius: 50%;
      padding: 8px;
      color: white;
    }

    .order-summary p {
      margin-bottom: 10px;
    }
    @media print {
		.no-print {
		      display: none !important;
		    }
		  }
    </style>

@endpush

@section('content')
    
	<div class="thank-you-container mt-5">
	  <div id="invoice" class="row">
	    <!-- Left: Details -->
	    <div class="col-md-6">
	      <div class="d-flex align-items-center mb-3">
	        <div class="title-icon">
	          <span>🧾</span>
	        </div>
	        <h4 class="ms-2 mb-0">Thank You <span class="text-warning">Jhon Smith</span></h4>
	      </div>
	      <p class="text-muted">Congratulations, Your Order Has been Completed</p>

	      <div class="mb-3">
	        <label class="text-muted">Transaction ID</label>
	        <div class="form-control bg-light">12453662</div>
	      </div>
	      <div class="mb-3">
	        <label class="text-muted">Date</label>
	        <div class="form-control bg-light">Feb 24, 2025</div>
	      </div>
	      <div class="mb-3">
	        <label class="text-muted">Total</label>
	        <div class="form-control bg-light">$2,120</div>
	      </div>
	      <div class="mb-4">
	        <label class="text-muted">Payment method</label>
	        <div class="form-control bg-light">Paypal</div>
	      </div>
	    </div>

	    <!-- Right: Order Summary Card -->
	    <div class="col-md-6">
	      <div class="order-card p-4">
	        <h6 class="fw-bold mb-3">Order Details</h6>
	        <div class="order-summary">
	          <div class="d-flex justify-content-between">
	            <p>Usa Package</p>
	            <p>$257</p>
	          </div>
	          <div class="d-flex justify-content-between">
	            <p>Subtotal</p>
	            <p>% 20</p>
	          </div>
	          <div class="d-flex justify-content-between">
	            <p>US bank</p>
	            <p>$123.28</p>
	          </div>
	          <div class="d-flex justify-content-between">
	            <p>Payment method</p>
	            <p>Paypal</p>
	          </div>
	        </div>
	        <div class="order-details-box d-flex justify-content-between align-items-center mt-4">
	          <span class="fw-bold text-dark">Total</span>
	          <div class="d-flex align-items-center gap-2">
	            <span class="fw-bold text-primary fs-5">$257</span>


	          </div>
	        </div>
	      </div>
	    </div>
	  </div>

	  <button class="btn download-btn no-print" onclick="downloadInvoice()">
		  <i class="bi bi-download downloadpage"> Download </i>
		</button>

	  <!-- Footer Buttons -->
	  <div class="d-flex justify-content-between mt-5">
	    <button class="btn btn-primary btn-pill nextbtn">Next step</button>
	  </div>
	</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
	
    <script>
		  function downloadInvoice() {
		    // Hide elements with class 'no-print'
		    const elementsToHide = document.querySelectorAll('.no-print');
		    elementsToHide.forEach(el => el.style.display = 'none');

		    const element = document.getElementById('invoice');
		    const opt = {
		      margin:       0.5,
		      filename:     'order-details.pdf',
		      image:        { type: 'jpeg', quality: 0.98 },
		      html2canvas:  { scale: 2 },
		      jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
		    };

		    html2pdf().set(opt).from(element).save().then(() => {
		      // Show them back after saving
		      elementsToHide.forEach(el => el.style.display = '');
		    });
		  }
		</script>
@endpush

	


