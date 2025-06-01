@extends('auth.app')

@section('title', 'Confirm Password')
@section('meta_description', 'Confirm your password to continue - ' . setting('app_name'))
@section('meta_keywords', 'confirm password, security confirmation, ' . setting('app_name') . ', account security')
@section('meta_robots', 'noindex, nofollow')

@section('auth_content')
    <h2 class="auth-title text-center">Security Verification</h2>
    <p class="text-center text-muted mb-4">Please confirm your password before continuing</p>

    <!-- Confirm Password Form -->
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <div class="pwdMask">
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" placeholder="Enter your password" required autofocus>
                <i class="fa-regular fa-eye-slash pwd-toggle"></i>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-lock me-2"></i>Confirm Password
            </button>
        </div>

        <div class="text-center">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-link">
                    <i class="fas fa-question-circle me-1"></i> Forgot Your Password?
                </a>
            @endif
        </div>
    </form>
@endsection
