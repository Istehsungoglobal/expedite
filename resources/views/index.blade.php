@extends('layouts.fontpage')

@section('title', 'Home')

@push('styles')
<style>

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
                        <span class="dominate-your"> Dominate Your<div class="svgdiv" style="display: inline-block;background-color:#f8561b ;line-height: 9px;border-radius: 45px 50px 50px 45px;width:75px; margin-left: 10px;padding:2px"> <svg class="svgicon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#f8561b" ><path d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z"/></svg></div>Industry.</span>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="confidential-remote-container">
                        <span class=" fastest">100%</span><span class="confidential-remote"><span class="officia"> Confidential & Remote |</span><span class="fastest"> </span></span><span class="fastest"><span>Fastest</span></span><span class="set-up-in-the"> Set-up in the Industry | Stripe & Bank-</span><span class=" fastest">Ready</span><span class="set-up-in-the"> Access | </span><span class="officia"><span class=" fastest">Officia</span></span><span class="confidential-remote"><span class="officia">l</span><span> U.S. Address.</span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="enter-your-preferred-company-n-parent">
                        <div class="enter-your-preferred">Company name</div>
                        <div class="frame-wrapper">
                            <div class="start-an-llc-parent">
                                <div class="start-an-llc">LLC Start</div>
                                <svg class="arrow-child" xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#f8561b"><path d="m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z"/></svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="frame-parent">
                        <div class="rectangle-div">
                           <img class="magic-wand-1-icon" alt="" src="{{asset('assets/images/funnel/w3.png')}}">
                           <div class="start">No Delays</div>
                        </div>
                        <div class="rectangle-div">
                           <img class="magic-wand-1-icon" alt="" src="{{asset('assets/images/funnel/w3.png')}}">
                           <div class="start">No Hassles</div>
                        </div>
                        <div class="rectangle-div">
                           <img class="magic-wand-1-icon" alt="" src="{{asset('assets/images/funnel/w3.png')}}">
                           <div class="start">No Hidden Fees</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3 mt-4">
                <div class="col-12">
                    <div class="customer-stats w-4">
                        <div class="customer-faces" style="margin: 0px auto;">
                            <div class="avatar">
                                <div class="customer-1-1">
                                    <img src="{{asset('assets/images/funnel/avatar.png')}}" alt="">
                                </div>
                            </div>
                            <div class="avatar1">
                                <div class="avatar2-1">
                                    <img src="{{asset('assets/images/funnel/avatar (2).png')}}" alt="">
                                </div>
                            </div>
                            <div class="avatar1">
                                <div class="avatar3-1">
                                    <img src="{{asset('assets/images/funnel/avatar (1).png')}}" alt="">
                                </div>
                            </div>
                            <div class="stats-number">8,182</div>
                        </div>
                        <div class="number-and-text" style="margin: 0px auto;">
                            <b class="stats-description">
                            <span>4.5</span>
                            <span class="span"> </span>
                            <span class="rating">Rating</span>
                            </b>
                        </div>
                        <div class="trustpilot-logotext" style="margin: 0px auto;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#314D1C"><path d="m606-286-33-144 111-96-146-13-58-136v312l126 77ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                            <div class="trustpilot">Trustpilot</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 ">
                <div class="col-12">
                    <div class="logo-slider-wrapper">
                        <div class="logo-slider-track">
                          <!-- Repeat enough logos to ensure seamless scroll -->
                          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Stripe_logo%2C_revised_2016.svg" alt="Stripe">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Wise_Logo.svg" alt="Wise">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/IRS.svg" alt="IRS">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Relay_Financial_Logo.svg" alt="Relay">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Mercury_Bank_logo.svg" alt="Mercury">
                          <!-- duplicated for seamless loop -->
                          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Stripe_logo%2C_revised_2016.svg" alt="Stripe">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Wise_Logo.svg" alt="Wise">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/IRS.svg" alt="IRS">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/IRS.svg" alt="IRS">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Relay_Financial_Logo.svg" alt="Relay">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Mercury_Bank_logo.svg" alt="Mercury">
                          <!-- duplicated for seamless loop -->
                          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Stripe_logo%2C_revised_2016.svg" alt="Stripe">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Wise_Logo.svg" alt="Wise">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/IRS.svg" alt="IRS">
                        </div>
                      </div>

                </div>
            </div>

        </div>
    </section>

    <!--- FORMATION Section -->

    <section class="formation mb-5">
        <div class="container">
            <div class="row pt-sm-5">
                <div class="col-12"style="text-align: center" >
                    <p class="why-expedite-formation">WHY Expedite FORMATION</p>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-12"style="text-align: center" >
                    <div class="entrepreneurs-move-fast-container">
                        <p class="entrepreneurs-move-fast">Entrepreneurs move fast. We move faster.</p>
                        <p class="entrepreneurs-move-fast">US business in Clicks. No paperwork, no visits, no-nonsense.</p>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-md-3 p-1">
                    <div class="card cardfor">
                      <div class="card-body">
                            <h1 class="clientdiv">30+</h1>
                            <p class="countries-served">Countries served</p>
                        </div>
                      </div>
                </div>

                <div class="col-md-3 p-1">
                    <div class="card cardfor">
                      <div class="card-body">
                        <h1 class="clientdiv">2k+</h1>
                        <p class="countries-served">Companies formed</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 p-1">
                    <div class="card cardfor">
                      <div class="card-body">
                        <h1 class="clientdiv">2k+</h1>
                        <p class="countries-served">Clients</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 p-1">
                    <div class="card cardfor">
                      <div class="card-body">
                        <h1 class="clientdiv">5+</h1>
                        <p class="countries-served">Years of experience</p>

                      </div>
                    </div>
                  </div>
            </div>
            <div class="row pt-3 mt-5">
                <div class="col-12">
                    <div class="start-an-llc-parent getstart-parent">
                        <div class="start-an-llc getstart">Get Start</div>
                        <svg class="arrow-child" xmlns="http://www.w3.org/2000/svg" height="14px" viewBox="0 -960 960 960" width="14px" fill="#f8561b"><path d="m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- everything part -->

    <section class="everything pt-4">
        <img class="vector-icon" alt="" src="assets/Union.png">
        <div class="container" style="padding: 0px;">
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
                    <img class="everyimg"  alt="" src="assets/every (1).jpg">
                </div>
                <div class="col-md-8">


                    <div id="serviceSlider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                          <!-- Slide 1 -->
                          <div class="carousel-item active">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="service-card">
                                  <div class="everyslider">
                                      <h6>US Business Incorporation</h6>
                                      <p class="small">Legal, compliant, and ready for business</p>
                                  </div>
                                  <div class="service-img">
                                    <img src="assets/every (2).jpg" alt="Business">
                                    <div class="service-icon"><img src="assets/corp1.png" style="filter: brightness(1);" alt=""></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="service-card">
                                    <div class="everyslider">
                                          <h6>Registered Agent Service</h6>
                                          <p class="small">Stay in good standing without the hassle.</p>
                                    </div>
                                  <div class="service-img">
                                    <img src="assets/every (3).jpg" alt="Agent">
                                    <div class="service-icon"><img style="filter: brightness(1);" src="assets/corp2.png" alt=""></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="service-card">
                                  <div class="everyslider">
                                      <h6>Mail Forwarding</h6>
                                      <p class="small">Get a US address, no matter where you are.</p>
                                  </div>
                                  <div class="service-img">
                                    <img src="assets/every (4).jpg" alt="Mail">
                                    <div class="service-icon"><img class="serviceimg" style="filter: brightness(1);" src="assets/corp3.png" alt=""></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Slide 2 -->
                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="service-card">
                                  <div class="everyslider">
                                    <h6>Tax ID / EIN</h6>
                                    <p class="small">We handle the EIN filing for your entity.</p>
                                  </div>
                                  <div class="service-img">
                                    <img src="assets/every (5).jpg" alt="EIN">
                                    <div class="service-icon"><img style="filter: brightness(1);" src="assets/corp1.png" alt=""></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="service-card">
                                  <div class="everyslider">
                                    <h6>Virtual Office</h6>
                                    <p class="small">Establish your business presence remotely.</p>
                                  </div>
                                  <div class="service-img">
                                    <img src="assets/every (6).jpg" alt="Office">
                                    <div class="service-icon"><img style="filter: brightness(1);" src="assets/corp2.png" alt=""></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="service-card">
                                  <div class="everyslider">
                                    <h6>Bank Account Setup</h6>
                                    <p class="small">Open a US-based bank account quickly.</p>
                                  </div>
                                  <div class="service-img">
                                    <img src="assets/every (7).jpg" alt="Bank">
                                    <div class="service-icon"><img style="filter: brightness(1);" src="assets/corp3.png" alt=""></div>
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
                <div class="col-md-4">
                    <div class="result-card shadow-sm mx-auto">
                        <div class="result-text">No Surprises. Just Results!!!</div>
                        <img src="assets/buss.png" alt="Woman working at laptop">
                    </div>
                </div>
                <div class="col-md-4" style="border: none;">
                    <form id="package2" class="package-card">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <span>Package Details 1</span>
                          <span class="badge bg-light text-dark px-3 py-1"style="font-size: 7px;">Standard Delivery Timeline</span>
                        </div>
                        <h2>$179 <small class="fs-5">/Year</small></h2>

                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="services1" name="services[]" value="US Business Registration" checked>
                            <label class="form-check-label" for="services1">US Business Registration</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="services2" name="services[]" value="Registered Agent" checked>
                            <label class="form-check-label" for="services2">Registered Agent</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="services3" name="services[]" value="Mail Forwarding" >
                            <label class="form-check-label" for="services3">Mail Forwarding</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="services4" name="services[]" value="EIN (Tax ID)"  >
                            <label class="form-check-label" for="services4">EIN (Tax ID)</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="services5" name="services[]" value="Stripe Account Setup" >
                            <label class="form-check-label" for="services5">Business Stripe Account Setup</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="services6" name="services[]" value="Email Support" >
                            <label class="form-check-label" for="services6">Email Support</label>
                          </div>
                          <div class="form-check" style="position: relative;">
                            <input class="form-check-input" type="checkbox" id="services7" name="services[]" value="ITIN">
                            <label class="form-check-label" for="services7">ITIN ( $299 ) <i class="fa-solid fa-plus addplus" for="services7"></i>
                            </label>
                          </div>
                          <div class="form-check mb-4" style="position: relative;">
                            <input class="form-check-input" type="checkbox" id="services8" name="services[]" value="Bank">
                            <label class="form-check-label" for="services8">Business Bank ( $149 ) <i class="fa-solid fa-plus addplus" for="services8"></i></label>
                          </div>

                        <button class="btn btn-start" type="submit" style="background-color: #ffffff; color: #0b1547;">Get Started →</button>
                    </form>

                </div>
                <div class="col-md-4">
                    <form id="" class="package-card">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <span>Package Details 2</span>
                          <span class="badge bg-light text-dark px-3 py-1" style="font-size: 7px;">Priority Handling & Fast Delivery</span>
                        </div>
                        <h2>$250 <small class="fs-5">/Year</small></h2>

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
                            <label class="form-check-label" for="services7">ITIN ( $299 ) <i class="fa-solid fa-plus addplus" for="services7"></i>
                            </label>
                          </div>
                          <div class="form-check mb-4" style="position: relative;">
                            <input class="form-check-input" type="checkbox" id="services8" name="services[]" value="Bank">
                            <label class="form-check-label" for="services8">Business Bank ( $149 ) <i class="fa-solid fa-plus addplus" for="services8"></i></label>
                          </div>

                        <button class="btn btn-start nextbtn" type="submit"style="background-color: #ffffff; color: #0b1547;">Get Started →</button>
                    </form>
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
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="group-parent">
                                <div class="left-content-wrapper">
                                    <div class="left-content">
                                        <img class="vuesaxlinearmoney-send-icon" alt="" src="assets/money.svg">
                                        <div class="tax-benefits-wrapper">
                                            <div class="tax-benefits">Tax Benefits</div>
                                        </div>
                                    </div>
                                </div>
                                <img class="frame-child circlechild" alt="" src="assets/circle.svg">
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
                                <div class="slider-section" style="height: 89%;">
                                  <!-- Row 1 -->
                                  <div class="slider-wrapper" style="line-height: 0px;">
                                    <div class="slider-row" style="    margin: 0px;">
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/cn.png" alt="">China</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/ar.png" alt="">Argentina</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/jp.png" alt="">Japan</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/kr.png" alt="">Korea</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/it.png" alt="">Italy</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/br.png" alt="">Brazil</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/id.png" alt="">Indonesia</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/fr.png" alt="">France</div>
                                      <!-- Duplicate for smooth scroll -->
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/cn.png" alt="">China</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/ar.png" alt="">Argentina</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/jp.png" alt="">Japan</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/kr.png" alt="">Korea</div>
                                    </div>
                                  </div>

                                  <!-- Row 2 (opposite direction) -->
                                  <div class="slider-wrapper" style="line-height: 0px;">
                                    <div class="slider-row reverse" style="line-height: 0px;">
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/us.png" alt="">USA</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/gb.png" alt="">UK</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/au.png" alt="">Australia</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/ca.png" alt="">Canada</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/in.png" alt="">India</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/de.png" alt="">Germany</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/ng.png" alt="">Nigeria</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/za.png" alt="">South Africa</div>
                                      <!-- Duplicate for loop -->
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/us.png" alt="">USA</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/gb.png" alt="">UK</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/au.png" alt="">Australia</div>
                                      <div class="flag-card"><img src="https://flagcdn.com/w40/ca.png" alt="">Canada</div>
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

    <section class="route">

        <div class="container">
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
                        <img class="routeman" src="assets/routeman.png" alt="">
                        <div class="divone">
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
    <section class="clientlogo">
        <div class="container">

            <div class="container-fluid logo-slider">
              <div class="fade left"></div>
              <div class="fade right"></div>
              <!-- Row 1 -->
              <div class="slider-row">
                <div class="slider-track">
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                </div>
              </div>
              <!-- Row 2 -->
              <div class="slider-row">
                <div class="slider-track reverse">
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+6" alt="Logo 6"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+7" alt="Logo 7"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+8" alt="Logo 8"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+9" alt="Logo 9"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+10" alt="Logo 10"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+6" alt="Logo 6"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                </div>
              </div>
              <!-- Row 3 -->
              <div class="slider-row">
                <div class="slider-track">
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+11" alt="Logo 11"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+12" alt="Logo 12"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+13" alt="Logo 13"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+14" alt="Logo 14"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+15" alt="Logo 15"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+11" alt="Logo 11"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+2" alt="Logo 2"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+3" alt="Logo 3"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+4" alt="Logo 4"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+5" alt="Logo 5"></div>
                  <div class="logo"><img src="https://via.placeholder.com/100x60?text=Logo+1" alt="Logo 1"></div>
                </div>
              </div>
            </div>
        </div>

    </section>
    <!----- textmoniel   ----->

    <section class="textmoniel">
        <div class="container">
            <div class="container testimonial-section">
                <div class="row align-items-center">
                  <!-- Text Section -->
                  <div class="col-md-4 mb-4 mb-md-0">
                    <h2 class="gust" ><strong>Gust</strong> wanted to share a <br> quick note and let .</h2>
                    <p class="text-muted">I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I decided to work with you.</p>
                    <button class="btn btn-orange mt-3">Contact us <span>→</span></button>
                  </div>

                  <!-- Carousel Section -->
                  <div class="col-md-8 ratingview">
                    <div class="row">
                        <div class="col-md-9">
                        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active text-center">
                              <div class="testimonial-card">
                                <small style="color: black;">24/06/2025</small>
                                <div class="d-flex align-items-center mt-2">
                                  <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile" class="profile me-2" />
                                  <div>
                                    <strong style="color: black;">Saima Islam</strong><br />
                                    <small class="text-muted">USA</small>
                                  </div>
                                </div>
                                <div class="trustpilot-stars mt-2">
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star inactive">★</span>
                                </div>
                                <p class="mt-2 text-muted small">“Super lovely product. I love this product because the software is brilliantly helpful. Can't get enough!”</p>
                              </div>



                            </div>

                            <!-- Slide 2 -->
                             <div class="carousel-item text-center">
                              <div class="testimonial-card">
                                <small style="color: black;">24/06/2025</small>
                                <div class="d-flex align-items-center mt-2">
                                  <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile" class="profile me-2" />
                                  <div>
                                    <strong style="color: black;">Saima Islam</strong><br />
                                    <small class="text-muted">USA</small>
                                  </div>
                                </div>
                                <div class="trustpilot-stars mt-2">
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star inactive">★</span>
                                </div>
                                <p class="mt-2 text-muted small">“Super lovely product. I love this product because the software is brilliantly helpful. Can't get enough!”</p>
                              </div>



                            </div>
                             <div class="carousel-item text-center">
                              <div class="testimonial-card">
                                <small style="color: black;">24/06/2025</small>
                                <div class="d-flex align-items-center mt-2">
                                  <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile" class="profile me-2" />
                                  <div>
                                    <strong style="color: black;">Saima Islam</strong><br />
                                    <small class="text-muted">USA</small>
                                  </div>
                                </div>
                                <div class="trustpilot-stars mt-2">
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star inactive">★</span>
                                </div>
                                <p class="mt-2 text-muted small">“Super lovely product. I love this product because the software is brilliantly helpful. Can't get enough!”</p>
                              </div>



                            </div>
                             <div class="carousel-item text-center">
                              <div class="testimonial-card">
                                <small style="color: black;">24/06/2025</small>
                                <div class="d-flex align-items-center mt-2">
                                  <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile" class="profile me-2" />
                                  <div>
                                    <strong style="color: black;">Saima Islam</strong><br />
                                    <small class="text-muted">USA</small>
                                  </div>
                                </div>
                                <div class="trustpilot-stars mt-2">
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star">★</span>
                                  <span class="star inactive">★</span>
                                </div>
                                <p class="mt-2 text-muted small">“Super lovely product. I love this product because the software is brilliantly helpful. Can't get enough!”</p>
                              </div>



                            </div>
                          </div>


                          <!-- Indicators -->
                          <div class="carousel-indicators position-static mt-3">
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2 trustscore d-flex align-content-center flex-wrap">
                        <div class="mt-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Trustpilot_logo_2022.svg/512px-Trustpilot_logo_2022.svg.png" width="120" alt="Trustpilot"/>
                            <div class="mt-2"><strong>Excellent</strong></div>
                            <div class="trustpilot-stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star inactive">★</span>
                            </div>
                            <div class="text-white mt-1">TrustScore 4.5 | 25,327 reviews</div>
                          </div>
                    </div>
                    </div>

                  </div>
                </div>
              </div>
        </div>
    </section>



