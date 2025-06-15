@extends('layouts.fontpage')

@section('title', 'Blog')

@push('styles')
<link rel="stylesheet" href="{{asset('assets/css/funnel/blog.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

@endpush


@section('content')
<!-- Blog Section -->
<section class="pt-5 mt-5 pb-5">
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
            <div class="col-md-2">
                <div class="input-group mb-4 search-bar">
                    <input type="text" class="form-control" placeholder="Search Blog" id="searchInput">
                    <button class="btn btn-primary" type="button" id="searchBtn" style="width: 18%">
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
                    <h5 class="card-title" style="font-size: 13px;text-align: center;">Launch Your U.S. Company</h5>
                    <button class="btn btn-warning text-white fw-semibold rounded-pill d-flex align-items-center" style="    width: 47%;font-size: 10px;">
                        Get Started <span class="ms-2">&rarr;</span>
                    </button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 text-center blogpost">
                <h1 class="best-us-states">Best U.S. States to Form an LLC And Why It Matters</h1>
                <img class="rectangle-icon" alt="" src="{{ url('assets/images/funnel/blogs1.jpg') }}">
                <div class="meta-description-the-container mt-4">
                    <span class="meta-description">Meta Description:</span>
                    <span class="the-state-you"> The state you choose to form your company affects taxes, privacy, and legal protection. Discover the top U.S. states and why your decision truly matters.</span>
                </div>
                <div class="youve-decided-to-container">
                    <p>
                        You’ve decided to start a company. Whether it’s an LLC, a corporation, a partnership, or a nonprofit—you're building something that matters. Something with purpose, risk, and vision behind it.
                    </p>
                    <p>
                       But before you can take your first official step, you hit a question that’s deceptively simple: Where should I register it?
                    </p>
                    <p>
                        In the excitement of launching, most people choose a state without blinking. It feels like just another checkbox. But here’s the truth no one tells you upfront:
                    </p>
                    <p>
                        Where you form your company has a ripple effect across everything—your taxes, your privacy, your ongoing costs, and even your legal safety.

                    </p>
                    <p>
                        And with 50 states offering 50 sets of rules, benefits, and hidden costs—the “wrong” state could quietly hold you back for years. Let’s explore the best U.S. states to form a company—and why that one decision could become either your softest landing or your steepest climb.<span class="see-more">Read More...</span> 
                    </p>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="popular-posts">
                    <h6>POPULAR POSTS</h6>

                    <div class="post-item">
                        <img src="{{url('assets/images/blog (1).jpg')}}" alt="Post 1">
                        <div class="post-info">
                        <div class="post-category">Product</div>
                        <div class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{url('assets/images/blog (2).jpg')}}" alt="Post 2">
                        <div class="post-info">
                        <div class="post-category">Product | Enterprise</div>
                        <div class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{url('assets/images/blog (3).jpg')}}" alt="Post 3">
                        <div class="post-info">
                        <div class="post-category">Productivity</div>
                        <div class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="{{url('assets/images/blog (4).jpg')}}" alt="Post 4">
                        <div class="post-info">
                        <div class="post-category">Productivity</div>
                        <div class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="social-share">
                        <span>Share With</span>
                        <div class="social-icons">
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-semibold">Related Blogs</h5>
                <button  class="btn btn-outline-info btn-sm post-div" id="viewAllBtn">View All Blog</button>
            </div>

            <div class="row" id="blogContainer"></div>
        </div>
    </div>
    <section class="hero-sections pb-5">
        <div class="container">
            <div class="hero-content">
            <h2>Payment Gateway Vs. Payment Processor:<br>
                Everything You Need To Know For A Small Business</h2>
            <form class="subscribe-form mt-4" onsubmit="joinUs(event)">
                <input type="email" id="emailInput" placeholder="Type your email address" required>
                <button type="submit">Join with us <i class="fas fa-arrow-right"></i></button>
            </form>
            </div>
        </div>
    </section>
   <div class="container">
        <div class="subscribe-box">
            <div class="row align-items-center">
            <div class="text-start">
                <h5>Connect with the Expedite Formation Community!</h5>
                <p>
                Be the first to know—get early access to new features, development tips,
                and the latest software trends delivered right to your inbox.
                </p>
            </div>
           
        </div>
    </div>

</section>

@endsection

@push('scripts')
<script src="{{asset('assets/js/funnel/blog.js')}}"></script>


@endpush
