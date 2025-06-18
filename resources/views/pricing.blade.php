@extends('layouts.fontpage')

@section('title', '')

@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />

<style>
    .pricing-card {
      background-color: #ffffff;
      color: #8d8d8d;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      margin: auto;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .package-cardone{
      background-color: #fff;
      color: #656565;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      margin: auto;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .package-cardone ul li{
      color: #656565;
    }
    .package-cardprices {
      background-color: #172155;
      color: #fff;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      margin: auto;
      transition: background-color 0.3s ease, color 0.3s ease;
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
        font-size: clamp(1.5rem, 0.25rem + 4vw, 2.5rem);
        letter-spacing: -0.06em;
        line-height: 58px;
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
    .pricepackages{
      justify-content:center;
    }
    .total-btns{
      color: #172155;
    }
    .rarrs{
      width: 35px;
      height: 35px;
      border-radius: 50%;
      padding: 5px;
      background-color:#172155;
      color: #fff;

    }
</style>

@endpush


@section('content')
<div class="container mt-5 mb-2">
    <div class="simple-transparent">Pic a best plan to grow your business </div>
</div>
<!-- business part -->
<section class="business  mb-5">
    <div class="container">
        <div class="row">
           
            <div class="col-md-12">
              <div class="packages pricepackages">
                  <!-- Package 1 -->
                  <form action="" style="margin: 5px;">
                    <div class="package-cardone">
                      <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="font-size: 12px"><strong>Essential Formation</strong></div>
                        <div class="label-tag" style="margin-left: 2px;">Standard Delivery Timeline</div>
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

                      <button class="total-btn">
                        Get Started <span class="rarr" style="color: white;">→</span>
                      </button>
                    </div>
                  </form>
                  <!-- Package 2 -->
                  <form action="" style="margin: 5px;">
                      <div class="package-cardprices">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                          <div style="font-size: 12px"><strong>Expedite Formation</strong></div>
                          <div class="label-tag" style="margin-left: 2px;background-color:#fff;color: #172155;">Priority Handling & Fast Delivery</div>
                        </div>

                        <div class="price-row">
                          <h2 class="total-price">$250</h2>
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

                        <button class="total-btn">
                          Get Started <span class="rarrs" style="color: white;">→</span>
                        </button>
                      </div>
                  </form>
              </div>
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

@endpush










 
