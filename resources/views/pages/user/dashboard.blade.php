@extends('layouts.app')
@section('title', 'User')

@push('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
<link rel="stylesheet"  href="{{ asset('assets/css/userdashboard.css') }}" />
<style>
    .download-link {
        display: none; 
    }
  </style>
@endpush
<!-- main content .................. -->


@section('content')
    <div class="row g-3 mb-3">
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-header">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-auto align-items-center">
                            <h2 class="fs-6 mb-0  py-2 py-xl-0">Dear Abraham Jhon</h2>
                            <p class=".welcome-back-to">On behalf of everyone at Expedite Formation, we extend our heartfelt wishes for your continued success with Pranto Ventures LLC.</p>
                        </div>
                        <div class="col-6 col-sm-auto align-items-center">
                            <img src="{{ asset('assets/images/usermaps.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col-8">
           <div class="row">
                <div class="col-md-6">
                    <div class="card" style="position:relative">
                        <img class="usa" src="{{ asset("assets/images/usa 1.svg") }}" alt="">
                        <div class="card-header" style="margin-top:10%">
                            <p class="usa-business-name">Business Name</p>
                            <h3 class="usa-pranto-ventures-llc">Pranto Ventures LLC</h3>      
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="position:relative">
                        <img class="Groupuser" src="{{ asset("assets/images/Groupuser.svg") }}" alt="">
                        <div class="card-header" style="margin-top:10%">
                            <p class="usa-business-name">Business Name</p>
                            <h3 class="usa-pranto-ventures-llc">Pranto Ventures LLC</h3>      
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="available-position">
                        <img class="business-card-id-card-svgrepo-icon" alt="" src="{{ asset('assets/images/buscar.svg') }}">
                        <div class="business-id-parent">
                            <div class="business-id">Business ID</div>
                            <div class="div">534678987954</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="available-position">
                        <img class="business-card-id-card-svgrepo-icon" alt="" src="{{ asset('assets/images/hashtag.svg') }}">
                        <div class="business-id-parent">
                            <div class="business-id">EIN</div>
                            <div class="div">6438-3456885</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="available-position">
                        <img class="business-card-id-card-svgrepo-icon" alt="" src="{{ asset('assets/images/calen.svg') }}">
                        <div class="business-id-parent">
                            <div class="business-id">Next due date</div>
                            <div class="div">21 may 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="rectangle-div">
                        <div class="documents">Documents</div>
                        <div class="document-box">
                            <div class="doc-frame-parent">
                                <div class="doc-lorem-ipsum-is-simply-dummy-te-parent">
                                    <div class="doc-lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the printing</div>
                                    <div class="doc-minutes-ago">5 Minutes ago</div>
                                </div>
                                <div class="download-icon" onclick="triggerDownload(this)">
                                    <img class="doc-frame-child" alt="" src="{{ asset('assets/images/doc.svg') }}">
                                    <a class="download-link" href="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" download></a>
                                </div>
                            </div>
                            <div class="doc-frame-parent">
                                <div class="doc-lorem-ipsum-is-simply-dummy-te-parent">
                                    <div class="doc-lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the printing</div>
                                    <div class="doc-minutes-ago">5 Minutes ago</div>
                                </div>
                                <div class="download-icon" onclick="triggerDownload(this)">
                                    <img class="doc-frame-child" alt="" src="{{ asset('assets/images/doc.svg') }}">
                                    <a class="download-link" href="https://file-examples.com/storage/fe0cf777764bd5249b79c1f/2017/10/file-sample_150kB.pdf" download></a>
                                </div>
                            </div>
                            <div class="doc-frame-parent">
                                <div class="doc-lorem-ipsum-is-simply-dummy-te-parent">
                                    <div class="doc-lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the printing</div>
                                    <div class="doc-minutes-ago">5 Minutes ago</div>
                                </div>
                                <div class="download-icon" onclick="triggerDownload(this)">
                                    <img class="doc-frame-child" alt="" src="{{ asset('assets/images/doc.svg') }}">
                                    <a class="download-link" href="https://www.sample-videos.com/pdf/Sample-pdf-5mb.pdf" download></a>
                                </div>
                            </div>
                            <div class="doc-frame-parent">
                                <div class="doc-lorem-ipsum-is-simply-dummy-te-parent">
                                    <div class="doc-lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the printing</div>
                                    <div class="doc-minutes-ago">5 Minutes ago</div>
                                </div>
                                <div class="download-icon" onclick="triggerDownload(this)">
                                    <img class="doc-frame-child" alt="" src="{{ asset('assets/images/doc.svg') }}">
                                    <a class="download-link" href="https://www.sample-videos.com/pdf/Sample-pdf-5mb.pdf" download></a>
                                </div>
                            </div>
                            <div class="doc-frame-parent">
                                <div class="doc-lorem-ipsum-is-simply-dummy-te-parent">
                                    <div class="doc-lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the printing</div>
                                    <div class="doc-minutes-ago">5 Minutes ago</div>
                                </div>
                                <div class="download-icon" onclick="triggerDownload(this)">
                                    <img class="doc-frame-child" alt="" src="{{ asset('assets/images/doc.svg') }}">
                                    <a class="download-link" href="https://www.sample-videos.com/pdf/Sample-pdf-5mb.pdf" download></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           </div>
        </div>
        <div class="col-4">
            <div class="order-div">
                <div class="order-tracking">Order Tracking</div>
                <div class="row mt-3">
                    <div class="col-12">
                        <img class="com-icon" alt="" src="{{ asset('assets/images/ordercom.svg') }}">
                        <div class="com-div">
                            <h4 class="name-availability-search mt-2">Name Availability Search</h4>
                            <p class="complete">Complete</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="com-icon" alt="" src="{{ asset('assets/images/ordercom.svg') }}">
                        <div class="com-div">
                            <h4 class="name-availability-search mt-2">Name Availability Search</h4>
                            <p class="complete">Complete</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="com-icon" alt="" src="{{ asset('assets/images/ordercom.svg') }}">
                        <div class="com-div">
                            <h4 class="name-availability-search mt-2">Name Availability Search</h4>
                            <p class="complete">Complete</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="com-icon" alt="" src="{{ asset('assets/images/orderpross.png') }}">
                        <div class="com-div">
                            <h4 class="name-availability-search mt-2">Name Availability Search</h4>
                            <p class="complete">Processing</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="com-icon" alt="" src="{{ asset('assets/images/orderpross.png') }}">
                        <div class="com-div">
                            <h4 class="name-availability-search mt-2">Name Availability Search</h4>
                            <p class="complete">Processing</p>
                        </div>
                    </div><div class="col-12">
                        <img class="com-icon" style=" background-color: rgb(197, 197, 196);" alt="" src="{{ asset('assets/images/orderpan.png') }}">
                        <div class="com-divp">
                            <h4 class="name-availability-search mt-2"style="color: black;">Name Availability Search</h4>
                            <p class="complete"style="color: black;">Pending</p>
                        </div>
                    </div><div class="col-12">
                        <img class="com-icon" style=" background-color: rgb(197, 197, 196);" alt="" src="{{ asset('assets/images/orderpan.png') }}">
                        <div class="com-divp">
                            <h4 class="name-availability-search mt-2" style="color: black;">Name Availability Search</h4>
                            <p class="complete"style="color: black;">Pending</p>
                        </div>
                    </div><div class="col-12">
                        <img class="com-icon"  style="background-color: rgb(197, 197, 196);" alt="" src="{{ asset('assets/images/orderpan.png') }}">
                        <div class="com-divp">
                            <h4 class="name-availability-search mt-2"style="color: black;">Name Availability Search</h4>
                            <p class="complete"style="color: black;">Pending</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="com-icon" style=" background-color: rgb(197, 197, 196);" alt="" src="{{ asset('assets/images/orderpan.png') }}">
                        <div class="com-divp">
                            <h4 class="name-availability-search mt-2"style="color: black;">Name Availability Search</h4>
                            <p class="complete"style="color: black;">Pending</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="notification-panel shadow">
                        <div class="notification-header">
                            <h6 class="mb-0">Notification</h6>
                            <input type="text" id="currentDateTime" class="form-control form-control-sm w-auto text-end" readonly>
                        </div>
                        <div class="notification-list">
                            <div class="notification-item">
                                <div>
                                <div>Lorem Ipsum is simply dummy text of the</div>
                                <div class="timestamp">5 Minutes ago</div>
                                </div>
                                <div class="bell-icon">
                                🔔
                                </div>
                            </div>
                            <div class="notification-item">
                                <div>
                                <div>Lorem Ipsum is</div>
                                <div class="timestamp">Yesterday, 12:30 PM</div>
                                </div>
                                <div class="bell-icon">
                                🔔
                                </div>
                            </div>
                            <div class="notification-item">
                                <div>
                                <div>Lorem Ipsum is simply dummy</div>
                                <div class="timestamp">2 Days ago</div>
                                </div>
                                <div class="bell-icon">
                                🔔
                                </div>
                            </div>
                        <!-- Scrollable extra notifications -->
                            <div class="notification-item">
                                <div>
                                <div>New user registration complete</div>
                                <div class="timestamp">3 Days ago</div>
                                </div>
                                <div class="bell-icon">
                                🔔
                                </div>
                            </div>
                            <div class="notification-item">
                                <div>
                                <div>Your profile was viewed</div>
                                <div class="timestamp">4 Days ago</div>
                                </div>
                                <div class="bell-icon">
                                🔔
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-4">
                    <img class="getbus" src="{{ asset('assets/images/getbus.png') }}" alt="">
                </div>
            </div>
        </div>

            


@endsection

@push('script')
    <script>
        function triggerDownload(element) {
        const link = element.querySelector('.download-link');
        link.click();
        }
    </script>
    <script>
        function updateDateTime() {
        const now = new Date();
        const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
        const formattedDate = now.toLocaleDateString('en-US', options);
        const time = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
        document.getElementById('currentDateTime').value = `${formattedDate}, ${time}`;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
@endpush
