@extends('layouts.fontpage')

@section('title', 'Home')

@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


<style>
    .final-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }

    .final-left {
      flex: 1 1 350px;
    }

    .final-left h2 {
      font-size: 28px;
      margin-bottom: 16px;
    }

    .final-left p {
      font-size: 16px;
      margin-bottom: 24px;
      line-height: 1.6;
    }

   

    .final-right {
      flex: 1 1 600px;
      background: linear-gradient(to bottom right, #1c3fd2, #3b83f6);
      border-radius: 20px;
      padding: 40px 20px 30px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
      text-align: center;
      border: 9px solid white;
    }

    .final-slider-wrapper {
      position: relative;
      height: 320px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .testimonial-card {
      width: 300px;
      background: white;
      border-radius: 20px;
      padding: 20px;
      position: absolute;
      transition: all 0.5s ease;
      opacity: 0;
      filter: blur(2px);
      transform: scale(0.85);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .testimonial-card.center {
      position: relative;
      opacity: 1;
      filter: none;
      transform: scale(1);
      z-index: 3;
    }


    .testimonial-card.left {
      transform: translateX(-250px) scale(0.85);
      opacity: 0.4;
      z-index: 1;
    }

    .testimonial-card.right {
      transform: translateX(250px) scale(0.85);
      opacity: 0.4;
      z-index: 1;
    }

    .testimonial-card img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .stars {
      margin: 10px 0;
      display: inline-block;
      position: absolute;
      left: 90px;
      top: 50px;
    }

    .stars img {
      width: 18px;
      margin-right: 3px;
    }

    .name {
      font-weight: 600;
      font-size: 16px;
    }

    .country {
      font-size: 13px;
      color: gray;
    }

    .date {
      font-size: 12px;
      color: #999;
      margin-bottom: 10px;
    }

    .message {
      font-size: 14px;
      color: #333;
      line-height: 1.5;
    }
    .trusexce{
        font-size: 18px;
        line-height: 26px;
        font-family: Poppins;
        color: #fff;
        text-align: left;
    }
    .retrus{
        font-size: 12px;
        text-align: left;
    }
   

    @media (max-width: 768px) {
      .final-container {
        flex-direction: column;
        align-items: flex-start;
      }

      .testimonial-card.left,
      .testimonial-card.right {
        display: none;
      }

      .final-slider-wrapper {
        height: auto;
      }
    }
</style>
@endpush

@section('content')
    
<!--------- hero part section ----------->

<section class="hero pb-sm-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="frame-parent">
                    <div class="vuesaxlineartick-circle-parent">
                       <img class="vuesaxlineartick-circle-icon" alt="" src="{{asset('assets/images/funnel/check.svg')}}">
                       <div class="start">START</div>
                    </div>
                    <div class="vuesaxlineartick-circle-parent">
                       <img class="vuesaxlineartick-circle-icon" alt="" src="{{asset('assets/images/funnel/check.svg')}}">
                       <div class="start">SCALE</div>
                    </div>
                    <div class="vuesaxlineartick-circle-container">
                       <img class="vuesaxlineartick-circle-icon" alt="" src="{{asset('assets/images/funnel/check.svg')}}">
                       <div class="start">SUCCEED</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="expedite-your-us-container">
                    <span class="expedite-your">Expedite YOUR </span>
                    <span class="us-company-formation">U.S. COMPANY formation</span>
                    <span class="dominate-your"> Dominate Your<div class="svgdiv"> <svg class="svgicon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#f8561b" ><path d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z"/></svg></div>Industry.</span>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="confidential-remote-container">
                    <span class=" fastest">100%</span><span class="confidential-remote"><span class="officia"> Confidential & Remote |</span><span class="fastest"> </span></span><span class="fastest"><span>Fastest</span></span><span class="set-up-in-the"> Set-up in the Industry | Stripe & Bank-</span><span class=" fastest">Ready</span><span class="set-up-in-the"> Access | </span><span class="officia"><span class=" fastest">Officia</span></span><span class="confidential-remote"><span class="officia">l </span><span> U.S. Address.</span></span>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="llc-input-container">
                    <input type="text" class="llc-input-field" placeholder="Enter your preferred company name" />
                    <button class="llc-submit-btn">
                      Start an LLC <i class="lbtn">&#8594;</i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="frame-parenticon">
                    <div class="rectangle-div" style="background-color: #F9FAFF;padding: 5px 5px;">
                       <img class="magic-wand-1-icon" alt="" src="{{asset('assets/images/m.png')}}">
                       <div class="start"  style="display: inline;">No Delays</div>
                    </div>
                    <div class="rectangle-div" style="background-color: #FFF8F5;padding: 5px 5px;">
                       <img class="magic-wand-1-icon" alt="" src="{{asset('assets/images/m.png')}}">
                       <div class="start" style="display: inline;">No Hassles</div>
                    </div>
                    <div class="rectangle-div" style="background-color: #F9FAFF;padding: 5px 5px;">
                       <img class="magic-wand-1-icon" alt="" src="{{asset('assets/images/m.png')}}">
                       <div class="start"  style="display: inline;">No Hidden Fees</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3 mt-4">
            <div class="col-12">
                <div class="customer-stats w-4">
                    <div class="container">
                        <div class="top-center-wrapper">
                            <div class="trustpilot-box">
                                <div class="avatars">
                                <img src="https://i.pravatar.cc/30?img=11" alt="avatar1">
                                <img src="https://i.pravatar.cc/30?img=12" alt="avatar2">
                                <img src="https://i.pravatar.cc/30?img=13" alt="avatar3">
                                </div>
                                <span>8,182</span>
                                <span class="rating"><span class="rating-number">4.5</span> Rating</span>
                                <span class="trustpilot-text">★ Trustpilot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 ">
            <div class="col-12">
                <div class="logo-slider-wrapper">
                    <div class="logo-slider-track">
                      <!-- Repeat enough logos to ensure seamless scroll -->
                      <img src="{{asset('assets/images/Discover.webp')}}" >
                      <img src="{{asset('assets/images/Mastercard.webp')}}" >
                      <img src="{{asset('assets/images/payoneer.webp')}}">
                      <img src="{{asset('assets/images/Stripe.webp')}}">
                      <img src="{{asset('assets/images/visa.webp')}}">
                      <img src="{{asset('assets/images/data1 (1).png')}}">
                      <img src="{{asset('assets/images/data1 (2).png')}}">
                      <img src="{{asset('assets/images/Wise.webp')}}">
                      <img src="{{asset('assets/images/UPI.webp')}}">
                      <img src="{{asset('assets/images/paypal.webp')}}">
                      <img src="{{asset('assets/images/Discover.webp')}}" >
                      <img src="{{asset('assets/images/Mastercard.webp')}}" >
                      <img src="{{asset('assets/images/payoneer.webp')}}">
                      <img src="{{asset('assets/images/Stripe.webp')}}">
                      <img src="{{asset('assets/images/visa.webp')}}">
                      <img src="{{asset('assets/images/data1 (1).png')}}">
                      <img src="{{asset('assets/images/data1 (2).png')}}">
                      <img src="{{asset('assets/images/Wise.webp')}}">
                      <img src="{{asset('assets/images/UPI.webp')}}">
                      <img src="{{asset('assets/images/paypal.webp')}}">
                      
                    </div>
                  </div>

            </div>
        </div>

    </div>
</section>

<!--- FORMATION Section -->

<section class="formation mb-5 mt-5">
    <div class="container">
        <div class="row pt-sm-5">
            <div class="col-12"style="text-align: center" >
                <p class="why-expedite-formation">WHY Expedite FORMATION</p>
            </div>
        </div>
        <div class="row pt-2 mb-5">
            <div class="col-12"style="text-align: center" >
                <div class="entrepreneurs-move-fast-container">
                    <p class="entrepreneurs-move-fast">Entrepreneurs move fast. We move faster.</p>
                    <p class="entrepreneurs-move-fast">US business in Clicks. No paperwork, no visits, no-nonsense.</p>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-md-3 col-sm-6 p-1">
                <div class="card cardfor-parent">
                  <div class="parents">
                    <div class="divs">30+</div>
                    <div class="countries-served">Countries served</div>
                  </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 p-1">
                <div class="card cardfor-parent">
                  <div class="parents">
                    <div class="divs">2k+</div>
                    <div class="countries-served">Companies formed</div>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-1">
                <div class="card cardfor-parent">
                  <div class="parents">
                    <div class="divs">2k+</div>
                    <div class="countries-served">Clients</div>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-1">
                <div class="card cardfor-parent">
                  <div class="parents">
                    <div class="divs">5+</div>
                    <div class="countries-served">Years of experience</div>
                  </div>
                </div>
            </div>
            <div class="get-started-parent mt-5">
                <div class="get-started">Get Started</div>
                <i class="lbtne">&#8594;</i>
            </div>
        </div>
    </div>
</section>

<!-- everything part -->

<section class="everything pt-4">
    <div class="container">
        <img class="vector-icon" alt="" src="{{url('assets/images/funnel/Union.png')}}">
        <div class="row">
            <div class="col-12">
                <div class="everything-you-need-container">
                    <p class="everything-you-need">Everything You Need,</p>
                    <p class="everything-you-need">Nothing You Don’t</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                 <img class="everyimg"  alt="" src="{{url('assets/images/funnel/every (1).jpg')}}">
            </div>
            <div class="col-md-8" style="position: relative">
                <div id="serviceSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-color:#00000000">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="service-card">
                                        <div class="everyslider">
                                           <h6>US Business Incorporation</h6>
                                           <p class="small">Legal, compliant, and ready for business</p>
                                        </div>
                                        <div class="servicecat">
                                            <div class="service-img">
                                                <img class="serimg" src="{{url('assets/images/funnel/every (2).jpg')}}" alt="Business">
                                            </div>
                                            <img class="servimg" src="{{url('assets/images/funnel/corp1.png')}}" style="filter: brightness(1);" alt="">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <div class="service-card">
                                        <div class="everyslider">
                                              <h6>Registered Agent Service</h6>
                                              <p class="small">Stay in good standing without the hassle.</p>
                                        </div>
                                        <div class="servicecat">
                                            <div class="service-img">
                                                <img class="serimg" src="{{url('assets/images/funnel/every (3).jpg')}}" alt="Business">
                                            </div>
                                            <img class="servimg" src="{{url('assets/images/funnel/corp2.png')}}" style="filter: brightness(1);" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-card">
                                        <div class="everyslider">
                                           <h6>Mail Forwarding</h6>
                                           <p class="small">Get a US address, no matter where you are.</p>
                                        </div>
                                        <div class="servicecat">
                                            <div class="service-img">
                                                <img class="serimg" src="{{url('assets/images/funnel/every (4).jpg')}}" alt="Business">
                                            </div>
                                            <img class="servimg" src="{{url('assets/images/funnel/corp3.png')}}" style="filter: brightness(1);" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!-- Slide 2 -->
                      <div class="carousel-item" style="background-color:#00000000">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="service-card">
                                <div class="everyslider">
                                    <h6>Tax ID / EIN</h6>
                                    <p class="small">We handle the EIN filing for your entity.</p>
                                </div>
                                <div class="servicecat">
                                    <div class="service-img">
                                        <img class="serimg" src="{{url('assets/images/funnel/every (4).jpg')}}" alt="Business">
                                    </div>
                                    <img class="servimg" src="{{url('assets/images/funnel/corp1.png')}}" style="filter: brightness(1);" alt="">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="service-card">
                              <div class="everyslider">
                                <h6>Virtual Office</h6>
                                <p class="small">Establish your business presence remotely.</p>
                              </div>
                              <div class="servicecat">
                                    <div class="service-img">
                                        <img class="serimg" src="{{url('assets/images/funnel/every (5).jpg')}}" alt="Business">
                                    </div>
                                    <img class="servimg" src="{{url('assets/images/funnel/corp2.png')}}" style="filter: brightness(1);" alt="">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="service-card">
                              <div class="everyslider">
                                <h6>Bank Account Setup</h6>
                                <p class="small">Open a US-based bank account quickly.</p>
                              </div>
                              <div class="servicecat">
                                    <div class="service-img">
                                        <img class="serimg" src="{{url('assets/images/funnel/every (6).jpg')}}" alt="Business">
                                    </div>
                                    <img class="servimg" src="{{url('assets/images/funnel/corp3.png')}}" style="filter: brightness(1);" alt="">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Indicators -->
                    <div class="d-flex justify-content-center mt-3">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#serviceSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#serviceSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                    </div>
                </div>
            </div>
            <div class="get-started-parentblu">
                <div class="get-starteds">Get Started</div>
                <i class="lbtncat">&#8594;</i>
            </div>
        </div>
    </div>
</section>
<!-- business part -->
<section class="business pt-5 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <h1 class="pick-the-best">Pick the best plan to grow your business</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12">
                <div class="result-card shadow-sm mx-auto">
                    <div class="result-text">No Surprises. Just Results!!!</div>
                    <img src="{{url('assets/images/funnel/buss.png')}}" style="height: 80%;" alt="Woman working at laptop">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
              <div class="packages">
                  <div class="row">
                      <div class="col-md-6">
                            <!-- Package 1 -->
                            <form action="">
                                <div class="package-card active">
                                  <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div style="font-size: 12px"><strong>Essential Formation</strong></div>
                                    <div class="label-tag">Standard Delivery Timeline</div>
                                  </div>

                                  <div class="price-row">
                                    <h2 class="total-price">$179</h2>
                                    <span>/Year</span>
                                  </div>

                                  <ul class="feature-list">
                                    <li class="feature-item"><label><input type="checkbox" checked disabled> US Business Registration</label></li>
                                    <li class="feature-item"><label><input type="checkbox" checked disabled> Registered Agent</label></li>
                                    <li class="feature-item"><label><input type="checkbox" checked disabled> Mail Forwarding</label></li>
                                    <li class="feature-item"><label><input type="checkbox" checked disabled> EIN (Tax ID)</label></li>
                                    <li class="feature-item"><label><input type="checkbox" checked disabled> Business Stripe Account Setup</label></li>
                                    <li class="feature-item"><label><input type="checkbox" checked disabled> Email & Dashboard Support</label></li>
                                    <li class="feature-item disabled" style="position: relative;">
                                      <label><input type="checkbox" class="addon" value="299"> ITIN ($299)
                                      <img src="{{ url('assets/images/addicon.png') }}" class="addplushome addon-toggle addon" value="299" >
                                      </label>
                                    </li>
                                    <li class="feature-item disabled" style="position: relative;">
                                      <label><input type="checkbox" class="addon" value="149"> Business Bank ($149)
                                        <img src="{{ url('assets/images/addicon.png') }}" class="addplushome addon-toggle addon" value="149" >
                                      </label>
                                    </li>
                                  </ul>

                                  <button class="total-btn" style="color: #172155;">
                                    Get Started <span class="rarr" style="background-color: #F8561B;color: white;">→</span>
                                  </button>
                                </div>
                            </form>
                      </div>
                      <div class="col-md-6">
                            <!-- Package 2 -->
                            <form action="">
                                  <div class="package-card">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                      <div style="font-size: 12px"><strong>Expedite Formation</strong></div>
                                      <div class="label-tag">Priority Handling & Fast Delivery</div>
                                    </div>

                                    <div class="price-row">
                                      <h2 class="total-price">$250</h2>
                                      <span>/Year</span>
                                    </div>

                                    <ul class="feature-list">
                                      <li class="feature-items"><label><input type="checkbox" checked disabled> US Business Registration</label></li>
                                      <li class="feature-items"><label><input type="checkbox" checked disabled> Registered Agent</label></li>
                                      <li class="feature-items"><label><input type="checkbox" checked disabled> Mail Forwarding</label></li>
                                      <li class="feature-items"><label><input type="checkbox" checked disabled> EIN (Tax ID)</label></li>
                                      <li class="feature-items"><label><input type="checkbox" checked disabled> Business Stripe Account Setup</label></li>
                                      <li class="feature-items"><label><input type="checkbox" checked disabled> Email & Dashboard Support</label></li>
                                      <li class="feature-item disabled" style="position: relative;">
                                        <label><input type="checkbox" class="addon" value="299"> ITIN ($299)
                                        <img src="{{ url('assets/images/addicon.png') }}" class="addplushome addon-toggle addon" value="299" >
                                        </label>
                                      </li>
                                      <li class="feature-item disabled" style="position: relative;">
                                        <label><input type="checkbox" class="addon" value="149"> Business Bank ($149)
                                        <img src="{{ url('assets/images/addicon.png') }}" class="addplushome addon-toggle addon" value="149" >
                                        </label>
                                      </li>
                                    </ul>

                                    <button class="total-btn">
                                      Get Started <span class="rarr">→</span>
                                    </button>
                                  </div>
                            </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<!----Set Up section ------------>
<section class="setup pt-5 mt-4 pb-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="why-set-up">Why Set Up in the US?</div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="row" style="background-color: #ccc;border-radius: 15px;padding: 10px;">
                    <div class="feature-box">
                        <div class="feature-text">
                          <div class="feature-title">Asset <br>Protection</div>
                          <div class="feature-desc">
                            Shield your personal finances from business liabilities. A US-registered business ensures legal separation between your personal and business assets.
                          </div>
                        </div>
                        <div class="feature-icon">
                          <i class="bi bi-shield-check"></i>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="feature-box">
                        <div class="feature-text">
                          <div class="feature-title">Payment <br>Freedom</div>
                          <div class="feature-desc">
                            Get instant access to Stripe, PayPal, and global banking solutions—accept payments from anywhere.
                          </div>
                        </div>
                        <div class="feature-icon">
                          <i class="bi bi-cash-coin"></i>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="feature-box">
                        <div class="feature-text">
                          <div class="feature-title">No Residency <br>Required</div>
                          <div class="feature-desc">
                            No US address or citizenship needed. Form, manage, and scale your US company entirely online from anywhere in the world.
                          </div>
                        </div>
                        <div class="feature-icon">
                          <i class="bi bi-house-door"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="group-parent">
                            <div class="left-content-wrapper">
                                <div class="left-content">
                                    <img class="vuesaxlinearmoney-send-icon" alt="" src="{{url('assets/images/funnel/money.svg')}}">
                                    <div class="tax-benefits-wrapper">
                                        <div class="tax-benefits">Tax Benefits</div>
                                    </div>
                                </div>
                            </div>
                            <img class="frame-child circlechild" alt="" src="{{url('assets/images/Gr.svg')}}">
                            <div class="parent">
                                <div class="div">84.40%</div>
                                <div class="jan-2025-wrapper">
                                    <div class="jan-2025">Jan, 2025</div>
                                </div>
                            </div>
                            <div class="frame-wrappercirclechild">
                                <div class="optimize-your-profits-with-a-b-wrapper">
                                    <div class="optimize-your-profits">Optimize your profits with a business-friendly tax structure. Many US states offer zero corporate taxes for non-resident companies.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="frame-parentExpansion">
                            <div class="business-expansion-parent">
                                <div class="business-expansion">Business Expansion</div>
                                <div class="a-us-registered-business">A US-registered business opens doors to international trade, funding opportunities, and strategic partnerships, helping you scale with ease.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2" style="border-radius:15px;">
                        <div class="frame-parentglobal">
                            <div class="global-credibility-parent">
                                <div class="global-credibility">Global Credibility</div>
                                <div class="a-us-registered-businessglobal">A US-registered business boosts trust with investors, clients, and marketplaces like Amazon & eBay, setting you apart from competitors.</div>
                            </div>
                        </div>
                        <div class="flag">
                            <div class="slider-section" style="width: 90%;margin: 0px auto; height: 89%;">
                              <!-- Row 1 -->
                              <div class="slider-wrapper" style="line-height: 0px;">
                                <div class="slider-row" style="    margin: 0px;">
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (6).jpg')}}" alt="">India</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (10).jpg')}}" alt="">Thailand</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (7).jpg')}}" alt="">Combodia</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (2).png')}}" alt="">Malaysia</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (3).jpg')}}" alt="">Vietnam</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (6).png')}}" alt="">Singapore</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (1).png')}}" alt="">Indonesia</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (8).jpg')}}" alt="">Nepal</div>
                                  <!-- Duplicate for smooth scroll -->
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (4).png')}}" alt="">Philippines</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (4).jpg')}}" alt="">SriLanka</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (1).jpg')}}" alt="">Bhutan</div>
                                </div>
                              </div>

                              <!-- Row 2 (opposite direction) -->
                              <div class="slider-wrapper" style="line-height: 0px;">
                                <div class="slider-row reverse" style="line-height: 0px;">
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (9).jpg')}}" alt="">Myanmar</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (2).jpg')}}" alt="">Turkey</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (11).jpg')}}" alt="">Bangladesh</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (5).jpg')}}" alt="">Hong Kong</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (5).png')}}" alt="">Pakistan</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (10).jpg')}}" alt="">Bangkok</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (3).png')}}" alt="">Maldives</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (3).jpg')}}" alt="">Vietnam</div>
                                  <!-- Duplicate for loop -->
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (4).jpg')}}" alt="">SriLanka</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (1).jpg')}}" alt="">Bhutan</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (7).jpg')}}" alt="">Combodia</div>
                                  <div class="flag-card"><img src="{{asset('assets/images/flag/flag (1).png')}}" alt="">Indonesia</div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---- Route ---->

