@extends('layouts.app')
@section('title', 'Order History Receipts')

@push('style')
<style>
   .order-table {
      border: 1px solid #eee;
      border-radius: 12px;
      overflow: hidden;
    }

    .order-table th {
      font-size: 14px;
      color: #999;
      font-weight: 500;
      border-bottom: none;
    }

    .order-table td {
      font-size: 14px;
      vertical-align: middle;
      border-top: none;
    }

    .fw-bold {
      font-weight: 600 !important;
    }

    .text-green {
      
      font-weight: 500;
    }

    .receipt-icon {
      color: #ff5a1f;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .order-table thead {
        display: none;
      }

      .order-table, .order-table tbody, .order-table tr, .order-table td {
        display: block;
        width: 100%;
      }

      .order-table td {
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Order History Receipts</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
         <div class="mid" style="width: 100%; margin:10px auto; ">
            <div class="table-responsive">
            <table class="table order-table">
                <thead style="background-color: #fff4ef">
                <tr>
                    <th>Company name</th>
                    <th>Order no.</th>
                    <th>Order type</th>
                    <th>Amount</th>
                    <th>Receipt</th>
                    <th>Order date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody style="background-color: #f1f1f1">
                <tr>
                    <td class="fw-bold">OCTAGON DIGITAL MARKETING LLC</td>
                    <td>223081020360</td>
                    <td>LLC FILING (PA)</td>
                    <td>$210.00</td>
                    <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                    <td>Aug. 12, 2025</td>
                    <td class="text-green" style="color: green;">Completed</td>
                </tr>
                <tr>
                    <td class="fw-bold">SOFTKING TECH SOLUTIONS</td>
                    <td>223091223100</td>
                    <td>EIN Application</td>
                    <td>$95.00</td>
                    <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                    <td>July 8, 2025</td>
                    <td class="text-green" style="color: green;">Completed</td>
                </tr>
                <tr>
                    <td class="fw-bold">BLUE OCEAN WEB LLC</td>
                    <td>223071199888</td>
                    <td>Registered Agent</td>
                    <td>$150.00</td>
                    <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                    <td>June 30, 2025</td>
                    <td class="text-green" style="color: green;">Completed</td>
                </tr>
                <tr>
                    <td class="fw-bold">NORTHFIELD COMMERCE INC</td>
                    <td>223081030777</td>
                    <td>Business Address</td>
                    <td>$120.00</td>
                    <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                    <td>May 19, 2025</td>
                    <td class="text-green" style="color: green;">Completed</td>
                </tr>
                <tr>
                    <td class="fw-bold">ALPHA EDGE HOLDINGS</td>
                    <td>223080001234</td>
                    <td>LLC FILING (TX)</td>
                    <td>$220.00</td>
                    <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                    <td>April 10, 2025</td>
                    <td class="text-green" style="color: green;">Completed</td>
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
