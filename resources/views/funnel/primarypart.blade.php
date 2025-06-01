@extends('funnel.funnel')

@section('title', 'Funnel Frist Step')

@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/funnel/funnel.css') }}">
<style>
.state-scroll-box {
    max-height: calc(175px * 3);
    overflow-y: auto;
    border: 1px solid #eee;
    padding: 1rem;
    border-radius: 0.5rem;
    scroll-behavior: smooth;
    width: 70%;
    margin: 0px auto;
}
.state-item.active {
    border: 2px solid #545fc4;
    background-color: #f5f8ff;
}
.state-card.active {
    background-color: #edf4ff;
    border: 2px solid #0d6efd;
}
.business-model-scroll {
    max-height: calc(3 * 150px + 32px); /* 3 rows x card height + some spacing */
    overflow-y: auto;
    border: 1px solid #eee;
    border-radius: 6px;
    padding: 1rem;
    scroll-behavior: smooth;
}
.business-card {
    border: 1px solid #ddd;
    transition: all 0.3s;
    cursor: pointer;
}
.business-card:hover {
    border-color: #f26522;
}
.business-card.active {
    background-color: #545fc4;
    color: white;
    border-color: #545fc4;
}
@media (max-width: 768px) {
    .state-scroll-box {
        max-height: calc(170px * 5); /* taller cards on small screens */
    }
}
</style>

@endpush


@section('content')
<div class="container my-5">
  
  <div class="step-indicator mb-4">
      <div class="step active" data-step="1">
        <div class="circle">1</div>
        <p>Primary Contact</p>
      </div>
      <div class="step" data-step="2">
        <div class="circle">2</div>
        <p>Company Infomation</p>
      </div>
      <div class="step" data-step="3">
        <div class="circle">3</div>
        <p>Choose Your State</p>
      </div>
      <div class="step" data-step="4">
        <div class="circle">4</div>
        <p>Package Selection</p>
      </div>
      <div class="step" data-step="4">
        <div class="circle">5</div>
        <p>Payment Details</p>
      </div>


