@extends('layouts.app')
@section('title', 'User Profile')

@push('style')

<style>
   .profile-card {
      width:80%;
      margin: auto;
      background-color: #fff;
      border: 1px solid #eee;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 8px rgba(0,0,0,0.03);
    }

    .profile-header {
      background-color: #fafafa;
      padding: 12px 20px;
      font-weight: 500;
      font-size: 15px;
      border-bottom: 1px solid #eee;
    }

    .profile-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      border-bottom: 1px solid #eee;
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .user-info img {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      object-fit: cover;
    }

    .user-info .name {
      font-weight: 600;
      font-size: 16px;
    }

    .edit-btn {
      font-size: 13px;
      padding: 4px 12px;
    }

    .profile-body {
      padding: 20px 30px;
    }

    .info-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 12px;
    }

    .info-label {
      font-weight: 500;
      color: #555;
    }

    .info-value {
      font-weight: 500;
      color: #000;
      text-align: right;
    }

    .info-value.password {
      font-family: 'Courier New', Courier, monospace;
      letter-spacing: 2px;
    }

    @media (max-width: 576px) {
      .info-row {
        flex-direction: column;
        gap: 4px;
      }

      .info-value {
        text-align: left;
      }
    }
    .profile-header {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 16px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 600px;
      margin: 0 auto;
    }

    .modal-content {
      border-radius: 16px;
    }

    .avatar-container {
        
      margin-top: 15px;
    }

    .avatar-container img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #eee;
      position: relative;
    }

    .edit-icon {
      position: absolute;
      left:7%;
      bottom: 0px;
      margin-top: -2px;
      background: #ff5a1f;
      color: white;
      font-size: 12px;
      padding: 4px;
      border-radius: 50%;
      border: 2px solid #fff;
    }

    .form-label {
      font-size: 13px;
      font-weight: 500;
      color: #333;
    }

    .form-control, .form-select {
      font-size: 14px;
      padding: 10px;
    }

    .password-toggle {
      position: absolute;
        right: 11px;
        top: 72%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #999;

    }

    .modal-footer {
      border-top: none;
    }

    .save-btn {
      background-color: #ff5a1f;
      border: none;
      padding: 8px 20px;
      font-size: 14px;
    }

    .save-btn:hover {
      background-color: #e14a12;
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
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">User Information</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="profile-card">
  <div class="profile-header">My Profile</div>
  <div class="profile-top">
    <div class="user-info">
      <img src="https://i.pravatar.cc/100?img=12" alt="User Avatar">
      <div class="name">Jhon Wick</div>
    </div>
    <button class="btn btn-outline-secondary edit-btn" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit</button>
  </div>
  <div class="profile-body">
    <div class="info-row">
      <div class="info-label">Email:</div>
      <div class="info-value">mirajhon@gmail.com</div>
    </div>
    <div class="info-row">
      <div class="info-label">Phone:</div>
      <div class="info-value">+88014517522</div>
    </div>
    <div class="info-row">
      <div class="info-label">Country of Residence:</div>
      <div class="info-value">USA</div>
    </div>
    <div class="info-row">
      <div class="info-label">Timezone:</div>
      <div class="info-value">USA</div>
    </div>
    <div class="info-row">
      <div class="info-label">Password:</div>
      <div class="info-value password">********</div>
    </div>
  </div>
</div>


<div class="modal fade" id="editProfileModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0 pb-0">
        <h6 class="modal-title">My Profile</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form>
        <div class="modal-body pt-0 px-4">
          <div class="avatar-container position-relative">
            <img src="https://i.pravatar.cc/100?img=12" alt="User Avatar">
            <span class="edit-icon"><i class="fas fa-camera"></i></span>
          </div>

          <div class="row mt-4 g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" value="Jhon Wick">
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" value="nurency@example.com">
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="+880" style="max-width: 100px;">
                    <input type="text" class="form-control" placeholder="123456789">
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Country Of Residence</label>
                <select id="countrySelect" class="form-select"></select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Timezone</label>
                <select id="timezone" class="form-select"></select>
            </div>
            <div class="col-md-6 position-relative">
              <label class="form-label">Password</label>
              <input type="password" id="passField" class="form-control" value="password123">
              <button type="button" class="password-toggle" onclick="togglePassword()">
                <i class="fas fa-eye-slash"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="modal-footer justify-content-end px-4 pb-4">
          <button type="submit" class="btn text-white save-btn">Save Change</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection



@push('script')
    <script>
        function togglePassword() {
            const input = document.getElementById('passField');
            const icon = event.currentTarget.querySelector('i');
            if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
            input.type = 'password';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
            }
        }
    </script>
    <script>
        const timezoneSelect = document.getElementById("timezone");

        const timezones = Intl.supportedValuesOf
            ? Intl.supportedValuesOf("timeZone")
            : [ // fallback list if browser doesn't support it
            "UTC", "America/New_York", "Europe/London", "Asia/Kolkata", "Asia/Dhaka", "Asia/Tokyo", 
            "America/Los_Angeles", "Europe/Berlin", "Africa/Johannesburg", "Australia/Sydney"
            ];

        const currentZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

        timezones.forEach(zone => {
            const option = document.createElement("option");
            option.value = zone;
            option.textContent = zone;
            if (zone === currentZone) {
            option.selected = true;
            }
            timezoneSelect.appendChild(option);
        });
    </script>
    <script>
        const countries = [
            { code: "US", name: "United States" },
            { code: "GB", name: "United Kingdom" },
            { code: "CA", name: "Canada" },
            { code: "BD", name: "Bangladesh" },
            { code: "IN", name: "India" },
            { code: "DE", name: "Germany" },
            { code: "FR", name: "France" },
            { code: "JP", name: "Japan" },
            { code: "AU", name: "Australia" },
            { code: "ZA", name: "South Africa" },
            { code: "AE", name: "United Arab Emirates" },
            { code: "SG", name: "Singapore" },
            { code: "NG", name: "Nigeria" },
            { code: "BR", name: "Brazil" },
            { code: "TR", name: "Turkey" }
            // Add more as needed
        ];

        const userLocale = Intl.DateTimeFormat().resolvedOptions().locale;
        const guessedCountry = userLocale.split("-")[1] || "US"; // Fallback to US

        const countrySelect = document.getElementById("countrySelect");

        countries.forEach(country => {
            const option = document.createElement("option");
            option.value = country.code;
            option.textContent = country.name;
            if (country.code === guessedCountry.toUpperCase()) {
            option.selected = true;
            }
            countrySelect.appendChild(option);
        });
    </script>
@endpush
