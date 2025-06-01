<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedite</title>
    <!--css file-->

    <link rel="stylesheet" href="{{asset('assets/css/funnel/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/brands.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/normalize.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" />

    <link rel="stylesheet" href="{{asset('assets/css/funnel/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/blog.css')}}">
    <link rel="icon" type="image/x-icon" href="{{url('assets/images/funnel/favicon.svg')}}">
</head>
<body>
    <!-- Header Section -->
    <header>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <div class="navbar-logo" >
                    <img src="{{url('assets/images/funnel/logo.png')}}" alt="Logo">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll navbar-menu" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item"><a  class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a  class="nav-link" href="pricing.html">Pricing <span class="badge-new"> new</span> </a></li>
                        <li class="nav-item"><a  class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a  class="nav-link" href="login.html">Login/Dashboard</a></li>
                       <!--------- <li class="button-li">
                            <button class="estimate-button">
                                <a href="deshboard.html"><span style="color:white;border-radius: 40px;background-color: #172155;width: 100%;height: 54px;padding: 5px 10px;box-sizing: border-box;text-align: center;font-size: 16px;color: #fff;font-family: Poppins;">Deshboard</span> </a>
                            </button>
                        </li>----------->
                    </ul>
                </div>

            </div>
        </nav>
    </header>

     <!-- Blog Section -->
    <section class="pt-5 mt-5">
       <div class="container">
            <div class="row">
                <div class="col justify-center-center">
                    <div class="blog-badge">
                        <span class="label">Popular Blog</span>
                        <span class="date">27 April 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mid">
            <div class="row">
            <div class="col-md-3">
                <div class="input-group mb-4 search-bar">
                    <input type="text" class="form-control" placeholder="Search Blog" id="searchInput">
                    <button class="btn btn-primary" type="button" id="searchBtn" style="width: 15%">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0
                        1.415-1.414l-3.85-3.85zm-5.242.656a5.5 5.5 0 1
                        1 0-11 5.5 5.5 0 0 1 0 11z"/>
                    </svg>
                    </button>
                </div>

                <!-- Table of Contents -->
                <h6 class="fw-bold">Table Of Content</h6>
                <ul class="list-unstyled toc-list" id="tocList">
                    <li><span class="bar"></span> What Is A Payment Gateway?</li>
                    <li><span class="bar"></span> How Does Payment Gateway Work?</li>
                    <li><span class="bar"></span> What Is A Payment Processor?</li>
                    <li class="fw-bold"><span class="bar"></span> How Does The Payment Processor Work?</li>
                    <li><span class="bar"></span> Is It Necessary To Put An Emphasis On</li>
                    <li><span class="bar"></span> Payment Processor Vs. Payment Gateway.</li>
                    <li><span class="bar"></span> The Bottom Line</li>
                </ul>

                <!-- CTA Card -->
                <div class="card mt-4 text-white text-start overflow-hidden cta-card">

                    <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?fit=crop&w=400" class="card-img" alt="Launch Company">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                    <h5 class="card-title" style="font-size: 13px">Launch Your U.S. Company</h5>
                    <button class="btn btn-warning text-white fw-semibold rounded-pill d-flex align-items-center" style="width: 74%;font-size:12px">
                        Get Started <span class="ms-2">&rarr;</span>
                    </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center blogpost">
                <h1 class="best-us-states">Best U.S. States to Form an LLC And Why It Matters</h1>
                <img class="rectangle-icon" alt="" src="{{ url('assets/images/funnel/blogs1.jpg') }}">
                <div class="meta-description-the-container mt-4">
                    <span class="meta-description">Meta Description:</span>
                    <span class="the-state-you"> The state you choose to form your company affects taxes, privacy, and legal protection. Discover the top U.S. states and why your decision truly matters.</span>
                </div>
                <div class="youve-decided-to-container">
                    <p>You’ve decided to start a company. Whether it’s an LLC, a corporation, a partnership, or a nonprofit—you're building something that matters. Something with purpose, risk, and vision behind it. But before you can take your first official step, you hit a question that’s deceptively simple: Where should I register it? In the excitement of launching, most people choose a state without blinking. It feels like just another checkbox. But here’s the truth no one tells you upfront: Where you form your company has a ripple effect across everything—your taxes, your privacy, your ongoing costs, and even your legal safety. And with 50 states offering 50 sets of rules, benefits, and hidden costs—the “wrong” state could quietly hold you back for years. Let’s explore the best U.S. states to form a company—and why that one decision could become either your softest landing or your steepest climb.<span class="see-more">See More...</span></p>
                </div>

            </div>
            <div class="col-md-3">

            </div>
        </div>
        </div>

    </section>


    <!-- footer part -->
    <footer class="footer">
        <div class="mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <img class="vector" alt="" src="{{url('assets/images/funnel/logo.png')}}">
                        <div class="frame-parent">
                            <div class="at-expedite-formation">At Expedite Formation, we help entrepreneurs worldwide launch U.S. businesses fast, simple, and fully compliant.</div>
                            <div class="whether-youre-freelancing">Whether you're freelancing, building an e-commerce brand, or scaling a startup, we make business ownership borderless and accessible. Let’s grow, together.</div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="pages-parent">
                            <h1>Pages</h1>

                            <div class="pages">
                                <ul  class="list-group" >
                                    <li class="list-group-item" >
                                        <a href="contact.html">Contact Us</a>
                                        <a href="terms.html">Terms of Service</a>
                                        <a href="refund.html">Refund Policy</a>
                                        <a href="blog.html">Blog</a>
                                        <a href="about.html">About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-parent">
                            <h1>Contact</h1>
                            <div class="contact-phone">
                                <i class="fa-solid fa-phone"></i>
                                <span>mangcoding123@gmail.com</span>
                            </div>
                            <div class="contact-phone">
                                <i class="fa-solid fa-envelope"></i>
                                <span>(406) 555-0120</span>
                            </div>
                            <div class="contact-phone">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>2972 Westheimer Rd. Santa Ana, Illinois 85486</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-div">
            </div>

            <footer class="footer-copyright">
               <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="expedite-all-rights">© 2025 Expedite. All rights reserved.</div>

                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="vector-parent" style="color: white; text-align: right;padding-right: 50px;" >
                                <i style="padding-left:10px" class="fa-brands fa-facebook"></i>
                                <i style="padding-left:10px" class="fa-brands fa-twitter"></i>
                                <i style="padding-left:10px" class="fa-brands fa-telegram"></i>
                                <i style="padding-left:10px" class="fa-brands fa-whatsapp"></i>

                            </div>
                        </div>
                    </div>
               </div>
            </footer>
        </div>
    </footer>

    <!--js file-->

    <script src="{{asset('assets/js/funnel/bootstrap.bundle.min.js')}}"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="{{asset('assets/js/funnel/brands.min.js')}}"></script>
    <script src="{{asset('assets/js/funnel/fontawesome.min.js')}}"></script>
    <script src="{{asset('assets/js/funnel/blog.js')}}"></script>
    <!--<script src="js/popper.min.js"></script>-->
</body>
</html>
