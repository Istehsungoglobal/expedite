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
      height: 100%;
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
      width: 65%;
    }
    .commitment-img-wrapper img:last-child {
      width: 37%;
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
      width: 80%;
    }
    .commitment-img-wrapper{
      position: relative;
      padding-left: 17%;
    }
    .com2{
      position: absolute;
      left: 50%;
      top: -17px;
      right: 0px;
      margin: 0px auto;
      height: 75%;
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
      width: 80%;
      float: right;
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
      width: 37%;
    }

    .commitment-img-wrapper2{
      position: relative;
    }
    .com4{
      position: absolute;
      left: -5%;
      top: -20px;
      right: 0px;
      margin: 0px auto;
      height: 75%;
    }

    .get-started-btn {
      background-color: #0a1c4f;
      border: none;
      border-radius: 50px;
      color: white;
      display: inline-flex;
      align-items: center;
      padding: 4px 4px 4px 6px;
      font-size: 13px;
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
    .contact-btn-modern {
        display: inline-flex;
        align-items: center;
        background-color: #cdcdcd;
        border-radius: 50px;
        box-shadow: 0 5px 20px rgba(78, 91, 255, 0.1);
        padding: 4px 4px 4px 15px;
        font-size: 14px;
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
    .entrepreneurs-move-fast-containerabout {
      font-size: clamp(1.5rem, 0.875rem + 2vw, 2rem);
      letter-spacing: -0.04em;
      font-family: Poppins;
      color: #080808;
      text-align: center;
      display: block;
      margin: 0px auto;
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
                  <img src="{{ url('assets/images/team.jpg') }}" class="d-block w-100" alt="Slide 1">
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

<div class="container" style="padding: 2% 5%;">
  <div class="container commitment-section">
      <div class="row align-items-center">
        <!-- Text -->
        <div class="col-md-5 commitment-text mb-4 mb-md-0">
          <h5>Our Commitment</h5>
          <p class="we-believe-that">
            We believe that business ownership should be accessible to everyone, no matter where they are in the world.
            That’s why we simplify the entire U.S. business registration process, ensuring you can build, grow, and scale your business
            without unnecessary delays or complications.
          </p>
        </div>

        <!-- Images -->
        <div class="col-md-7 commitment-img-wrapper">
          <img class="com1" src="{{ url('assets/images/oc (1).png') }}" alt="Handshake">
          <img class="com2" src="{{ url('assets/images/oc (2).png') }}" alt="Signing papers">
        </div>
      </div>
  </div>

  <div class="container commitment-section">
    <div class="row align-items-center">
      <!-- Images -->
      <div class="col-md-7 commitment-img-wrapper2">
        <img class="com1" src="{{ url('assets/images/com3 (1).png') }}" alt="Handshake">
        <img class="com4" src="{{ url('assets/images/com3 (2).png') }}" alt="Signing papers">
      </div>
      <!-- Text -->
      <div class="col-md-5 commitment-text mb-4 mb-md-0" style="position: relative;">
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
</div>

<section class="textmoniel">
    <div class="container">
        <div class="final-container">
            <!-- LEFT -->
            <div class="final-left">
              <h2>What Our Clients Say</h2>
              <p>Your success stories fuel our passion. Here’s a quick note from our happy clients sharing their experience with us.</p>
              <a href="#" class="contact-btn-modern">
                Contact us
                <div class="contact-btn-icon-right">
                  →
                </div>
              </a>
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




<div class="container mt-5 pb-5 mb-4">
    <div class="expedite-formation-journey-container">
        <span class="expedite">Expedite</span> FORMATION Journey
    </div>
    <div class="entrepreneurs-move-fast-containerabout mt-5">
      <p class="entrepreneurs-move-fast">Real Voices. Real Wins.</p>
      <p class="entrepreneurs-move-fast">Unfiltered stories from entrepreneurs who’ve built faster, smarter, and bolder—with us.</p>
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

@endpush
