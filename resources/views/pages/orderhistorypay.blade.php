
@extends('layouts.app')
@section('title', 'Order History')


@push('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
<style>
  
</style>

@endpush

@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Order History</h2>
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
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="mid" style="width: 100%; margin:10px auto; ">
                <div class="subscription-header" style=" display: flex;align-items: center; gap: 8px;font-size: 14px;font-weight: 500;color: #333;cursor: pointer;">
                    <i class="fas fa-crown" style=" color: #ff5a1f;font-size: 18px;"></i>
                    <span>Subscription History</span>
                    <i class="fas fa-chevron-down chevron"></i>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="mid" style="width: 100%; margin:10px auto;">
                    <div class="table-responsive">
                        <table class="table order-history-table" style=" border: 1px solid #eee;border-radius: 12px;overflow: hidden;">
                            <thead style="background-color: #fff4ef"">
                            <tr>
                                <th>Company Name</th>
                                <th>Order no.</th>
                                <th>Order type</th>
                                <th>Amount</th>
                                <th>Receipt</th>
                                <th>Payment Date</th>
                            </tr>
                            </thead>
                            <tbody style="background-color: #d3d3d3">
                            <tr>
                                <td class="fw-bold">OCTAGON DIGITAL MARKETING LLC</td>
                                <td>3200254</td>
                                <td>LLC Formation</td>
                                <td>$189</td>
                                <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                                <td>29 April, 2025</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">SOFTKING TECHNOLOGIES</td>
                                <td>3200255</td>
                                <td>EIN Application</td>
                                <td>$99</td>
                                <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                                <td>02 May, 2025</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">BLUEOCEAN WEB LLC</td>
                                <td>3200256</td>
                                <td>Registered Agent</td>
                                <td>$150</td>
                                <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                                <td>03 May, 2025</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">ALPHASTART INC</td>
                                <td>3200257</td>
                                <td>ITIN Filing</td>
                                <td>$179</td>
                                <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                                <td>04 May, 2025</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">VORTEX HOLDINGS</td>
                                <td>3200258</td>
                                <td>Operating Agreement</td>
                                <td>$120</td>
                                <td style="width: 10%;"><img src="{{ asset('assets/images/invoice.png') }}" style="width: 25%;" alt=""></td>
                                <td>05 May, 2025</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')


@endpush
