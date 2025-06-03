@extends('layouts.fontpage')

@section('title', 'Contact Us')

@push('styles')
<style>
    .contact-section {
      padding: 60px 0;
    }

    .section-title {
      color: #ff5722;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .section-subtitle {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 6px;
    }

    .btn-dark-blue {
      background-color: #0a1c4f;
      color: white;
      padding: 10px 25px;
      border-radius: 30px;
      border: none;
      font-weight: 500;
    }

    .btn-dark-blue i {
      margin-left: 5px;
    }

    .contact-image img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.15);
    }

    @media (max-width: 767px) {
      .section-subtitle {
        font-size: 22px;
        text-align: center;
      }

      .section-title {
        text-align: center;
      }

      .btn-dark-blue {
        width: 100%;
      }
    }
  
    .contact-info-section {
      background: url('https://www.transparenttextures.com/patterns/white-wall-3.png');
      background-color: #f9f9f9;
      padding: 60px 30px;
    }

    .contact-info-section h2 {
      font-size: 32px;
      font-weight: 700;
      line-height: 1.3;
      margin-bottom: 10px;
    }

    .contact-info-section h6 {
      font-weight: 600;
    }

    .contact-item {
      padding-left: 20px;
    }

    .contact-item span {
      display: block;
      font-size: 14px;
      color: #555;
    }

    .divider {
      display: inline-block;
      width: 20px;
      height: 2px;
      background-color: #000;
      margin-bottom: 6px;
    }

    @media (max-width: 767px) {
      .contact-info-section h2 {
        font-size: 24px;
        text-align: center;
      }

      .contact-item {
        padding-left: 0;
        text-align: center;
        margin-top: 30px;
      }
    }
</style>
@endpush


@section('content')
    <div class="container contact-section">
        <div class="row align-items-center">
            <!-- Left Side – Form -->
            <div class="col-md-6 mb-4 mb-md-0">
            <div class="section-title">Get Started</div>
            <div class="section-subtitle">Get in touch with us.<br>We're here to assist you.</div>
            <form onsubmit="submitContact(event)">
                <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control" rows="4" placeholder="Write your message to us" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-dark-blue" style="width: 40%">
                    Leave us a Message <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                </div>
            </form>
            </div>

            <!-- Right Side – Image -->
            <div class="col-md-6 contact-image">
            <img src="{{ url('assets/images/dashboard.jpg') }}" alt="Dashboard Example">
            </div>
        </div>
    </div>

    <div class="container contact-info-section mb-3">
        <div class="row align-items-center">
            <!-- Left Text -->
            <div class="col-md-4">
                <small class="text-muted">Contact Info</small>
                <h2>Let’s Connect,<br>Your Success Starts Here.</h2>
            </div>

            <!-- Email Info -->
            <div class="col-md-4 contact-item">
                <h6>Email Address</h6>
                <div class="divider"></div>
                <strong>help@info.com</strong>
                <span>Assistance hours:<br>Monday - Friday 6 am to 8 pm EST</span>
            </div>

            <!-- Phone Info -->
            <div class="col-md-4 contact-item">
                <h6>Number</h6>
                <div class="divider"></div>
                <strong>(808) 998-34256</strong>
                <span>Assistance hours:<br>Monday - Friday 6 am to 8 pm EST</span>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script>
  function submitContact(e) {
    e.preventDefault();
    alert("Thank you for contacting us!");
  }
</script>


@endpush