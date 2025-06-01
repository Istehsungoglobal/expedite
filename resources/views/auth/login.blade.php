@extends('auth.app')

@section('title', 'Login')
@section('meta_description', 'Login to ' . setting('app_name') . ' - Access your account securely')
@section('meta_keywords', 'login, sign in, secure access, account login, ' . setting('app_name') . ', user authentication')

@section('auth_content')
    <h2 class="auth-title text-center">Welcome Back</h2>
    <p class="text-center text-muted mb-4">Login to access your account</p>

    <!-- Social Login Buttons -->
    @if (setting('facebook_login_status') || setting('twitter_login_status') || setting('google_login_status') || setting('github_login_status'))
        <div class="row social-buttons justify-content-center">
            @if (setting('facebook_login_status') == 1)
            <div class="col-lg-6 col-sm-6">
                <a href="/login/facebook" class="btn btn-facebook w-100" aria-label="Login with Facebook">
                    <i class="fab fa-facebook-f me-2"></i> Facebook
                </a>
            </div>
            @endif

            @if (setting('twitter_login_status') == 1)
            <div class="col-lg-6 col-sm-6">
                <a href="/login/twitter" class="btn btn-twitter w-100" aria-label="Login with Twitter">
                    <i class="fab fa-twitter me-2"></i> Twitter
                </a>
            </div>
            @endif

            @if (setting('google_login_status') == 1)
            <div class="col-lg-6 col-sm-6">
                <a href="/login/google" class="btn btn-google w-100" aria-label="Login with Google">
                    <i class="fab fa-google me-2"></i> Google
                </a>
            </div>
            @endif

            @if (setting('github_login_status') == 1)
            <div class="col-lg-6 col-sm-6">
                <a href="/login/github" class="btn btn-github w-100" aria-label="Login with GitHub">
                    <i class="fab fa-github me-2"></i> GitHub
                </a>
            </div>
            @endif
        </div>

        <div class="separator">or continue with email</div>
    @endif

    <!-- Login Form -->
    <form class="loginForm" action="{{ route('login') }}" method="POST" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('username') ?: old('email') }}"
                   placeholder="Enter your email" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="pwdMask">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" placeholder="Enter your password" required>
                <i class="fa-regular fa-eye-slash pwd-toggle"></i>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
            </div>
            <div class="col-6 text-end">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>
                @endif
            </div>
        </div>

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
    </form>

    <!-- Registration Link -->
    <div class="text-center">
        <p class="mb-0">Don't have an account?
            <a href="{{ route('register') }}" class="register-link">Sign up</a>
        </p>
    </div>
@endsection

@section('header_scripts')
    {{-- {!! NoCaptcha::renderJs() !!} --}}
@endsection
