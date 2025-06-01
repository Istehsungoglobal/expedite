@extends('layouts.app')
@section('title', 'Company Info')

@push('style')
<style>
   .agent-table {
      border: 1px solid #eee;
      border-radius: 12px;
      overflow: hidden;
    }

    .agent-table th {
      font-size: 14px;
      color: #999;
      font-weight: 500;
      border-bottom: none;
    }

    .agent-table td {
      font-size: 14px;
      vertical-align: middle;
      border-top: none;
    }

    .fw-bold {
      font-weight: 600 !important;
    }

    .text-red {
      color: red;
      font-weight: 500;
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

    @media (max-width: 768px) {
      .agent-table thead {
        display: none;
      }

      .agent-table, .agent-table tbody, .agent-table tr, .agent-table td {
        display: block;
        width: 100%;
      }

      .agent-table td {
        padding: 10px 0;
        border-top: none;
      }
    }
    .filing-table {
      border: 1px solid #eee;
      border-radius: 12px;
      overflow: hidden;
    }

    .filing-table th {
      font-size: 14px;
      color: #999;
      font-weight: 500;
      border-bottom: none;
    }

    .filing-table td {
      font-size: 14px;
      vertical-align: middle;
      border-top: none;
    }

    .fw-bold {
      font-weight: 600 !important;
    }

    .text-red {
      color: red;
      font-weight: 500;
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

    @media (max-width: 768px) {
      .filing-table thead {
        display: none;
      }

      .filing-table, .filing-table tbody, .filing-table tr, .filing-table td {
        display: block;
        width: 100%;
      }

      .filing-table td {
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Compliance</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mid" style="width: 100%; margin:10px auto; ">
        <div class="col-12">
        <div class="table-responsive">
            <table class="table agent-table">
                <thead style="background-color: #fff4ef">
                <tr>
                    <th>State</th>
                    <th>Register Agent</th>
                    <th>Agent Address</th>
                    <th>Renewal Date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody style="background-color: #f1f1f1">
                <tr>
                    <td>Wyoming</td>
                    <td class="fw-bold">Republic Registered <br> Agent LLC</td>
                    <td>29 mirpur 12 Dohs dhaka <br> 2122</td>
                    <td>
                    August 12, 2025 <br>
                    <span class="text-red">Service is Expired.</span>
                    </td>
                    <td>
                    <button class="renew-btn">Renew Now – $199</button>
                    </td>
                </tr>
                <tr>
                    <td>Delaware</td>
                    <td class="fw-bold">Alpha Formation <br> Solutions Inc</td>
                    <td>778 Elm Street, <br> Wilmington DE 19801</td>
                    <td>
                    July 20, 2025 <br>
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
    <div class="col-12">
        <div class="table-responsive">
            <table class="table filing-table">
                <thead style="background-color: #fff4ef">
                <tr>
                    <th>State</th>
                    <th>Filing</th>
                    <th>Agent Address</th>
                    <th>Renewal Date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody style="background-color: #f1f1f1">
                <tr>
                    <td>Pennsylvania</td>
                    <td class="fw-bold">Annual Filing</td>
                    <td>29 mirpur 12 Dohs dhaka<br>2122</td>
                    <td>
                    August 12, 2025<br>
                    <span class="text-red">Service is Expired.</span>
                    </td>
                    <td>
                    <button class="renew-btn">Renew Now – $199</button>
                    </td>
                </tr>
                <tr>
                    <td>Wyoming</td>
                    <td class="fw-bold">Annual Filing</td>
                    <td>112 Block C Gulshan,<br>Dhaka 1212</td>
                    <td>
                    July 25, 2025<br>
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