</div>

    <form id="multiStepForm">

      <!---- step1 -------->

      <div class="form-step active " id="step1">
          <div class="primary-contact">Primary Contact</div>
          <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>


          <div class="row g-4 pt-5 mb-5 primarycontact">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name*</label>
              <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email*</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="col-md-6">
              <label for="primaryPhone" class="form-label">Primary Mobile Phone*</label>
              <input type="tel" class="form-control" id="primaryPhone" placeholder="+880" required>
            </div>
            <div class="col-md-6">
              <label for="secondaryPhone" class="form-label">Secondary Mobile Number <span class="text-muted">(Optional)</span></label>
              <input type="tel" class="form-control" id="secondaryPhone" placeholder="+880">
            </div>
          </div>


          <button type="button" class="btn btn-primary next-step mt-5 nextbtn">Next</button>
      </div>

      <!---- step2 -------->

      <div class="form-step" id="step2">
        <div class="container primarycontact">
            <div class="primary-contact">Company Information</div>
            <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>


            <div class="row mb-4  pt-5 mb-5">
              <div class="col-md-6 mb-3">
                <label for="companyName" class="form-label fw-semibold">Company name*</label>
                <input type="text" class="form-control" id="companyName" placeholder="INTEL">
              </div>
              <div class="col-md-6 mb-3">
                <label for="category" class="form-label fw-semibold">Company structure*</label>
                <select class="form-select" id="category" onchange="updateOptions()">
                  <option value="">-- Select Category --</option>
                  <option value="llc">LLC</option>
                  <option value="nonp">Non-Profit</option>
                  <option value="corp">Corporation</option>
                  <option value="part">Partnership</option>
                </select>
              </div>
            </div>
            <div class="mb-3" id="item-group">
                <label for="item" class="form-label">Choose an item:</label>
                <select class="form-select" id="item">
                  <option value="">-- Select an item --</option>
                </select>
            </div>
            <div class="mb-4">
              <label class="form-label fw-semibold">Business Model*</label>
              <div class="business-model-scroll" id="businessModelWrapper">
                <div class="row g-3">
                  @if(isset($categories) && count($categories))
                      @foreach($categories as $category)
                        <div class="col-md-4" data-id="{{ $category->id }}">
                          <label class=" w-100 border rounded icon-btn boxdeg text-center p-3 business-box card js-biz-card" {{ old('business_model') == $category ? 'selected' : '' }}">
                          <input type="radio" name="business_model" value="{{ $category }}" class="d-none" {{ old('business_model') == $category ? 'checked' : '' }}>
                          <div class="icon icon-circle mb-2">
                              <i class="{{ $category-> icon }}"></i> {{-- replace icon if needed --}}
                          </div>
                          <div class="label icon-label boxtext">{{ $category->name }}</div>
                        </label>
                        </div>
                      @endforeach
                  @else
                      <li>No categories found.</li>
                  @endif
                   <input type="hidden" name="category_id" id="selectedCategoryId">
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-12">
                <label for="othermodel" class="form-label fw-semibold">Other's Business Model (If You Want)</label>
                <input type="text" class="form-control" id="othermodel" placeholder="XYZ Model">
              </div>
            <div class="form-check mb-4 mt-4">
              <input class="form-check-input" type="checkbox" id="newsletterCheck" checked>
              <label class="form-check-label text-muted" for="newsletterCheck">
                Subscribe our newsletter for get update.
              </label>
            </div>
            <div class="d-flex justify-content-between btnbtn mt-4 pt-4">
                <button type="button" class="btn btn-secondary prev-step prevstep  prebtn">Previous</button>
                <button type="button" class="btn btn-primary next-step nextstep nextbtn">Next</button>
            </div>
        </div>
      </div>

      <!---- step3 -------->

      <div class="form-step" id="step3">
        <div class="primary-contact">Choose Your State</div>
        <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>
        <div class="container ">
          <form id="stateForm" action="#" method="POST">
              <div class="search-container">
                  <input type="text" id="stateSearchInput" name="state" class="form-control" placeholder="🔍 Search State">
                  <input type="hidden" name="state_id" id="stateHiddenId">
              </div>
              <div class="state-scroll-box overflow-auto" id="stateList" >
                @foreach($states as $state)
                <div class="state-list-wrapper form-group">
                    <div class="state-card" data-name="{{ strtolower($state->state_name) }}" onclick="selectState('{{ $state->state_name }}')">
                      <strong>{{ $state->name }}</strong><br>
                      <small>{{ $state->description }}</small>
                      <div class="mt-2">
                          @if(is_array($state->features))
                              @foreach($state->features as $feature)
                                  <span class="badge bg-light text-dark border me-1">{{ $feature }}</span>
                              @endforeach
                          @endif
                      </div>
                      
                      <div class="selected-price">{{ $state->amount }}</div>
                    </div>
                </div>
                @endforeach
              </div>
            </form>
            <div class="d-flex justify-content-between mt-4 p-5">
              <button type="button" class="btn btn-secondary prev-step prebtn">Previous</button>
              <button type="button" class="btn btn-primary next-step nextbtn">Next</button>
            </div>
        </div>
      </div>
      <!---- step4 -------->
      <div class="form-step" id="step4">
        <div class="primary-contact">Package Selection</div>
        <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>

        <div class="container py-4">
          <div class="package-selector">
            <div class="package-tab active-tab" onclick="showPackage(1)">
              <div>💎 Package Details 1</div>
              <small>Regular ( $257/Year )</small>
            </div>
            <div class="package-tab" onclick="showPackage(2)">
              <div>💎 Package Details 2</div>
              <small>Regular ( $400/Year )</small>
            </div>
          </div>

          <div class="package-section">
            <!-- Left Image/Info -->
            <div class="row justify-content-center" style="">
                <div class="col-md-4" style="width: 36.333333% !important;" >
                  <div class="image-box">
                    <h4><strong>No Surprises. Just Results!!!</strong></h4>
                    <img src="{{ url('assets/images/funnel/buss.png') }}    " alt="Image" class="fluid">
                  </div>
                </div>

                <div class="col-md-4" style="width: 30.333333% !important;">
                  <!-- Package 1 -->
                  <form id="package1" class="package-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span>Package Details 1</span>
                      <span class="badge bg-light text-dark px-3 py-1">Regular</span>
                    </div>
                    <h2 id="totalPrice1" >$257 <small class="fs-5">/Year</small></h2>

                    <div class="form-check mt-3">
                      <input class="form-check-input" type="checkbox" id="service1" name="services[]" value="US Business Registration" checked>
                      <label class="form-check-label" for="service1">US Business Registration</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="service2" name="services[]" value="Registered Agent" checked>
                      <label class="form-check-label" for="service2">Registered Agent</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="service3" name="services[]" value="Mail Forwarding">
                      <label class="form-check-label" for="service3">Mail Forwarding</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="service4" name="services[]" value="EIN (Tax ID)" >
                      <label class="form-check-label" for="service4">EIN (Tax ID)</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="service5" name="services[]" value="Stripe Account Setup">
                      <label class="form-check-label" for="service5">Business Stripe Account Setup</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="service6" name="services[]" value="Email Support">
                      <label class="form-check-label" for="service6">Email Support</label>
                    </div>
                    <div class="form-check" style="position: relative;">
                      <input class="form-check-input" type="checkbox" id="service7" name="services[]" value="ITIN">
                      <label class="form-check-label" for="service7">ITIN ( $299 ) <i class="fa-solid fa-plus addplus addon-toggle" for="service7" data-price="299" data-target="1"></i>
                      </label>
                    </div>
                    <div class="form-check mb-4" style="position: relative;">
                      <input class="form-check-input" type="checkbox" id="service8" name="services[]" value="Bank">
                      <label class="form-check-label" for="service8">Business Bank ( $149 ) <i class="fa-solid fa-plus addplus addon-toggle" for="service8" data-price="149" data-target="1"></i></label>
                    </div>


                    <button class="btn btn-start nextbtn" type="submit">Get Started →</button>
                  </form>

                  <!-- Package 2 -->
                  <form id="package2" class="package-card hidden">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span>Package Details 2</span>
                      <span class="badge bg-light text-dark px-3 py-1">Regular</span>
                    </div>
                    <h2 id="totalPrice2">$400 <small class="fs-5">/Year</small></h2>

                      <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="services1" name="services[]" value="US Business Registration" checked>
                        <label class="form-check-label" for="services1">US Business Registration</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="services2" name="services[]" value="Registered Agent" checked>
                        <label class="form-check-label" for="services2">Registered Agent</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="services3" name="services[]" value="Mail Forwarding" checked>
                        <label class="form-check-label" for="services3">Mail Forwarding</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="services4" name="services[]" value="EIN (Tax ID)" checked >
                        <label class="form-check-label" for="services4">EIN (Tax ID)</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="services5" name="services[]" value="Stripe Account Setup" checked>
                        <label class="form-check-label" for="services5">Business Stripe Account Setup</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="services6" name="services[]" value="Email Support" checked>
                        <label class="form-check-label" for="services6">Email Support</label>
                      </div>
                      <div class="form-check" style="position: relative;">
                        <input class="form-check-input" type="checkbox" id="services7" name="services[]" value="ITIN">
                        <label class="form-check-label" for="services7" >ITIN ( $299 ) <i class="fa-solid fa-plus addplus addon-toggle" for="services7" data-price="299"  data-target="2"></i>
                        </label>
                      </div>
                      <div class="form-check mb-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" id="services8" name="services[]" value="Bank">
                        <label class="form-check-label" for="services8" >Business Bank ( $149 ) <i class="fa-solid fa-plus addplus addon-toggle" for="services8" data-price="149"  data-target="2"></i></label>
                      </div>

                    <button class="btn btn-start nextbtn" type="submit">Get Started →</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between mt-3 pt-5">
            <button type="button" class="btn btn-secondary prev-step">Previous</button>
            <button type="submit" style="background-color: #0d0c3d;" class="btn btn-success next-step nextbtn">Next</button>
        </div>
        <div class="container mt-5">
              <div class="row justify-content-center align-items-start g-4 pb-5">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">

                     <div id="testimonialCarousel" class="carousel slide position-relative" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
                      <div class="carousel-inner" style="box-shadow: 0px 1px 2px 0px #0000003b !important;">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                          <div class="testimonial">
                            <div class="mb-2 text-muted small">25/04/2024</div>
                            <img src="{{ url('assets/images/funnel/routeman.png') }}" alt="user">
                            <h6 class="mt-2 mb-1 fw-bold">Doe Marks <span class="text-muted">Canada</span></h6>
                            <p>“Outstanding service! I’m impressed by the professionalism and quick turnaround.”</p>
                            <div class="stars">
                              ★ ★ ★ ★ ☆
                            </div>
                          </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                          <div class="testimonial">
                            <div class="mb-2 text-muted  small">20/03/2024</div>
                            <img src="{{ url('assets/images/funnel/textimg.jpg') }}" alt="user">
                            <h6 class="mt-2 mb-1 fw-bold">Jane Doe <span class="text-muted">USA</span></h6>
                            <p>“Great experience overall, would definitely recommend to others.”</p>
                            <div class="stars">
                              ★ ★ ★ ★ ★
                            </div>
                          </div>
                        </div>


                      </div>

                      <!-- Dots inside carousel (bottom center) -->
                      <div class="carousel-indicators" style="    position: initial !important">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                    </div>


                    </div>
                    <div class="col-md-6">
                      <div class="trustpilot-box pt-5">
                            <div class="d-flex align-items-center mb-2">
                              <i class="fas fa-star text-success me-2 fs-4"></i>
                              <h5 class="mb-0">Trustpilot</h5>
                            </div>
                            <p class="mb-1 text-muted">Excellent</p>
                            <div class="stars mb-2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-muted small">TrustScore 4.5 | <a href="#" class="text-decoration-none">2537 reviews</a></p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-block" style="margin: 0px auto;">
                <div class="testimonial-block">
                  <h3>Gust wanted to share a quick note and let .</h3>
                  <p>I just wanted to share a quick note and let you know that you guys do a really good job. I'm glad I decided to work with you.</p>
                  <button class="btn-contact">
                    Contact us
                    <span class="arrow-icon">→</span>
                  </button>
                </div>
              </div>
          </div>
        </div>


       

       <!---- step5 -------->
      <div class="form-step" id="step5">
        <div class="primary-contact">Payment Details</div>
        <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>
        <div class="payment-container mb-5">
                <!-- Payment Method -->
                <div class="payment-box">
                    <form id="payment-form" method="POST" action="">
                        <!-- Fake PayPal radio -->


                        <div class="form-check mb-2" style ="padding-left: 0px i !important">
                        <label class="form-check-label" >Pay with Stripe</label>
                        <img src="https://img.icons8.com/color/48/000000/stripe.png" width="40">
                        </div>
                        <!-- Name and Expiry -->
                        <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Full Name Card*</label>
                            <input type="text" class="form-control" id="cardholder-name" name="cardholder_name" value="Pranto Islam" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Expired</label>
                            <input type="text" class="form-control" value="100%" >
                        </div>
                        </div>

                        <!-- Stripe Card and CVV -->
                        <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Card Number*</label>
                            <div id="card-element"></div>
                        </div>
                        <div class="col">
                            <label class="form-label">CVV*</label>
                            <input type="text" class="form-control" value="123">
                        </div>
                        </div>

                        <!-- Save bank -->
                        <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" checked>
                        <label class="form-check-label">Save Bank Account</label>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                        <label class="form-label">Email Address*</label>
                        <input type="email" class="form-control" name="email" id="email" value="microchips@gmail.com" disabled>
                        </div>

                        <!-- Invoice -->
                        <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" checked>
                        <label class="form-check-label">Will send invoice for your mail.</label>
                        </div>

                        <!-- Hidden field for Stripe payment method -->
                        <input type="hidden" name="payment_method_id" id="payment-method-id">

                        <div id="card-errors" class="text-danger mb-3"></div>

                        <!-- Submit -->
                    </form>
                </div>
              </div>

              <button type="button" class="btn btn-primary justify-content-center next-step mt-5 next-step nextbtn">Submit Now</button>
      </div>
    </form>

 
@endsection

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ asset('assets/js/funnel/script.js') }}"></script>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('stateSearchInput');
    const hiddenInput = document.getElementById('stateHiddenId');
    const cards = document.querySelectorAll('.state-card');

    // Enable card click -> set input value and state_id
    cards.forEach(card => {
        card.addEventListener('click', function () {
            const name = card.getAttribute('data-label');
            const id = card.getAttribute('data-id');

            searchInput.value = name;
            hiddenInput.value = id;

            cards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        });
    });

    // Live search
    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();

        cards.forEach(card => {
            const name = card.getAttribute('data-name');
            card.style.display = name.includes(query) ? 'block' : 'none';
        });
    });
});
</script>

@endpush