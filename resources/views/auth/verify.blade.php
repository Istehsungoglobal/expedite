@extends('auth.app')

@section('title', 'Verify Email')
@section('meta_description', 'Verify your email address for ' . setting('app_name') . ' - Complete your registration')
@section('meta_keywords', 'verify email, email verification, ' . setting('app_name') . ', account verification')
@section('meta_robots', 'noindex, nofollow')

@section('card_body_class', 'text-center')

@section('auth_content')
    <div class="email-icon">
        <i class="fas fa-envelope-open-text"></i>
    </div>

    <h2 class="auth-title">Verify Your Email Address</h2>

    @if (session('resent'))
        <div class="alert alert-success mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>A fresh verification link has been sent to your email address.
        </div>
    @endif

    <p class="mb-4">
        Before proceeding, please check your email for a verification link.
        If you did not receive the email, click the button below to request another.
    </p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane me-2"></i>Resend Verification Email
            </button>
        </div>
    </form>

    <div class="mt-3">
        <a href="{{ route('logout') }}" class="btn-link"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           <i class="fas fa-sign-out-alt me-1"></i> Sign out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
@endsection