<section>
    <div class="container-flude mt-5 pb-5">
        <div class="video-slider-section">
          <h6>EXPEDITE FORMATION Journey</h6>
          <h2>
            Entrepreneurs move fast. We move faster. <br>
            US business in Clicks. No paperwork, no visits, no-nonsense.
          </h2>
          
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
              <div class="video-card">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ewvxxCeBGWg?si=i7R4G6TiaNg0tAqq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allow="autoplay; encrypted-media"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          



        </div>
    </div>
</section>








</section>
    <!---- Frequently ask ---->
    <section class="ask mt-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="frequently-asked-questions">Frequently Asked Questions</div>
                    <div class="offending-belonging-promotion">Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. </div>

                    <div class="accordion" id="accordionExample">
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

    <section class="ques mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="image-icon ques" alt="" src="assets/img.jpg">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <div class="got-questions-were">Got Questions? We’re Here with All the Answers!</div>
                            <div class="not-sure-which">Not sure which plan fits your business best? Our experts are ready to guide you and answer all your questions—every step of the way.</div>
                            <form action="/action_page.php">
                                <div class="mb-3 mt-3">
                                <div class="mb-3">
                                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="pswd">
                                </div>
                                  <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                </div>
                                <div class="mb-3">
                                  <input type="text" class="form-control" id="mass" placeholder="Write a massage" name="mass">
                                </div>
                                <button  class="blogbutton">Contact Us <i class='fas fa-arrow-circle-right blogicon'></i></button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-article">Blog Article</div>
                    <div class="offending-belonging-promotion">Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-md-4 blogcard">
                            <div class="card cardmain">
                                <img class="card-img-top" src="assets/blog1.jpg" alt="Card image">
                                  <div class="card-body">
                                    <h4 class="card-title blogname"><img class="bloguser" src="assets/bloguser.jpg" alt="">By Claudia Pridham <span class="blog-date">08 Feb, 2024</span></h4>
                                    <p class="card-text blogpost">Eco Living Sustainable Choices Eco Living Sustainable</p>
                                  </div>
                                </div>
                        </div>
                        <div class="col-md-4 blogcard">
                            <div class="card cardmain">
                                <img class="card-img-top" src="assets/blog1.jpg" alt="Card image">
                                  <div class="card-body">
                                    <h4 class="card-title blogname"><img class="bloguser" src="assets/bloguser.jpg" alt="">By Claudia Pridham <span class="blog-date">08 Feb, 2024</span></h4>
                                    <p class="card-text blogpost">Eco Living Sustainable Choices Eco Living Sustainable</p>
                                  </div>
                                </div>
                        </div>
                        <div class="col-md-4 blogcard">
                            <div class="card cardmain">
                                <img class="card-img-top" src="assets/blog1.jpg" alt="Card image">
                                  <div class="card-body">
                                    <h4 class="card-title blogname"><img class="bloguser" src="assets/bloguser.jpg" alt="">By Claudia Pridham <span class="blog-date">08 Feb, 2024</span></h4>
                                    <p class="card-text blogpost">Eco Living Sustainable Choices Eco Living Sustainable</p>
                                  </div>
                                </div>
                        </div>
                    </div>
                    <button  class="blogbutton">Read More article <i class='fas fa-arrow-circle-right blogicon'></i></button>
                </div>

            </div>
        </div>
    </section>
    <!--- sub---->

    <section class="sub mt-5 mb-5">
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

@endpush
