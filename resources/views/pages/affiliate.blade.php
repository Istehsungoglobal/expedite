@extends('layouts.app')
@section('title', 'Affiliate')

@push('style')

<style>
    .card-earning {
      width: 21%;
      background-color: #fff;
      border: 1px solid #dfeaf2;
      border-radius: 16px;
      padding: 20px 20px 12px;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin-right: 2%;
    }
    .card-earning:hover{
        background: linear-gradient(#FF6A33,#EF4000)
    }

    .card-earning .top-row {
      display: flex;
      justify-content: space-between;
      align-items: start;
    }

    .card-earning .amount {
      font-size: 32px;
      font-weight: 600;
      color: #2c356d;
    }

    .card-earning .bottom-row {
      margin-top: 16px;
      padding-top: 12px;
      border-top: 1px solid #e0e0e0;
      display: flex;
      align-items: center;
      gap: 8px;
      color: #2c356d;
      font-size: 14px;
    }

    .card-earning .icon {
      font-size: 14px;
      color: #2c356d;
    }

    .card-earning .chip {
      font-size: 40px;
      color: #999;
    }
    .totalaff{
        background-color: #8b8b8b;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        padding: 1px;

    }

    .referral-section {
      background: #fdfdfd;
    border-radius: 20px;
    padding: 29px 14px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
   
    }

    .referral-item {
      text-align: center;
      width: 200px;
    }

    .icon-circle {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
    }

    .green-bg { background: #e9fbe9; color: #2e7d32; }
    .orange-bg { background: #fff1e5; color: #f97316; }
    .blue-bg { background: #e8f1ff; color: #2563eb; }

    .referral-item .text {
      font-size: 15px;
      line-height: 1.5;
      color: #111;
    }

    .referral-item .text strong {
      font-weight: 700;
    }

    .dots {
      display: flex;
      gap: 16px;
    }

    .dot {
          width: 8px;
    height: 8px;
    background: rgb(0 0 0 / 4%);
    border-radius: 50%;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
    }

    @media (max-width: 768px) {
      .referral-section {
        flex-direction: column;
      }

      .dots {
        flex-direction: row;
        gap: 6px;
        margin: 10px 0;
      }
    }
    .referral-box {
      background-color: #fff;
      border: 1px solid #eee;
      border-radius: 16px;
      padding: 24px;
      margin: 40px auto;
      box-shadow: 0 0 4px rgba(0,0,0,0.03);
    }

    .referral-title {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .referral-table th {
      background-color: #f9fafb;
      color: #6c757d;
      font-size: 14px;
      font-weight: 500;
      border-bottom: 1px solid #ddd;
    }

    .referral-table td {
      font-size: 14px;
      vertical-align: middle;
    }

    .referral-table {
      border-collapse: collapse;
      width: 100%;
    }

    .referral-table thead tr {
      border-bottom: 1px solid #eee;
    }

    .referral-table tbody tr:not(:last-child) {
      border-bottom: 1px solid #f0f0f0;
    }

    @media (max-width: 768px) {
      .referral-table {
        font-size: 12px;
      }
    }
    .copy-block {
      margin-bottom: 30px;
    }

    label {
      font-size: 14px;
      margin-bottom: 6px;
      display: block;
      font-weight: 500;
    }

    .copy-container {
      display: flex;
      align-items: center;
      background: #fcfcfc;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 10px 14px;
      justify-content: space-between;
    }

    .copy-text {
      font-size: 14px;
      color: #111;
      overflow-x: auto;
      white-space: nowrap;
    }

    .copy-btn {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 16px;
      color: #333;
    }

    .copy-btn:hover {
      color: #000;
    }
    
</style>
@endpush


@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Affiliate Information</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mid" style="width: 97%; margin:0px auto">
    <div class="row">
        <div class="card-earning">
            <div class="top-row">
                <div class="amount">$195</div>
                <i class="fas fa-sim-card chip"></i>
            </div>
            <div class="bottom-row">
                <img class="totalaff" src="{{ asset('assets/images/totalref.svg') }}" alt="">
                <span style="font-size: 16px;">Total Refer</span>
            </div>
        </div>
        <div class="card-earning ">
            <div class="top-row">
                <div class="amount">$254</div>
                <i class="fas fa-sim-card chip"></i>
            </div>
            <div class="bottom-row">
                <img class="totalaff" src="{{ asset('assets/images/totalref.svg') }}" alt="">
                <span style="font-size: 16px;">Last week earning</span>
            </div>
        </div>
        <div class="card-earning ">
            <div class="top-row">
                <div class="amount">$986</div>
                <i class="fas fa-sim-card chip"></i>
            </div>
            <div class="bottom-row">
                <img class="totalaff" src="{{ asset('assets/images/totalref.svg') }}" alt="">
                <span style="font-size: 16px;">Last month earning</span>
            </div>
        </div>
        <div class="card-earning">
            <div class="top-row">
                <div class="amount">$986</div>
                <i class="fas fa-sim-card chip"></i>
            </div>
            <div class="bottom-row">
                <img class="totalaff" src="{{ asset('assets/images/totalref.svg') }}" alt="">
                <span style="font-size: 16px;">Total Earning</span>
            </div>
        </div>
    </div>
</div>

<div class="mid mt-5" style="width: 100%; margin:0px auto">

    <div class="referral-section">

        <div class="referral-item">
            <div class="icon-circle green-bg">
                <img src="{{ asset('assets/images/bg (1).svg') }}" alt="">
            </div>
            <div class="text">Get <strong>$100</strong> For <strong>20</strong> Package<br> Selling Referral.</div>
        </div>

        <div class="dots">
            <div class="dot" style="display: inline-block;"></div>
            <div class="dot" style="display: inline-block;"></div>
            <div class="dot" style="display: inline-block;"></div>
        </div>

        <div class="referral-item">
            <div class="icon-circle orange-bg">
                <img src="{{ asset('assets/images/bg (2).svg') }}" alt="">
            </div>
            <div class="text">Get <strong>$200</strong> For <strong>50</strong> Package<br> Selling Referral.</div>
        </div>

        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>

        <div class="referral-item">
            <div class="icon-circle blue-bg">
                <img src="{{ asset('assets/images/bg (3).svg') }}" alt="">
            </div>
            <div class="text">Get <strong>$300</strong> For <strong>100</strong> Package<br> Selling Referral.</div>
        </div>
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>

        <div class="referral-item">
            <div class="icon-circle blue-bg">
                <img src="{{ asset('assets/images/bg (4).svg') }}" alt="">
            </div>
            <div class="text">Get <strong>$500</strong> For <strong>200</strong> Package<br> Selling Referral.</div>
        </div>
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>

        <div class="referral-item">
            <div class="icon-circle blue-bg">
                <img src="{{ asset('assets/images/bg (5).svg') }}" alt="">
            </div>
            <div class="text">Get <strong>$1000</strong> For <strong>450</strong> Package<br> Selling Referral.</div>
        </div>

    </div>

</div>

<div class="mid mt-5" style="width: 100%; margin:0px auto">
    <div class="referral-box">
        <div class="referral-title">Your Referral User</div>
        <div class="table-responsive">
            <table class="table referral-table">
                <thead>
                <tr>
                    <th>Referral ID</th>
                    <th>Name</th>
                    <th>Service Buy</th>
                    <th>Date of Purchase</th>
                    <th>Commission %</th>
                    <th>Package</th>
                    <th>Net Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>10231</td>
                    <td>Emily Watson</td>
                    <td>$299</td>
                    <td>Feb 2025</td>
                    <td>8%</td>
                    <td>Stripe Setup</td>
                    <td>$323</td>
                    <td class="text-green" style="color: green;">Completed</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <button class="view-btn" style="border: 0px">View</button>
                        <span class="ellipsis">⋮</span>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>10452</td>
                    <td>Rajiv Menon</td>
                    <td>$399</td>
                    <td>Mar 2025</td>
                    <td>10%</td>
                    <td>LLC Formation</td>
                    <td>$438</td>
                    <td class="text-green" style="color: green;">Completed</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <button class="view-btn" style="border: 0px">View</button>
                        <span class="ellipsis">⋮</span>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>10877</td>
                    <td>Grace Thompson</td>
                    <td>$150</td>
                    <td>Apr 2025</td>
                    <td>5%</td>
                    <td>ITIN</td>
                    <td>$157.50</td>
                    <td class="text-green" style="color: green;">Completed</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <button class="view-btn" style="border: 0px">View</button>
                        <span class="ellipsis">⋮</span>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>10991</td>
                    <td>Ali Reza</td>
                    <td>$547</td>
                    <td>Jan 2025</td>
                    <td>12%</td>
                    <td>Business Bank</td>
                    <td>$612.64</td>
                    <td class="text-green" style="color: green;">Completed</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <button class="view-btn" style="border: 0px">View</button>
                        <span class="ellipsis">⋮</span>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>11200</td>
                    <td>Fatima Zahra</td>
                    <td>$420</td>
                    <td>Feb 2025</td>
                    <td>7%</td>
                    <td>EIN</td>
                    <td>$449.40</td>
                    <td class="text-green" style="color: green;">Completed</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <button class="view-btn" style="border: 0px">View</button>
                        <span class="ellipsis">⋮</span>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>11333</td>
                    <td>Michael Lee</td>
                    <td>$650</td>
                    <td>Mar 2025</td>
                    <td>10%</td>
                    <td>Annual Filing</td>
                    <td>$715</td>
                    <td class="text-green" style="color: green;">Completed</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <button class="view-btn" style="border: 0px">View</button>
                        <span class="ellipsis">⋮</span>
                      </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mid mt-5" style="width: 97%; margin:0px auto">

    <div class="copy-block">
        <label>Referral Link</label>
        <div class="copy-container">
            <span id="refLink" class="copy-text">https://discord.com/channels/@me/1173212334332858368</span>
            <button class="copy-btn" onclick="copyText('refLink')"><i class="fas fa-copy"></i></button>
        </div>
    </div>

    <div class="copy-block">
        <label>Coupon Code</label>
        <div class="copy-container">
            <span id="couponCode" class="copy-text">NHIMON2025</span>
            <button class="copy-btn" onclick="copyText('couponCode')"><i class="fas fa-copy"></i></button>
        </div>
    </div>

</div>


@endsection



@push('script')
<script>
    function copyText(id) {
      const text = document.getElementById(id).innerText;
      navigator.clipboard.writeText(text).then(() => {
        alert("Copied: " + text);
      }).catch(err => {
        alert("Failed to copy");
        console.error(err);
      });
    }
</script>
@endpush
