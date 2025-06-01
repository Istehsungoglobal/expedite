@extends('auth.app')

@section('title', 'Register')
@section('meta_description', 'Register to ' . setting('app_name') . ' - Create your account today')
@section('meta_keywords', 'register, sign up, create account, ' . setting('app_name') . ', user registration')

@section('auth_content')
    <h2 class="auth-title text-center">Create Account</h2>
    <p class="text-center text-muted mb-4">Sign up to get started</p>

    <!-- Registration Form -->
    <form class="signupForm" action="{{route('register')}}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{old('name')}}"
                   placeholder="Enter your full name" required autofocus>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                   name="username" value="{{old('username')}}"
                   placeholder="Choose a username" required>
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{old('email')}}"
                   placeholder="Enter your email address" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="pwdMask">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" placeholder="Create a password" required>
                <i class="fa-regular fa-eye-slash pwd-toggle"></i>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <div class="pwdMask">
                <input type="password" id="password_confirmation" class="form-control"
                       name="password_confirmation" placeholder="Confirm your password" required>
                <i class="fa-regular fa-eye-slash pwd-toggle"></i>
            </div>
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

        <div class="form-group mb-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label term-policy" for="terms">
                    I agree to the <a href="/pp" target="_blank">privacy policy</a> and <a href="/tos" target="_blank">terms of service</a>
                </label>
            </div>
        </div>

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">Create Account</button>
        </div>
    </form>

    <!-- Login Link -->
    <div class="text-center">
        <p class="mb-0">Already have an account?
            <a href="{{route('login')}}" class="login-link">Sign in</a>
        </p>
    </div>
@endsection

@section('header_scripts')
    {!! NoCaptcha::renderJs() !!}
@endsection
