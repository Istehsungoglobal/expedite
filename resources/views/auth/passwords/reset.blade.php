@extends('auth.app')

@section('title', 'Create New Password')
@section('meta_description', 'Create a new password for your ' . setting('app_name') . ' account')
@section('meta_keywords', 'reset password, create new password, ' . setting('app_name') . ', account security')
@section('meta_robots', 'noindex, nofollow')

@section('auth_content')
    <h2 class="auth-title text-center">Create New Password</h2>
    <p class="text-center text-muted mb-4">Please create a strong password for your account</p>

    <!-- Password Reset Form -->
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <div class="pwdMask">
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" placeholder="Enter new password" required>
                <i class="fa-regular fa-eye-slash pwd-toggle"></i>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <small class="form-text text-muted">
                Password must be at least 8 characters long
            </small>
        </div>

        <div class="mb-4">
            <label for="password-confirm" class="form-label">Confirm New Password</label>
            <div class="pwdMask">
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" placeholder="Confirm new password" required>
                <i class="fa-regular fa-eye-slash pwd-toggle"></i>
            </div>
        </div>

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-lock me-2"></i>Reset Password
            </button>
        </div>

        <div class="text-center">
            <a href="{{ route('login') }}" class="login-link">
                <i class="fas fa-arrow-left me-1"></i> Back to Login
            </a>
        </div>
    </form>
@endsection
