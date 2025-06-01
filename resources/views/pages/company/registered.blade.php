@extends('layouts.app')
@section('title', 'Registered Agent')

@push('style')
<style>
   .notice-card {
      background-color: #fff4ef;
      border-radius: 12px;
      padding: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .notice-icon {
      background-color: #fff;
      border: 1px solid #ffa07a;
      border-radius: 12px;
      padding: 10px;
      color: #ff5a1f;
      font-size: 20px;
    }

    .notice-text h6 {
      font-weight: 600;
      margin-bottom: 6px;
    }

    .notice-text p {
      margin: 0;
      font-size: 14px;
    }

    .notice-text p strong {
      font-weight: 600;
    }

    .renew-btn {
      background-color: #ff5a1f;
      border: none;
      color: #fff;
      padding: 10px 20px;
      border-radius: 30px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      font-weight: 500;
      box-shadow: 0 4px 10px rgba(255, 90, 31, 0.3);
    }

    .renew-btn .circle {
      background-color: white;
      color: #ff5a1f;
      border-radius: 50%;
      padding: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 24px;
      height: 24px;
    }

    @media (max-width: 576px) {
      .notice-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
      }

      .btn-container {
        margin-top: 12px;
      }
    }
    .custom-table {
      border: 1px solid #eee;
      border-radius: 12px;
      overflow: hidden;
    }

    .custom-table th {
      font-size: 14px;
      font-weight: 500;
      color: #777;
      background-color: transparent;
      border-bottom: none;
    }

    .custom-table td {
      vertical-align: middle;
      font-size: 14px;
      border-top: none;
    }

    .renew-btn {
      background-color: #ff5a1f;
      border: none;
      color: white;
      border-radius: 20px;
      padding: 6px 16px;
      font-size: 13px;
      font-weight: 500;
      box-shadow: 0 4px 10px rgba(255, 90, 31, 0.3);
    }

    .text-red {
      color: red;
      font-weight: 500;
    }

    .fw-bold {
      font-weight: 600 !important;
    }

    @media (max-width: 768px) {
      .custom-table thead {
        display: none;
      }

      .custom-table tbody, .custom-table tr, .custom-table td {
        display: block;
        width: 100%;
      }

      .custom-table td {
        padding: 10px 0;
        border-top: none;
      }
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Registered Agent</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
         <div class="mid" style="width: 100%; margin:10px auto; ">
            <div class="notice-card">
                <div class="d-flex flex-column gap-2">
                    <div class="notice-text">
                    <h6>Expired Registered Agent Service</h6>
                    <p>Your register agent service for payment expired on <strong>May 12, 2025</strong></p>
                    </div>
                    <div class="btn-container" style="    margin-top: 30px;">
                    <button class="renew-btn">
                        Renew Now – $199
                        <span class="circle"><i class="fas fa-arrow-right"></i></span>
                    </button>
                    </div>
                </div>
                <div class="notice-icon mt-3 mt-sm-0">
                    <i class="fas fa-user-clock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mid" style="width: 100%; margin:10px auto; ">
            <div class="table-responsive" style="background-color: white;border-radius: 15px;">
                <table class="table custom-table">
                    <thead>
                    <tr>
                        <th>State</th>
                        <th>Agent Name</th>
                        <th>Agent Address</th>
                        <th>Renewal Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody style="background-color: #fff4ef;border-radius: 15px;">
                    <tr>
                        <td class="fw-bold">Pennsylvania</td>
                        <td>Republic Registered Agent LLC</td>
                        <td>29 mirpur 12 Dohs dhaka 2122</td>
                        <td>
                        August 12, 2025 <br>
                        <span class="text-red">Service is Expired.</span>
                        </td>
                        <td>
                        <button class="renew-btn">Renew Now – $199</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Pennsylvania</td>
                        <td>Republic Registered Agent LLC</td>
                        <td>29 mirpur 12 Dohs dhaka 2122</td>
                        <td>
                        August 12, 2025 <br>
                        <span class="text-red">Service is Expired.</span>
                        </td>
                        <td>
                        <button class="renew-btn">Renew Now – $199</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Pennsylvania</td>
                        <td>Republic Registered Agent LLC</td>
                        <td>29 mirpur 12 Dohs dhaka 2122</td>
                        <td>
                        August 12, 2025 <br>
                        <span class="text-red">Service is Expired.</span>
                        </td>
                        <td>
                        <button class="renew-btn">Renew Now – $199</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection



@push('script')
<script>
   
</script>
@endpush