<section class="route mb-5">
    <div class="container" style="margin-bottom:7%">
        <div class="group-333-1-parent">
            <div class="row">
                <div class="col-md-6 ">
                    <h1 class="routeh1" >Your Quickest Route to Forming a U.S. Business</h1>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                   <p class="routep">A US-registered business boosts trust with investors, clients, and marketplaces like Amazon & eBay, setting you apart from competitors.</p>
                </div>
            </div>
            <div class="row">
                <div class="col routemancol">
                    <img class="routeman" src="{{url('assets/images/funnel/routeman.png')}}" alt="">
                    <div class="divone actives">
                        <h6>Step 1</h6>
                        <p>Choose Your Package</p>
                    </div>
                    <div class="divtwo">
                        <h6>Step 2</h6>
                        <p>Fill Out a Quick Form and Pay</p>
                    </div>
                    <div class="divthree">
                        <h6>Step 3</h6>
                        <p>We Handle the Setup</p>
                    </div>
                    <div class="divfour">
                        <h6>Step 4</h6>
                        <p>Go Live and Scale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--- client logo -->
<section class="clientlogo mt-5 mb-5">
    <div class="container">
      <div class="brand-strip-container">
        <div class="fade-overlay-left"></div>
        <div class="fade-overlay-right"></div>
        <div class="brand-strip-track row-1" id="dynamicLogoSlider">
          <!-- Duplicated logos for infinite loop -->
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-1.webp') }}" alt="Logo 1"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-2.webp') }}" alt="Logo 2"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-3.webp') }}" alt="Logo 3"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-4.webp') }}" alt="Logo 4"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-5.webp') }}" alt="Logo 5"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-6.webp') }}" alt="Logo 6"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-7.webp') }}" alt="Logo 7"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-8.webp') }}" alt="Logo 8"></div>
          <!-- Repeat the same logos to create infinite effect -->
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-1.webp') }}" alt="Logo 1"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-2.webp') }}" alt="Logo 2"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-3.webp') }}" alt="Logo 3"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-4.webp') }}" alt="Logo 4"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-5.webp') }}" alt="Logo 5"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-6.webp') }}" alt="Logo 6"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-7.webp') }}" alt="Logo 7"></div>
          <div class="brand-logo-wrapper"><img src="{{ url('assets/images/MOU-8.webp') }}" alt="Logo 8"></div>
        </div>
      </div>
    </div>
