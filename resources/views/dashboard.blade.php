@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100 ecommerce-card-min-width">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Calculated according to last week's sales"><span class="far fa-question-circle"
                            data-fa-transform="shrink-1"></span></span></h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                    <div class="col">
                        <p class="font-sans-serif lh-1 mb-1 fs-5">$47K</p><span
                            class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>
                    </div>
                    <div class="col-auto ps-0">
                        <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Total Order</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span
                            class="badge rounded-pill fs-11 bg-200 text-primary"><span
                                class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                        <div class="echart-default-total-order"
                            data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"10px"}}'
                            data-echart-responsive="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                        <h6 class="mt-1">Market Share</h6>
                        <div class="fs-11 mt-3">
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span
                                        class="fw-semi-bold">Samsung</span></div>
                                <div class="d-xxl-none">33%</div>
                            </div>
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-info"></span><span
                                        class="fw-semi-bold">Huawei</span></div>
                                <div class="d-xxl-none">29%</div>
                            </div>
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-300"></span><span
                                        class="fw-semi-bold">Apple</span></div>
                                <div class="d-xxl-none">20%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto position-relative">
                        <div class="echart-market-share"></div>
                        <div class="position-absolute top-50 start-50 translate-middle text-1100 fs-7">26M</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <x-weather-card location="Dhaka" />
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-6 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-body-tertiary">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="mb-0">Running Projects</h6>
                    </div>
                    <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                            <option>Working Time</option>
                            <option>Estimated Time</option>
                            <option>Billable Time</option>
                        </select></div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-primary-subtle text-dark"><span
                                        class="fs-9 text-primary">F</span></div>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                        href="index.html#!">Falcon</a><span
                                        class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">
                            <div class="col-auto pe-2">
                                <div class="fs-10 fw-semi-bold">12:50:00</div>
                            </div>
                            <div class="col-5 pe-x1 ps-2">
                                <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar"
                                    aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar rounded-pill" style="width: 38%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-success-subtle text-dark"><span
                                        class="fs-9 text-success">R</span></div>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                        href="index.html#!">Reign</a><span
                                        class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">
                            <div class="col-auto pe-2">
                                <div class="fs-10 fw-semi-bold">25:20:00</div>
                            </div>
                            <div class="col-5 pe-x1 ps-2">
                                <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar"
                                    aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar rounded-pill" style="width: 79%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-info-subtle text-dark"><span
                                        class="fs-9 text-info">B</span></div>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                        href="index.html#!">Boots4</a><span
                                        class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">
                            <div class="col-auto pe-2">
                                <div class="fs-10 fw-semi-bold">58:20:00</div>
                            </div>
                            <div class="col-5 pe-x1 ps-2">
                                <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar rounded-pill" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-warning-subtle text-dark"><span
                                        class="fs-9 text-warning">R</span></div>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                        href="index.html#!">Raven</a><span
                                        class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">
                            <div class="col-auto pe-2">
                                <div class="fs-10 fw-semi-bold">21:20:00</div>
                            </div>
                            <div class="col-5 pe-x1 ps-2">
                                <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar rounded-pill" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-danger-subtle text-dark"><span
                                        class="fs-9 text-danger">S</span></div>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                        href="index.html#!">Slick</a><span
                                        class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">
                            <div class="col-auto pe-2">
                                <div class="fs-10 fw-semi-bold">31:20:00</div>
                            </div>
                            <div class="col-5 pe-x1 ps-2">
                                <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar rounded-pill" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                    href="index.html#!">Show all projects<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
        </div>
    </div>
    <div class="col-lg-6 ps-lg-2 mb-3">
        <div class="card h-lg-100">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <h6 class="mb-0">Total Sales</h6>
                    </div>
                    <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
                            <option value="0">January</option>
                            <option value="1">February</option>
                            <option value="2">March</option>
                            <option value="3">April</option>
                            <option value="4">May</option>
                            <option value="5">Jun</option>
                            <option value="6">July</option>
                            <option value="7">August</option>
                            <option value="8">September</option>
                            <option value="9">October</option>
                            <option value="10">November</option>
                            <option value="11">December</option>
                        </select>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                type="button" id="dropdown-total-sales" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs-11"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="dropdown-total-sales"><a class="dropdown-item"
                                    href="index.html#!">View</a><a class="dropdown-item" href="index.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="index.html#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body h-100 pe-0">
                <!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js') }}-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js') }}-->
                <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2 mb-3">
        {{-- @livewire('click') --}}
        <!-- Replace static storage card with our dynamic Livewire component -->
        @livewire('system-storage-metrics', ['disk' => 'local', 'refreshInterval' => 30])
    </div>
    <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
        <div class="card h-lg-100">
            <div class="bg-holder bg-card"
                style="background-image:url(assets/images/icons/spot-illustrations/corner-1.png') }});"></div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h5 class="text-warning">Running out of your space?</h5>
                <p class="fs-10 mb-0">Your storage will be running out soon. Get more space and powerful productivity
                    features.</p><a class="btn btn-link fs-10 text-warning mt-lg-3 ps-0" href="index.html#!">Upgrade
                    storage<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-4 down-1"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                        <thead class="bg-body-tertiary">
                            <tr>
                                <th class="text-900">Best Selling Products</th>
                                <th class="text-900 text-end">Revenue ($3333)</th>
                                <th class="text-900 pe-x1 text-end" style="width: 8rem">Revenue (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200"
                                            src="{{ asset('assets/images/products/12.png') }}" width="60" alt="" />
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link"
                                                    href="index.html#!">Raven Pro</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Landing</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$1311</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;"
                                            role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar rounded-pill" style="width: 39%;"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">39%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200"
                                            src="{{ asset('assets/images/products/10.png') }}" width="60" alt="" />
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link"
                                                    href="index.html#!">Boots4</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$860</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;"
                                            role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar rounded-pill" style="width: 26%;"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">26%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200"
                                            src="{{ asset('assets/images/products/11.png') }}" width="60" alt="" />
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link"
                                                    href="index.html#!">Falcon</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Admin</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$539</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;"
                                            role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar rounded-pill" style="width: 16%;"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">16%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200"
                                            src="{{ asset('assets/images/products/14.png') }}" width="60" alt="" />
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link"
                                                    href="index.html#!">Slick</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Builder</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$343</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;"
                                            role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar rounded-pill" style="width: 10%;"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">10%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative"><img
                                            class="rounded-1 border border-200"
                                            src="{{ asset('assets/images/products/13.png') }}" width="60" alt="" />
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link"
                                                    href="index.html#!">Reign Pro</a></h6>
                                            <p class="fw-semi-bold mb-0 text-500">Agency</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semi-bold">$280</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;"
                                            role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar rounded-pill" style="width: 8%;"></div>
                                        </div>
                                        <div class="fw-semi-bold ms-2">8%</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-body-tertiary py-2">
                <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                            <option>Last 7 days</option>
                            <option>Last Month</option>
                            <option>Last Year</option>
                        </select></div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="index.html#!">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
        <div class="card h-100">
            <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                <h6 class="mb-0">Shared Files</h6><a class="py-1 fs-10 font-sans-serif" href="index.html#!">View All</a>
            </div>
            <div class="card-body pb-0">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2"
                            src="{{ asset('assets/images/products/5-thumb.png') }}" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                href="index.html#!">apple-smart-watch.png</a></h6>
                        <div class="fs-10"><span class="fw-semi-bold">Antony</span><span
                                class="fw-medium text-600 ms-2">Just Now</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Download"
                                href="{{ asset('assets/images/icons/cloud-download.svg') }}" download="download"><img
                                    src="{{ asset('assets/images/icons/cloud-download.svg') }}" alt=""
                                    width="15" /></a><button
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img
                                    src="{{ asset('assets/images/icons/edit-alt.svg') }}" alt="" width="15" /></button>
                        </div>
                    </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2"
                            src="{{ asset('assets/images/products/3-thumb.png') }}" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                href="index.html#!">iphone.jpg</a></h6>
                        <div class="fs-10"><span class="fw-semi-bold">Antony</span><span
                                class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Download"
                                href="{{ asset('assets/images/icons/cloud-download.svg') }}" download="download"><img
                                    src="{{ asset('assets/images/icons/cloud-download.svg') }}" alt=""
                                    width="15" /></a><button
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img
                                    src="{{ asset('assets/images/icons/edit-alt.svg') }}" alt="" width="15" /></button>
                        </div>
                    </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="{{ asset('assets/images/icons/zip.png') }}"
                            alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="index.html#!">Falcon
                                v1.8.2</a></h6>
                        <div class="fs-10"><span class="fw-semi-bold">Jane</span><span
                                class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Download"
                                href="{{ asset('assets/images/icons/cloud-download.svg') }}" download="download"><img
                                    src="{{ asset('assets/images/icons/cloud-download.svg') }}" alt=""
                                    width="15" /></a><button
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img
                                    src="{{ asset('assets/images/icons/edit-alt.svg') }}" alt="" width="15" /></button>
                        </div>
                    </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2"
                            src="{{ asset('assets/images/products/2-thumb.png') }}" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="index.html#!">iMac.jpg')
                                }}</a></h6>
                        <div class="fs-10"><span class="fw-semi-bold">Rowen</span><span
                                class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Download"
                                href="{{ asset('assets/images/icons/cloud-download.svg') }}" download="download"><img
                                    src="{{ asset('assets/images/icons/cloud-download.svg') }}" alt=""
                                    width="15" /></a><button
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img
                                    src="{{ asset('assets/images/icons/edit-alt.svg') }}" alt="" width="15" /></button>
                        </div>
                    </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="{{ asset('assets/images/icons/docs.png') }}"
                            alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                href="index.html#!">functions.php</a></h6>
                        <div class="fs-10"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">1
                                Oct at 4:30 PM</span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Download"
                                href="{{ asset('assets/images/icons/cloud-download.svg') }}" download="download"><img
                                    src="{{ asset('assets/images/icons/cloud-download.svg') }}" alt=""
                                    width="15" /></a><button
                                class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img
                                    src="{{ asset('assets/images/icons/edit-alt.svg') }}" alt="" width="15" /></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-md-6 col-xxl-3 pe-md-2 mb-3 mb-xxl-0">
        <div class="card">
            <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                <h6 class="mb-0">Active Users</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs-11"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a
                            class="dropdown-item" href="index.html#!">View</a><a class="dropdown-item"
                            href="index.html#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="index.html#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="card-body py-2">
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                        <img class="rounded-circle" src="{{ asset('assets/images/team/1.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Emma Watson</a></h6>
                        <p class="text-500 fs-11 mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                        <img class="rounded-circle" src="{{ asset('assets/images/team/2.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Antony Hopkins</a></h6>
                        <p class="text-500 fs-11 mb-0">Moderator</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-away">
                        <img class="rounded-circle" src="{{ asset('assets/images/team/3.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Anna Karinina</a></h6>
                        <p class="text-500 fs-11 mb-0">Editor</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-offline">
                        <img class="rounded-circle" src="{{ asset('assets/images/team/4.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">John Lee</a></h6>
                        <p class="text-500 fs-11 mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative false">
                    <div class="avatar avatar-2xl status-offline">
                        <img class="rounded-circle" src="{{ asset('assets/images/team/5.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                href="pages/user/profile.html">Rowen Atkinson</a></h6>
                        <p class="text-500 fs-11 mb-0">Editor</p>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                    href="app/social/followers.html">All active users<span
                        class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3 ps-md-2 order-xxl-1 mb-3 mb-xxl-0">
        <div class="card h-100">
            <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                <h6 class="mb-0">Bandwidth Saved</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs-11"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved">
                        <a class="dropdown-item" href="index.html#!">View</a><a class="dropdown-item"
                            href="index.html#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="index.html#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-center flex-column">
                <!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js') }}-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js') }}-->
                <div class="echart-bandwidth-saved" data-echart-responsive="true"></div>
                <div class="text-center mt-3">
                    <h6 class="fs-9 mb-1"><span class="fas fa-check text-success me-1"
                            data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                    <p class="fs-10 mb-0">38.44 GB total bandwidth</p>
                </div>
            </div>
            <div class="card-footer bg-body-tertiary py-2">
                <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                            <option>Last 6 Months</option>
                            <option>Last Year</option>
                            <option>Last 2 Year</option>
                        </select></div>
                    <div class="col-auto"><a class="fs-10 font-sans-serif" href="index.html#!">Help</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 px-xxl-2">
        <div class="card h-100">
            <div class="card-header bg-body-tertiary py-2">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <h6 class="mb-0">Top Products</h6>
                    </div>
                    <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="index.html#!">View
                            Details</a>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                type="button" id="dropdown-top-products" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs-11"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="dropdown-top-products"><a class="dropdown-item"
                                    href="index.html#!">View</a><a class="dropdown-item" href="index.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="index.html#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body h-100">
                <!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js') }}-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js') }}-->
                <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
            </div>
        </div>
    </div>
</div>
@endsection
