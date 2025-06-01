@extends('auth.app')

@section('title', 'Two-Factor Authentication')
@section('meta_description', 'Two-Factor Authentication for ' . setting('app_name') . ' - Enhanced security for your account')
@section('meta_keywords', 'two-factor authentication, 2FA, security, ' . setting('app_name') . ', account security')
@section('meta_robots', 'noindex, nofollow')

@section('auth_content')
    <div class="text-center mb-4">
        <div class="shield-icon">
            <i class="fas fa-shield-alt"></i>
        </div>
        <h2 class="auth-title">Two-Factor Authentication</h2>
        <p class="text-muted">Please confirm access to your account by entering the authentication code provided by your authenticator application or recovery code.</p>
    </div>

    <ul class="nav nav-tabs" id="authTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="code-tab" data-bs-toggle="tab" data-bs-target="#code"
                    type="button" role="tab" aria-controls="code" aria-selected="true">
                <i class="fas fa-key me-1"></i> Code
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="recovery-tab" data-bs-toggle="tab" data-bs-target="#recovery"
                    type="button" role="tab" aria-controls="recovery" aria-selected="false">
                <i class="fas fa-life-ring me-1"></i> Recovery Code
            </button>
        </li>
    </ul>

    <div class="tab-content" id="authTabContent">
        <!-- Authentication Code Tab -->
        <div class="tab-pane fade show active" id="code" role="tabpanel" aria-labelledby="code-tab">
            <form method="POST" action="{{ url('/two-factor-challenge') }}">
                @csrf

                <div class="mb-4">
                    <label for="code" class="form-label">Authentication Code</label>
                    <input id="code" type="text" inputmode="numeric" pattern="[0-9]*"
                           class="form-control @error('code') is-invalid @enderror"
                           name="code" autofocus autocomplete="one-time-code"
                           placeholder="Enter 6-digit code" maxlength="6">
                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-unlock-alt me-2"></i>Verify
                    </button>
                </div>

                <p class="auth-note text-center">
                    <i class="fas fa-info-circle me-1"></i>
                    Open your authenticator app to view your authentication code.
                </p>
            </form>
        </div>

        <!-- Recovery Code Tab -->
        <div class="tab-pane fade" id="recovery" role="tabpanel" aria-labelledby="recovery-tab">
            <form method="POST" action="{{ url('/two-factor-challenge') }}">
                @csrf

                <div class="mb-4">
                    <label for="recovery_code" class="form-label">Recovery Code</label>
                    <input id="recovery_code" type="text"
                           class="form-control @error('recovery_code') is-invalid @enderror"
                           name="recovery_code" autocomplete="one-time-code"
                           placeholder="Enter recovery code">
                    @error('recovery_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-unlock-alt me-2"></i>Verify
                    </button>
                </div>

                <p class="auth-note text-center">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    Recovery codes are single-use and should be stored securely.
                </p>
            </form>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('logout') }}" class="btn-link"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           <i class="fas fa-sign-out-alt me-1"></i> Sign out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
@endsection

@section('footer_scripts')
<script>
    // Auto-focus on code input
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('code').focus();

        // Input validation - only allow numbers for authentication code
        document.getElementById('code').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>
@endsection