</section>


<!----- textmoniel   ----->

<section class="textmoniel mt-5 mb-5">
    <div class="container" style="margin-top: 7%;">
        <div class="final-container">
            <!-- LEFT -->
            <div class="final-left">
              <h2>What Our Clients Say</h2>
              <p>Your success stories fuel our passion. Here’s a quick note from our happy clients sharing their experience with us.</p>
              <div class="contact-us-parentg mt-5">
                  <div class="contact-us">Contact us</div>
                  <i class="lbtnsay">&#8594;</i>
               </div>
            </div>

            <!-- RIGHT -->
            <div class="final-right">
                <div class="row">
                    <div class="col-md-8" style="overflow: hidden;">
                        <div class="final-slider-wrapper" id="testimonialSlider">
                          <!-- Cards will be rendered here -->
                        </div>
                    </div>
                    <div class="col-md-4" style="position: relative;">
                      <!-- Trustpilot -->
                        <div class="mt-4" style="position: absolute;top: 50px;left: 25px;">
                            <img style="display:block" src="{{ url('assets/images/true.svg') }}" width="120" alt="Trustpilot"/>
                            <div class="mt-2 trusexce">Excellent</div>
                            <div class="trustpilot-stars" style="text-align: left;">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star inactive">★</span>
                            </div>
                            <div class="text-white mt-1 retrus">TrustScore 4.5 | 25,327 reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<section>
    <div class="container" style="margin-top: 7%;">
      <div class="container-flude pb-5">
          <div class="video-slider-section">
              <div class="expedite-formation-journey-container">
                  <span class="expedite">Expedite</span> FORMATION Journey
              </div>
              <div class="entrepreneurs-move-fast-containers">
                <p class="entrepreneurs-move-fast">Real Voices. Real Wins.</p>
                <p class="entrepreneurs-move-fast">Unfiltered stories from entrepreneurs who’ve built faster, smarter, and bolder—with us.</p>
              </div>
              <div class="video-slider" id="videoSlider">
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
          </div>
      </div>
    </div>
