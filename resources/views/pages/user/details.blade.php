@extends('layouts.app')
@section('title', 'User Details')
@section('content')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">Tony Robbins (<a href="mailto:tony@gmail.com">tony@gmail.com</a>)</h5><a
                    class="btn btn-falcon-default btn-sm" href="customer-details.html#!"><span
                        class="fas fa-plus fs-11 me-1"></span>Add note</a><button
                    class="btn btn-falcon-default btn-sm dropdown-toggle ms-2 dropdown-caret-none" type="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu"><a class="dropdown-item" href="customer-details.html#">Edit</a><a
                        class="dropdown-item" href="customer-details.html#">Report</a><a class="dropdown-item"
                        href="customer-details.html#">Archive</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                        href="customer-details.html#">Delete user</a>
                </div>
            </div>
            <div class="col-auto d-none d-sm-block">
                <h6 class="text-uppercase text-600">Customer<span class="fas fa-user ms-2"></span></h6>
            </div>
        </div>
    </div>
    <div class="card-body border-top">
        <div class="d-flex"><span class="fas fa-user text-success me-2" data-fa-transform="down-5"></span>
            <div class="flex-1">
                <p class="mb-0">Customer was created</p>
                <p class="fs-10 mb-0 text-600">Jan 12, 11:13 PM</p>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="mb-0">Details</h5>
            </div>
            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="customer-details.html#!"><span
                        class="fas fa-pencil-alt fs-11 me-1"></span>Update details</a></div>
        </div>
    </div>
    <div class="card-body bg-body-tertiary border-top">
        <div class="row">
            <div class="col-lg col-xxl-5">
                <h6 class="fw-semi-bold ls mb-3 text-uppercase">Account Information</h6>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">ID</p>
                    </div>
                    <div class="col">dcfasyo_Dfdjl</div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">Created</p>
                    </div>
                    <div class="col">2019/01/12 23:13</div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">Email</p>
                    </div>
                    <div class="col"><a href="mailto:tony@gmail.com">tony@gmail.com</a></div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">Description</p>
                    </div>
                    <div class="col">
                        <p class="fst-italic text-400 mb-1">No Description</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-0">VAT number</p>
                    </div>
                    <div class="col">
                        <p class="fst-italic text-400 mb-0">No VAT number</p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                <h6 class="fw-semi-bold ls mb-3 text-uppercase">Billing Information</h6>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">Send email to</p>
                    </div>
                    <div class="col"><a href="mailto:tony@gmail.com">tony@gmail.com</a></div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">Address</p>
                    </div>
                    <div class="col">
                        <p class="mb-1">8962 Lafayette St. <br />Oswego, NY 13126</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-1">Phone number</p>
                    </div>
                    <div class="col"><a href="tel:+12025550110">+1-202-555-0110</a></div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="fw-semi-bold mb-0">Invoice prefix</p>
                    </div>
                    <div class="col">
                        <p class="fw-semi-bold mb-0">7C23435</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer border-top text-end"><a class="btn btn-falcon-default btn-sm"
            href="customer-details.html#!"><span class="fas fa-dollar-sign fs-11 me-1"></span>Refund</a><a
            class="btn btn-falcon-default btn-sm ms-2" href="customer-details.html#!"><span
                class="fas fa-check fs-11 me-1"></span>Save changes</a></div>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Logs</h5>
    </div>
    <div class="card-body border-top p-0">
        <div class="row g-0 align-items-center border-bottom py-2 px-3">
            <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
            <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoiceitems</code></div>
            <div class="col-md-auto">
                <p class="mb-0">2019/02/23 15:29:45</p>
            </div>
        </div>
        <div class="row g-0 align-items-center border-bottom py-2 px-3">
            <div class="col-md-auto pe-3"><span class="badge badge-subtle-warning rounded-pill">400</span></div>
            <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoiceitems</code></div>
            <div class="col-md-auto">
                <p class="mb-0">2019/02/19 21:32:12</p>
            </div>
        </div>
        <div class="row g-0 align-items-center border-bottom py-2 px-3">
            <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
            <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
            <div class="col-md-auto">
                <p class="mb-0">2019/02/26 12:23:43</p>
            </div>
        </div>
        <div class="row g-0 align-items-center border-bottom py-2 px-3">
            <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
            <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
            <div class="col-md-auto">
                <p class="mb-0">2019/02/12 23:32:12</p>
            </div>
        </div>
        <div class="row g-0 align-items-center border-bottom py-2 px-3">
            <div class="col-md-auto pe-3"><span class="badge badge-subtle-danger rounded-pill">404</span></div>
            <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
            <div class="col-md-auto">
                <p class="mb-0">2019/02/08 02:20:23</p>
            </div>
        </div>
        <div class="row g-0 align-items-center border-bottom py-2 px-3">
            <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
            <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
            <div class="col-md-auto">
                <p class="mb-0">2019/02/01 12:29:34</p>
            </div>
        </div>
    </div>
    <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-link d-block w-100"
            href="customer-details.html#!">View more logs<span class="fas fa-chevron-right fs-11 ms-1"></span></a></div>
</div>
@endsection
