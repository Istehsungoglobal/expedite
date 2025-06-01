@extends('layouts.app')
@section('title', 'Notification')

@push('style')
<style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    .rectangle-div {
        width: 100%;
        position: relative;
        border-radius: 12px;
        background-color: #fff;
        border: 1px solid rgba(141, 141, 141, 0.25);
        box-sizing: border-box;
        height: 769px;
    }
    .notification-item {
        transition: all 0.3s ease;
    }
    .notification-item:hover {
        background-color: #f8f9fa;
    }
    .lorem-ipsum-is-simply {
        align-self: stretch;
        position: relative;
    }
    .minutes-ago {
        align-self: stretch;
        position: relative;
        font-size: 10px;
        color: #4b4b4b;
    }
    .lorem-ipsum-is-simply-dummy-te-parent {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 6px;
        font-family: Inter;
    }
    .notification-child {
        width: 68px;
        height: 24px;
    }
    .notification-parent {
        width: 100%;
        position: relative;
        border-radius: 6px;
        background-color: rgba(141, 141, 141, 0.02);
        border:0.5px solid rgb(141 141 141 / 33%);
        box-sizing: border-box;
        height: 60px;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        padding: 12px 16px;
        gap: 95px;
        text-align: left;
        font-size: 15px;
        color: #080808;
        font-family: Inter;
    }
    .notification-item {
    transition: all 0.3s ease;
    }
    .notification-item:hover {
        background-color: #f8f9fa;
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
                            <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Notification</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rectangle-div" style="border: .5px solid #0000002b;border-radius: 15px;">

        @php
            use Carbon\Carbon;
            $displayLimit = 10;
        @endphp

        <div class="container mt-3" >
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">Notification</h5>
                <small class="text-muted">{{ \Carbon\Carbon::now()->format('l, d M Y') }}</small>
            </div>

            <div id="notificationList" style="width: 100%">
                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>
                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>
                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>

                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>
                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>
                
                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>

                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>

                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>

                <div class="notification-parent mt-2">
                    <div class="lorem-ipsum-is-simply-dummy-te-parent">
                        <div class="lorem-ipsum-is-simply">Lorem Ipsum is simply dummy text of the </div>
                        <div class="minutes-ago">5 Minutes ago</div>
                    </div>
                    <img class="notification-child" alt="" src="{{ url('assets/images/backend/notification.svg') }}">
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-link" id="seeAllNotifications">See All Notification</button>
            </div>
           
        </div>

    </div>
    </div>
    





@endsection

@push('script')

<script>
document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById('seeAllNotifications');
    if (btn) {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.extra-notification').forEach(item => {
                item.classList.remove('d-none');
            });
            btn.remove(); // remove button after expansion
        });
    }
});
</script>


@endpush