</section>


<!---- Frequently ask ---->
<section class="ask mt-3 mb-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="frequently-asked-questions">Frequently Asked Questions</div>
                <div class="offending-belonging-promotion">Some of the most common questions our clients ask—answered clearly to help you make confident decisions. </div>

                <div class="accordion accdesign mt-5" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Do I need to be in the US to form a company there?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> Yes! Our package includes a Business Stripe Account, and we provide guidance on PayPal setup for non-residents
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Will my company help me get a Stripe or PayPal account?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> Yes! Our package includes a Business Stripe Account, and we provide guidance on PayPal setup for non-residents
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the ongoing requirements for my company?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> Yes! Our package includes a Business Stripe Account, and we provide guidance on PayPal setup for non-residents
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        Which US state is best for forming a company?
                      </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> Yes! Our package includes a Business Stripe Account, and we provide guidance on PayPal setup for non-residents
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Do I need a physical US address for my company?
                      </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> Yes! Our package includes a Business Stripe Account, and we provide guidance on PayPal setup for non-residents
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--- ques --------->

<section class="ques mt-5 mb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="image-icon ques" alt="" src="{{url('assets/images/funnel/img.jpg')}}">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <div class="got-questions-were">Got Questions? We’re Here with All the Answers!</div>
                        <div class="not-sure-which">Not sure which plan fits your business best? Our experts are ready to guide you and answer all your questions—every step of the way.</div>
                        <form action="/action_page.php">
                            <div class="mb-3 mt-3">
                            <div class="mb-3">
                              <input type="text" class="form-control" style="border-radius: 20px;" id="name" placeholder="Enter your name" name="pswd">
                            </div>
                              <input type="email" class="form-control" style="border-radius: 20px;" id="email" placeholder="Enter your email" name="email">
                            </div>
                            <div class="mb-3">
                              <input type="text" class="form-control" style="border-radius: 20px;" id="mass" placeholder="Write a massage" name="mass">
                            </div>
                            <a href="#" class="contact-btn-wrapper">
                                Contact Us
                                <div class="contact-btn-icon">
                                  &rarr;
                                </div>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="blog mt-5 mb-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="blog-article">Blog Article</div>
                <div class="offending-belonging-promotion">Read our latest research and follow the blog for more updates! </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-4 ">
                        <div class="card cardmain blogcard">
                            <img class="card-img-top" style="width: 100%; height: 150px;" src="{{url('assets/images/funnel/blog1.jpg')}}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title blogname"><img class="bloguser" src="{{url('assets/images/funnel/bloguser.jpg')}}" alt="">By Claudia Pridham <span class="blog-date">08 Feb, 2024</span></h4>
                              <p class="card-text blogpost">Eco Living Sustainable Choices Eco Living Sustainable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card cardmain blogcard">
                            <img class="card-img-top" style="width: 100%; height: 150px;" src="{{url('assets/images/Frame (1).png')}}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title blogname"><img class="bloguser" src="{{url('assets/images/funnel/bloguser.jpg')}}" alt="">By Claudia Pridham <span class="blog-date">08 Feb, 2024</span></h4>
                              <p class="card-text blogpost">Eco Living Sustainable Choices Eco Living Sustainable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card cardmain blogcard">
                            <img class="card-img-top" style="width: 100%; height: 150px;" src="{{url('assets/images/Frame.png')}}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title blogname"><img class="bloguser" src="{{url('assets/images/funnel/bloguser.jpg')}}" alt="">By Claudia Pridham <span class="blog-date">08 Feb, 2024</span></h4>
                              <p class="card-text blogpost">Eco Living Sustainable Choices Eco Living Sustainable</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="readmore-container">
                    <a href="#" class="readmore-btn">
                      Read More article
                      <div class="readmore-icon">
                        &rarr;
                      </div>
                    </a>
                  </div>
            </div>
        </div>
    </div>
