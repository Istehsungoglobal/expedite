@extends('layouts.fontpage')

@section('title', '')

@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />

<style>
.pricing-card {
      background-color: #ffffff;
      color: #0a1c4f;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      margin: auto;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pricing-card:hover {
      background-color: #0a1c4f;
      color: #ffffff;
    }

    .pricing-card:hover .badge-plan {
      background-color: #ffffff;
      color: #0a1c4f;
    }

    .badge-plan {
      background-color: #0a1c4f;
      color: #ffffff;
      border-radius: 15px;
      font-size: 12px;
      padding: 2px 10px;
      font-weight: 600;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .price {
      font-size: 48px;
      font-weight: 700;
    }

    .year {
      font-size: 16px;
      font-weight: 400;
    }

    .feature {
      display: flex;
      align-items: center;
      font-size: 15px;
      margin-bottom: 12px;
    }

    .feature input[type="checkbox"] {
      margin-right: 10px;
      transform: scale(1.2);
      accent-color: #ff4d30;
    }

    .disabled-feature {
      opacity: 0.6;
      text-decoration: line-through;
    }

    .get-started-btn {
      margin-top: 30px;
      background-color: #0a1c4f;
      color: #fff;
      font-weight: 600;
      padding: 10px 20px;
      border-radius: 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .get-started-btn i {
      background-color: #ffffff;
      color: #0a1c4f;
      padding: 10px;
      border-radius: 50%;
      margin-left: 10px;
    }
    .simple-transparent {
        position: relative;
        font-size: 40px;
        letter-spacing: -0.06em;
        line-height: 58px;
        font-weight: 500;
        font-family: Poppins;
        color: #080808;
        text-align: center;
        display: block;
        width: 50%;
        margin: 0px auto;
    }
    .addion{
        width:5%;
        position:absolute;
        right: 0px;
        top: 0px;
        margin: auto;
    }
</style>

@endpush


@section('content')
<div class="container mt-5 mb-5">
    <div class="simple-transparent">Pic a best plan to grow your business </div>
</div>
<div class="container py-5 mb-5">
  <div class="row g-4">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <form class="pricing-card">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <small>Essential Formation</small>
          <span class="badge-plan"style="font-size: 10px !important ; font-weight:400 !important;">Standard Delivery Timeline</span>
        </div>
        <div class="price">$<span id="price1">179</span> <span class="year">Year</span></div>

        <div class="mt-4">
          <div class="feature"><input type="checkbox" checked> US Business Registration</div>
          <div class="feature"><input type="checkbox" checked> Registered Agent</div>
          <div class="feature"><input type="checkbox" checked> Mail Forwarding</div>
          <div class="feature"><input type="checkbox" checked> EIN (Tax ID)</div>
          <div class="feature"><input type="checkbox" checked> Business Stripe Account Setup</div>
          <div class="feature"><input type="checkbox" checked> Email Support</div>
          <div class="feature" style="position: relative">
            <input type="checkbox" class="addon1" value="99" onchange="updatePrice(1)"> ITIN ($99.00)
            <img class="addion" src="{{ url('assets/images/funnel/addicon.png') }}" alt="">
          </div>
          <div class="feature" style="position: relative">
            <input type="checkbox" class="addon1" value="99" onchange="updatePrice(1)"> Business Bank ($99.00)
            <img class="addion" src="{{ url('assets/images/funnel/addicon.png') }}" alt="">
          </div>
        </div>

        <button type="submit" class="get-started-btn w-100">
          Get Started <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
        </button>
      </form>
    </div>

    <div class="col-md-4">
      <form class="pricing-card">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <small>Expedite Formation</small>
          <span class="badge-plan" style="font-size: 10px !important ; font-weight:400 !important;">Priority Handling & Fast Delivery</span>
        </div>
        <div class="price">$<span id="price2">250</span> <span class="year">Year</span></div>

        <div class="mt-4">
          <div class="feature"><input type="checkbox" checked> US Business Registration</div>
          <div class="feature"><input type="checkbox" checked> Registered Agent</div>
          <div class="feature"><input type="checkbox" checked> Mail Forwarding</div>
          <div class="feature"><input type="checkbox" checked> EIN (Tax ID)</div>
          <div class="feature"><input type="checkbox" checked> Business Stripe Account Setup</div>
          <div class="feature"><input type="checkbox" checked> Email Support</div>
          <div class="feature" style="position: relative">
            <input type="checkbox" class="addon2" value="99" onchange="updatePrice(2)"> ITIN ($99.00)
            <img class="addion" src="{{ url('assets/images/funnel/addicon.png') }}" alt="">
          </div>
          <div class="feature" style="position: relative">
            <input type="checkbox" class="addon2" value="99" onchange="updatePrice(2)"> Business Bank ($99.00)
            <img class="addion" src="{{ url('assets/images/funnel/addicon.png') }}"  alt="">
          </div>
        </div>

        <button type="submit" class="get-started-btn w-100">
          Get Started <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
        </button>
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        const basePrices = {
            1: 179,
            2: 250
        };

        function updatePrice(card) {
            let total = basePrices[card];
            const checkboxes = document.querySelectorAll(`.addon${card}`);
            checkboxes.forEach(cb => {
            if (cb.checked) total += parseInt(cb.value);
            });
            document.getElementById(`price${card}`).textContent = total;
        }
    </script>


@endpush