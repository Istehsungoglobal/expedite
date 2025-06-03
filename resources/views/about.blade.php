@extends('layouts.fontpage')

@section('title', 'About Us')

@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />

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
        font-size: 30px;
        letter-spacing: -0.06em;
        line-height: 58px;
        font-weight: 500;
        font-family: Poppins;
        color: #080808;
        text-align: center;
        margin: 0px auto;
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
    top: 213px;
    position: absolute;
    height: 100px;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    border-radius: 50%;
    overflow: hidden;
}
.container-fluid::after {
    content: '';
    bottom: 445px;;
    position: absolute;
    height: 100px;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    border-radius: 50%;
    overflow: hidden;
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
<div class="container-fluid" >
    <div id="curvedSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#curvedSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#curvedSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#curvedSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#curvedSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('assets/images/aboutusslider (1).jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/images/aboutusslider (2).jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/images/aboutusslider (1).jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/images/aboutusslider (2).jpg') }}" class="d-block w-100" alt="Slide 4">
            </div>
        </div>
        
    </div>

</div>


@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


@endpush