</section>
<!--- sub---->

<section class="sub mt-5 mb-5 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="secure-your-us">Secure Your U.S. Business Identity — Take the First Step Now!</div>

            </div>
            <div class="col-md-6 text-center mt-2">
                <form class="form-inline" action="/action_page.php">

                    <div class="form-group">
                      <input type="password" class="form-control pwd"placeholder="company name" name="pwd">
                      <button  class="blogbutton subbtn">Start an LLC </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>


@endsection

@push('scripts')
<script>
  const packages = document.querySelectorAll('.package-card');

  packages.forEach(pkg => {
    const basePrice = parseInt(pkg.querySelector('.total-price').textContent.replace('$', ''));
    const totalPriceEl = pkg.querySelector('.total-price');
    const addonInputs = pkg.querySelectorAll('.addon');

    function updateTotal() {
      let total = basePrice;
      addonInputs.forEach(input => {
        if (input.checked) {
          total += parseInt(input.value);
        }
      });
      totalPriceEl.textContent = `$${total}`;
    }

    addonInputs.forEach(input => {
      input.addEventListener('change', updateTotal);
    });
  });
</script>

<script>
    const testimonials = [
      {
        name: "Saima Islam",
        country: "USA",
        date: "24/08/2026",
        image: "https://randomuser.me/api/portraits/women/79.jpg",
        message: "Super lovely product. I love this product because the software is brilliantly helpful. Can’t get enough!"
      },
      {
        name: "John Carter",
        country: "Canada",
        date: "10/01/2026",
        image: "https://randomuser.me/api/portraits/men/65.jpg",
        message: "Professional and easy to use. This tool has saved me hours!"
      },
      {
        name: "Elena Cruz",
        country: "UK",
        date: "15/03/2026",
        image: "https://randomuser.me/api/portraits/women/12.jpg",
        message: "Stylish design and seamless experience. Love it!"
      },
      {
        name: "Carlos Mendez",
        country: "Mexico",
        date: "05/06/2025",
        image: "https://randomuser.me/api/portraits/men/30.jpg",
        message: "Absolutely smooth. Everything works exactly as I expected!"
      },
      {
        name: "Linda Zhou",
        country: "Singapore",
        date: "11/12/2025",
        image: "https://randomuser.me/api/portraits/women/33.jpg",
        message: "A clean UI and fast performance. Would definitely recommend it."
      }
    ];

    const sliderContainer = document.getElementById("testimonialSlider");
    let activeIndex = 0;

    function renderSlider() {
      sliderContainer.innerHTML = '';

      const left = testimonials[(activeIndex - 1 + testimonials.length) % testimonials.length];
      const center = testimonials[activeIndex];
      const right = testimonials[(activeIndex + 1) % testimonials.length];

      [left, center, right].forEach((item, i) => {
        const card = document.createElement("div");
        card.classList.add("testimonial-card");
        card.classList.add(i === 0 ? "left" : i === 1 ? "center" : "right");
        card.innerHTML = `
          <div class="date">${item.date}</div>
          <img src="${item.image}" alt="${item.name}">
          <div class="stars">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0a6d03"><path d="m585.33-315.39-28.76-119.09 93.56-80.56-121.85-10.76L480-638.89v259.46l105.33 64.04ZM203.91-80.56l73.63-314.05L33.41-605.78l321.52-26.96L480-928.54l125.07 295.8 321.52 26.96-244.13 211.17 73.63 314.05L480-247.07 203.91-80.56Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0a6d03"><path d="m585.33-315.39-28.76-119.09 93.56-80.56-121.85-10.76L480-638.89v259.46l105.33 64.04ZM203.91-80.56l73.63-314.05L33.41-605.78l321.52-26.96L480-928.54l125.07 295.8 321.52 26.96-244.13 211.17 73.63 314.05L480-247.07 203.91-80.56Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0a6d03"><path d="m585.33-315.39-28.76-119.09 93.56-80.56-121.85-10.76L480-638.89v259.46l105.33 64.04ZM203.91-80.56l73.63-314.05L33.41-605.78l321.52-26.96L480-928.54l125.07 295.8 321.52 26.96-244.13 211.17 73.63 314.05L480-247.07 203.91-80.56Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0a6d03"><path d="m585.33-315.39-28.76-119.09 93.56-80.56-121.85-10.76L480-638.89v259.46l105.33 64.04ZM203.91-80.56l73.63-314.05L33.41-605.78l321.52-26.96L480-928.54l125.07 295.8 321.52 26.96-244.13 211.17 73.63 314.05L480-247.07 203.91-80.56Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0a6d03"><path d="m585.33-315.39-28.76-119.09 93.56-80.56-121.85-10.76L480-638.89v259.46l105.33 64.04ZM203.91-80.56l73.63-314.05L33.41-605.78l321.52-26.96L480-928.54l125.07 295.8 321.52 26.96-244.13 211.17 73.63 314.05L480-247.07 203.91-80.56Z"/></svg>
          </div>
          <div class="name">${item.name}</div>
          <div class="country">${item.country}</div>
          <div class="message">“${item.message}”</div>
        `;
        sliderContainer.appendChild(card);
      });
    }

    renderSlider();

    setInterval(() => {
      activeIndex = (activeIndex + 1) % testimonials.length;
      renderSlider();
    }, 4000);
</script>


<script>
    const slider = document.getElementById('videoSlider');
    let isDown = false;
    let startX, scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
      isDown = false;
    });

    slider.addEventListener('mouseup', () => {
      isDown = false;
    });

    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 2;
      slider.scrollLeft = scrollLeft - walk;
    });
</script>
<script>
    // JavaScript placeholder for custom function if needed later
    function initializeBrandStripLoop() {
      console.log('Brand loop initialized');
    }

    document.addEventListener('DOMContentLoaded', initializeBrandStripLoop);
</script>

@endpush
