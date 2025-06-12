@extends('layouts.fontpage')

@section('title', 'About Us')

@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    .top-center-wrapper {
      width: 100%;
      display: flex;
      justify-content: center;
      padding-top: 40px; /* adjust this to move it further down or up */
    }

    .trustpilot-box {
      background-color: #f9f9f9;
      border-radius: 999px;
      padding: 5px 15px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .trustpilot-box img {
      width: 30px;
      height: 30px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid white;
    }

    .trustpilot-box .avatars {
      display: flex;
      margin-right: 6px;
    }

    .trustpilot-box .avatars img:not(:first-child) {
      margin-left: -10px;
    }

    .trustpilot-box .rating {
      font-weight: 500;
    }

    .trustpilot-box .rating-number {
      color: #FF6B35;
    }

    .trustpilot-box .trustpilot-text {
      color: #00B67A;
      font-weight: 600;
    }
    .simple-transparent {
        position: relative;
        font-size: clamp(1.5rem, 1.0313rem + 1.5vw, 1.875rem);
        letter-spacing: -0.06em;
        line-height: 58px;
        font-weight: 500;
        font-family: Poppins;
        color: #080808;
        text-align: center;
        margin: 15px auto;
        z-index: 999;
    }

    .carousel-item img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 12px;
      transform: perspective(1200px) rotateY(5deg);
      transition: transform 0.5s ease;
    }

    .carousel-item.active img {
      transform: perspective(1200px) rotateY(0deg);
    }

    .carousel-inner {
      overflow: visible;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0,0,0,0.6);
      padding: 10px;
      border-radius: 50%;
    }

    .carousel-indicators [data-bs-target] {
      background-color: #000;
    }
   .aboutimgdiv{
        width: 100%;
        height: 200px;
        position: absolute;
        top: 10%;
        left: 0px;
        margin: auto;
   }
   .coutop{
    width: 100%;
    height: 100px;
    background-color: red;
   }
  
.container-fluid::before {
    content: '';
    top: -8px;
    position: absolute;
    height: 139px;
    width: 100%;
    background-color: #ffffff;
    z-index: 9;
    border-radius: 50%;
    overflow: hidden;
}

