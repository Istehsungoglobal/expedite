@extends('auth.app')

@section('title', 'Reset Password')
@section('meta_description', 'Reset your password for ' . setting('app_name') . ' - Securely recover your account')
@section('meta_keywords', 'reset password, forgot password, password recovery, ' . setting('app_name') . ', account recovery')
@section('meta_robots', 'noindex, nofollow')

@section('auth_content')
    <h2 class="auth-title text-center">Reset Password</h2>
    <p class="text-center text-muted mb-4">Enter your email to receive a password reset link</p>

    @if (session('status'))
        <div class="alert alert-success mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('status') }}
        </div>
    @endif

    <!-- Password Reset Email Form -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        @if(setting('captcha'))
        <div class="mb-3">
            {!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <div class="text-danger mt-1">
                    {{ $errors->first('g-recaptcha-response') }}
                </div>
            @endif
        </div>
        @endif

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane me-2"></i>Send Reset Link
            </button>
        </div>

        <div class="text-center">
            <a href="{{ route('login') }}" class="login-link">
                <i class="fas fa-arrow-left me-1"></i> Back to Login
            </a>
        </div>
    </form>
@endsection