.divbutton {
    bottom: -23px;
    position: absolute;
    height: 139px;
    width: 100%;
    background-color: #ffffff;
    z-index: 9;
    border-radius: 50%;
    overflow: hidden;
}

 .video-box {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 10px 10px 0 #ddd;
      background: linear-gradient(180deg, rgba(248, 86, 27, 0.14), rgba(248, 86, 27, 0.6));
      cursor: pointer;
      width: 100%;
      height: 100%;
    }

    .video-box img {
      width: 100%;
      height: auto;
      display: block;
      filter: brightness(95%);
    }

    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      border: 5px solid #f4511e;
      border-radius: 50%;
      width: 80px;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      z-index: 2;
    }

    .play-button i {
      color: #f4511e;
      font-size: 38px;
    }

    

    .about-transparent {
  
    position: relative;
    font-size: clamp(1.5rem, 0.6406rem + 2.75vw, 2.1875rem);
    letter-spacing: -0.06em;
    line-height: 58px;
    font-weight: 500;
    font-family: Poppins;
    color: #080808;
    text-align: left;
    display: inline-block;
    }

    .at-expedite-formation {
    font-size: 20px;
    letter-spacing: -0.02em;
    line-height: 156.5%;
    font-family: Poppins;
    color: #4b4b4b;
    text-align: left;
    display: inline-block;
    opacity: 0.8;
    }
    .video-blur{
      width: 100%;
      height: 100%;
      background-color: #f4511e;

    }

    .stats-number {
      font-size: 2rem;
      font-weight: 600;
    }
    .stats-label {
      font-size: 0.875rem;
      color: #555;
      margin-top: 0.25rem;
    }
    .stats-block {
      text-align: center;
      margin-bottom: 1rem;
    }


    .offer-section {
      background: linear-gradient(to right, #f1e4dd, #fff);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      max-width: 900px;
      margin: 50px auto;
    }

    .offer-section img {
      max-width: 180px;
    }

    .offer-section h5 {
      font-weight: 600;
    }

    .offer-section p {
      font-size: 14px;
      color: #777;
      margin-bottom: 20px;
    }

    .offer-section ul {
      padding-left: 0;
      list-style: none;
    }

    .offer-section ul li {
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 8px;
    }

    .text-rtl {
      text-align: right;
    }


    .commitment-section {
      padding: 60px 20px;
    }
    .commitment-img-wrapper {
      position: relative;
      display: flex;
      gap: 20px;
    }
    .commitment-img-wrapper img {
      border-radius: 12px;
      object-fit: cover;
      max-height: 220px;
    }
    .commitment-img-wrapper img:first-child {
      width: 50%;
    }
    .commitment-img-wrapper img:last-child {
      width: 50%;
    }
    .commitment-text h5 {
      font-weight: 600;
    }
    .we-believe-that {
    font-size: 14px;
    letter-spacing: -0.02em;
    line-height: 156.5%;
    font-family: Poppins;
    color: #4b4b4b;
    text-align: left;
    display: inline-block;
    opacity: 0.8;
    }
    .commitment-img-wrapper{
      position: relative;
    }
    .com2{
      position: absolute;
      left: 20%;
      top: -7px;
      right: 0px;
      margin: 0px auto;
      width: 38%;
      height: 78%;
    }

    .the-future-of {
    font-size: 14px;
    letter-spacing: -0.02em;
    line-height: 156.5%;
    font-family: Poppins;
    color: #4b4b4b;
    text-align: right;
    display: inline-block;
    opacity: 0.8;
    }
    .commitment-img-wrapper2 img {
      border-radius: 12px;
      object-fit: cover;
      max-height: 220px;
    }
    .commitment-img-wrapper2 img:first-child {
      width: 50%;
    }
    .commitment-img-wrapper2 img:last-child {
      width: 50%;
    }

    .commitment-img-wrapper2{
      position: relative;
    }
    .com4{
      position: absolute;
      left: 20%;
      top: -7px;
      right: 0px;
      margin: 0px auto;
      width: 38%;
      height: 78%;
    }

    .get-started-btn {
      background-color: #0a1c4f;
      border: none;
      border-radius: 50px;
      color: white;
      display: inline-flex;
      align-items: center;
      padding: 10px 24px;
      font-size: 14px;
      font-weight: 500;
      box-shadow: 0px 4px 10px rgba(10, 28, 79, 0.15);
      
      position: absolute;
      bottom: -50%;
      right: 0px;
      margin: 0px auto;
    }

    .get-started-btn .arrow-circle {
      background: white;
      color: #0a1c4f;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: 10px;
      font-size: 16px;
    }

    .get-started-btn:hover {
      opacity: 0.95;
    }



    .testimonial-wrapper {
        height: 100%;
        margin: 50px auto;
        background: linear-gradient(to bottom right, #2c56e6, #4385f4);
        border-radius: 16px;
        padding: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
        position: relative;
        box-shadow: 2px 5px 6px 4px rgb(0 0 0 / 38%);
        border: 3px solid white;
    }

    .slider-container {
      position: relative;
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .testimonial-card {
      background: #fff;
      color: #333;
      border-radius: 12px;
      padding: 20px;
      width: 260px;
      min-height: 260px;
      box-shadow: 0 8px 12px rgba(0,0,0,0.1);
      position: absolute;
      opacity: 0;
      transition: all 0.4s ease-in-out;
      z-index: 0;
      transform: scale(0.95);
      height: 50%;
    }

    .testimonial-card.active {
      opacity: 1;
      z-index: 2;
      transform: scale(1);
    }

    .testimonial-card .date {
      font-size: 12px;
      color: #999;
      margin-bottom: 10px;
    }

    .testimonial-card .stars {
      margin: 10px 0;
    }

    .testimonial-card img {
      border-radius: 50%;
      width: 48px;
      height: 48px;
      object-fit: cover;
    }

    .testimonial-card h4 {
      margin: 10px 0 2px;
      font-weight: bold;
    }

    .testimonial-card .country {
      color: #999;
      font-size: 14px;
    }

    .trustpilot-info {
      width: 45%;
      padding: 0 20px;
    }

    .trustpilot-info h3 {
      margin: 0;
      font-size: 22px;
      color: #00b67a;
    }

    .trustpilot-info .stars {
      margin: 10px 0;
      font-size: 20px;
    }

    .trustpilot-info .stars i {
      color: #00b67a;
    }

    .dots {
      text-align: center;
      margin-top: 20px;
    }

    .dot {
      display: inline-block;
      height: 8px;
      width: 8px;
      margin: 0 3px;
      background-color: #bbb;
      border-radius: 50%;
      cursor: pointer;
    }

    .dot.active {
      background-color: #333;
    }

    .note-section {
      padding: 60px 20px;
      max-width: 600px;
      margin: auto;
      text-align: left;
    }
    .note-section h2 {
      
      width: 100%;
      position: relative;
      font-size: 35px;
      letter-spacing: -0.04em;
      line-height: 46px;
      font-weight: 500;
      font-family: Poppins;
      color: #080808;
      text-align: left;
      display: inline-block;
    }
    .note-section h2 span {
      font-weight: 400;
    }
    .note-section p {
      font-size: 1rem;
      color: #757575;
      margin-top: 20px;
    }

    .contact-btn-modern {
      display: inline-flex;
      align-items: center;
      background-color: #fff;
      border-radius: 50px;
      box-shadow: 0 5px 20px rgba(78, 91, 255, 0.1);
      padding: 10px 16px 10px 20px;
      font-size: 16px;
      font-weight: 600;
      color: #1b1f4b;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .contact-btn-modern:hover {
      text-decoration: none;
      box-shadow: 0 8px 25px rgba(78, 91, 255, 0.2);
    }

    .contact-btn-icon-right {
      background-color: #1b1f4b;
      color: white;
      width: 40px;
      height: 40px;
      margin-left: 14px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      transition: background 0.3s ease;
    }

    .contact-btn-modern:hover .contact-btn-icon-right {
      background-color: #11143a;
    }


    .expedite {
      text-transform: uppercase;
    }
    .expedite-formation-journey-container {
      position: relative;
      font-size: 16px;
      letter-spacing: -0.02em;
      font-weight: 600;
      font-family: Poppins;
      color: #272727;
      text-align: center;
    }
    .entrepreneurs-move-fast {
      margin: 0;
    }
    .entrepreneurs-move-fast-container {
      font-size: clamp(1.5rem, 0.875rem + 2vw, 2rem);
      letter-spacing: -0.04em;
      font-family: Poppins;
      color: #080808;
      text-align: center;
    }


    .video-slider {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
      gap: 20px;
      padding: 30px;
      cursor: grab;
    }

    .video-slider::-webkit-scrollbar {
      display: none;
    }

    .video-card {
      flex: 0 0 auto;
      width: 300px;
      height: 400px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .video-card iframe {
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 12px;
    }

    .video-card video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 12px;
    }
</style>

@endpush


@section('content')
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

<div class="container">
    <div class="simple-transparent">Let’s Expedite it.</div>
</div>
<div class="container-fluid" style="position: relative" >
    <div class="mid" style="overflow: hidden; width:100%">
        <div id="curvedSlider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#curvedSlider" data-bs-slide-to="0" class="active d-none" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#curvedSlider" data-bs-slide-to="1" class=" d-none" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner" style="width: 80%; margin:0px auto">
              <div class="carousel-item active">
                  <img src="{{ url('assets/images/aboutusslider (1).jpg') }}" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                  <img src="{{ url('assets/images/aboutusslider (2).jpg') }}" class="d-block w-100" alt="Slide 2">
              </div>
          </div>
        </div>
    </div>
    <div class="divbutton"></div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
      <!-- Text Content -->
      <div class="col-md-6 video-text">
        <h5 class="fw-bold about-transparent">Who We Are</h5>
        <p class="text-muted at-expedite-formation">
          At Expedite Formation, we empower global entrepreneurs with a fast, reliable, and compliant way to establish a business in the U.S. Whether you're a freelancer, e-commerce seller, or scaling startup, we simplify the process so you can focus on what matters—growing your business.
        </p>
      </div>

      <!-- Video/Thumbnail Box -->
        <div class="col-md-6">
            <div class="video-box">
                
                  <img src="{{ url('assets/images/blog (4).jpg') }}" alt="Video Thumbnail">
                  <div class="play-button">
                    <i class="bi bi-play-fill"></i>
                  </div>
                <div class="video-blur"></div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
  <div class="row justify-content-center text-center">
    <div class="col-6 col-sm-3 stats-block">
      <div class="stats-number">10k+</div>
      <div class="stats-label">Happy customers</div>
    </div>
    <div class="col-6 col-sm-3 stats-block">
      <div class="stats-number">1200k+</div>
      <div class="stats-label">5-star reviews</div>
    </div>
    <div class="col-6 col-sm-3 stats-block">
      <div class="stats-number">54</div>
      <div class="stats-label">Countries</div>
    </div>
    <div class="col-6 col-sm-3 stats-block">
      <div class="stats-number">7</div>
      <div class="stats-label">Continents</div>
    </div>
  </div>
</div>

<div class="container">
  <img src="{{ url('assets/images/ss.png') }}" style="width: 100%;" alt="Businessman" disable>
</div>

<div class="container commitment-section">
  <div class="row align-items-center">
    <!-- Text -->
    <div class="col-md-6 commitment-text mb-4 mb-md-0">
      <h5>Our Commitment</h5>
      <p class="we-believe-that">
        We believe that business ownership should be accessible to everyone, no matter where they are in the world.
        That’s why we simplify the entire U.S. business registration process, ensuring you can build, grow, and scale your business
        without unnecessary delays or complications.
      </p>
    </div>

    <!-- Images -->
    <div class="col-md-6 commitment-img-wrapper">
      <img class="com1" src="{{ url('assets/images/oc (1).png') }}" alt="Handshake">
      <img class="com2" src="{{ url('assets/images/oc (2).png') }}" alt="Signing papers">
    </div>
  </div>
</div>

<div class="container commitment-section">
  <div class="row align-items-center">
    <!-- Images -->
    <div class="col-md-6 commitment-img-wrapper2">
      <img class="com1" src="{{ url('assets/images/com3 (1).png') }}" alt="Handshake">
      <img class="com4" src="{{ url('assets/images/com3 (2).png') }}" alt="Signing papers">
    </div>
    <!-- Text -->
    <div class="col-md-6 commitment-text mb-4 mb-md-0" style="position: relative;">
      <h5 style="text-align: right;">Our Vision for Entrepreneurs</h5>
      <p class="the-future-of">
        The future of business is borderless. Our goal is to make U.S. business registration simple, affordable, and stress-free so ambitious founders everywhere can take their business global.
      </p>

      <button class="get-started-btn">
        Get Started!
        <span class="arrow-circle">
          →
        </span>
      </button>
    </div>
  </div>
</div>

<div class="container mb-5 pb-5">
  <div class="row">
    <div class="col-lg-6">
      <div class="note-section">
        <h2>Gust wanted to share a quick note and let<span> .</span></h2>
        <p>I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I decided to work with you.</p>
        <a href="#" class="contact-btn-modern">
          Contact us
          <div class="contact-btn-icon-right">
            →
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-6" style="position: relative">
      <div class="testimonial-wrapper">
        <div class="slider-container">
          <div class="testimonial-card active">
            <div class="date">24/08/2026</div>
            <img src="{{ url('assets/images/funnel/textimg.jpg') }}" alt="User" />
            <div class="stars">
              <div class="stars">
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
              </div>
            </div>
            <h4 style="font-size: 16px;">Saima Islam <span class="country">USA</span></h4>
            <p style="font-size: 14px;">"Super lovely product. I love this product because the software is brilliantly helpful."</p>
          </div>
          <div class="testimonial-card">
            <div class="date">15/07/2026</div>
            <img src="{{ url('assets/images/funnel/routeman.png') }}" alt="User" />
            <div class="stars">
              <div class="stars">
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <h4 style="font-size: 16px;">John Carter <span class="country">UK</span></h4>
            <p style="font-size: 14px;">"Outstanding support and features. This is the best decision we made for our business!"</p>
          </div>
          <div class="testimonial-card">
            <div class="date">02/06/2026</div>
            <img src="{{ url('assets/images/funnel/textimg.jpg') }}" alt="User" />
            <div class="stars">
              <div class="stars">
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star" style="color: green;"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <h4 style="font-size: 16px;">Linda Chen <span class="country">Canada</span></h4>
            <p style="font-size: 14px;">"Reliable, efficient, and incredibly easy to use. Highly recommended!"</p>
          </div>
        </div>
        
        <div class="trustpilot-info">
          <h3><i class="fa-solid fa-star"></i> Trustpilot</h3>
          <p>Excellent</p>
          <div class="stars">
            <i class="fa-solid fa-star" style="color: green;"></i>
            <i class="fa-solid fa-star" style="color: green;"></i>
            <i class="fa-solid fa-star" style="color: green;"></i>
            <i class="fa-solid fa-star" style="color: green;"></i>
            <i class="fa-solid fa-star" style="color: green;"></i>
          </div>
          <p>TrustScore 4.5 | <a href="#" style="color:white; text-decoration:underline">2537 reviews</a></p>
        </div>
        
      </div>
      <div class="dots" style="position: absolute ;right: 25%;bottom: 0px;margin: 0px;">
          <span class="dot active"></span>
          <span class="dot"></span>
          <span class="dot"></span>
      </div>
     
    </div>
  </div>
</div>

<div class="container mt-5 pb-5 mb-4">
    <div class="expedite-formation-journey-container">
        <span class="expedite">Expedite</span> FORMATION Journey
    </div>
    <div class="entrepreneurs-move-fast-container">
      <p class="entrepreneurs-move-fast">Entrepreneurs move fast. We move faster.</p>
      <p class="entrepreneurs-move-fast">US business in Clicks. No paperwork, no visits, no-nonsense.</p>
    </div>
</div>
<div class="container-flude mt-5 mb-5 pb-5">
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
 


@endsection

@push('scripts')
<script>
  const cards = document.querySelectorAll('.testimonial-card');
  const dots = document.querySelectorAll('.dot');
  let index = 0;

  function showCard(i) {
    cards.forEach(card => card.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    cards[i].classList.add('active');
    dots[i].classList.add('active');
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      index = i;
      showCard(index);
    });
  });
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

@endpush
