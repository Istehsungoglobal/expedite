<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO Meta Tags -->
        <meta name="description" content="@yield('meta_description', 'Authentication - '.setting('app_name'))">
        <meta name="keywords"
            content="@yield('meta_keywords', 'authentication, login, register, '.setting('app_name'))">
        <meta name="author" content="{{url('/')}}">
        <meta name="robots" content="@yield('meta_robots', 'index, follow')">

        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="@yield('title', 'Authentication') | {{setting('app_name')}}">
        <meta property="og:description" content="@yield('meta_description', 'Authentication - '.setting('app_name'))">
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{logo()}}">

        <title>@yield('title', 'Authentication') | {{setting('app_name')}}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="{{loadFile(setting('favicon'))}}">
        <link rel="apple-touch-icon" href="{{loadFile(setting('favicon'))}}">

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('plugins/noty/noty.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/noty/themes/relax.css')}}">

        @yield('header_scripts')

        <style>
            :root {
                /* Primary Colors */
                --primary-color: #a81d81;
                --primary-color-dark: #54237d;
                --primary-color-light: rgba(168, 29, 129, 0.15);
                --primary-color-hover: rgba(168, 29, 129, 0.1);

                /* Background Colors */
                --bg-light: #f8f9fa;
                --bg-white: #ffffff;

                /* Text Colors */
                --text-dark: #333;
                --text-muted: #6c757d;

                /* Border Colors */
                --border-color: #ced4da;
                --border-color-light: #dee2e6;

                /* Social Media Colors */
                --facebook-color: #3b5998;
                --twitter-color: #1DA1F2;
                --google-color: #DB4437;
                --github-color: #24292e;

                /* Utility Colors */
                --shadow-color: rgba(0, 0, 0, 0.1);
                --shadow-color-dark: rgba(0, 0, 0, 0.15);
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: var(--bg-light);
                min-height: 100vh;
                display: flex;
                align-items: center;
            }

            .auth-section {
                background: linear-gradient(135deg, var(--primary-color), var(--primary-color-dark));
                min-height: 100vh;
                display: flex;
                align-items: center;
                width: 100%;
                padding: 2rem 0;
            }

            .auth-card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 10px 25px var(--shadow-color-dark);
                overflow: hidden;
                transition: all 0.3s;
                background-color: var(--bg-white);
                margin-bottom: 2rem;
            }

            .brand-logo {
                margin-bottom: 1.5rem;
            }

            .auth-title {
                font-weight: 700;
                color: var(--text-dark);
                margin-bottom: 1.5rem;
            }

            .form-control {
                height: 50px;
                border-radius: 5px;
                padding-left: 15px;
                font-size: 15px;
                border: 1px solid var(--border-color);
                transition: all 0.3s;
            }

            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.25rem var(--primary-color-light);
            }

            .btn-primary {
                background: linear-gradient(135deg, var(--primary-color), var(--primary-color-dark));
                border: none;
                border-radius: 5px;
                padding: 12px;
                font-weight: 500;
                transition: all 0.3s;
            }

            .btn-primary:hover {
                background: linear-gradient(135deg, var(--primary-color-dark), var(--primary-color));
                transform: translateY(-2px);
                box-shadow: 0 5px 15px var(--shadow-color);
            }

            .btn-outline {
                color: var(--primary-color);
                background: transparent;
                border: 1px solid var(--primary-color);
                border-radius: 5px;
                padding: 12px;
                font-weight: 500;
                transition: all 0.3s;
            }

            .btn-outline:hover {
                background: var(--primary-color-hover);
                color: var(--primary-color-dark);
            }

            .social-buttons .btn {
                margin-bottom: 10px;
                height: 45px;
                border-radius: 5px;
                font-size: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 5px var(--shadow-color);
                transition: all 0.3s;
            }

            .btn-facebook {
                background-color: var(--facebook-color);
                color: var(--bg-white);
            }

            .btn-twitter {
                background-color: var(--twitter-color);
                color: var(--bg-white);
            }

            .btn-google {
                background-color: var(--google-color);
                color: var(--bg-white);
            }

            .btn-github {
                background-color: var(--github-color);
                color: var(--bg-white);
            }

            .social-buttons .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px var(--shadow-color);
            }

            .separator {
                display: flex;
                align-items: center;
                text-align: center;
                margin: 1.5rem 0;
                color: var(--text-muted);
            }

            .separator::before,
            .separator::after {
                content: '';
                flex: 1;
                border-bottom: 1px solid var(--border-color);
            }

            .separator::before {
                margin-right: 1rem;
            }

            .separator::after {
                margin-left: 1rem;
            }

            .form-check-input:checked {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .pwd-toggle {
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
                color: var(--text-muted);
            }

            .auth-link,
            .forgot-link,
            .register-link,
            .login-link {
                color: var(--primary-color);
                text-decoration: none;
                transition: all 0.3s;
            }

            .auth-link:hover,
            .forgot-link:hover,
            .register-link:hover,
            .login-link:hover {
                color: var(--primary-color-dark);
                text-decoration: underline;
            }

            .pwdMask {
                position: relative;
            }

            .term-policy {
                font-size: 14px;
            }

            .term-policy a {
                color: var(--primary-color);
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s;
            }

            .term-policy a:hover {
                text-decoration: underline;
                color: var(--primary-color-dark);
            }

            .alert {
                border-radius: 5px;
                font-size: 14px;
            }

            .shield-icon,
            .email-icon {
                font-size: 3.5rem;
                color: var(--primary-color);
                margin-bottom: 1.5rem;
            }

            .nav-tabs {
                border-bottom: 1px solid var(--border-color-light);
                margin-bottom: 1.5rem;
            }

            .nav-tabs .nav-link {
                color: var(--text-muted);
                border: none;
                border-bottom: 2px solid transparent;
                padding: 0.5rem 1rem;
                margin-right: 1rem;
                font-weight: 500;
                transition: all 0.3s;
            }

            .nav-tabs .nav-link:hover {
                color: var(--primary-color);
                border-color: transparent;
            }

            .nav-tabs .nav-link.active {
                color: var(--primary-color);
                background-color: transparent;
                border-color: transparent transparent var(--primary-color);
            }

            .auth-note {
                font-size: 0.875rem;
                color: var(--text-muted);
                margin-top: 1rem;
            }

            /* Custom styling for specific pages */
        </style>
        @yield('custom_styles')
    </head>

    <body>
        <section class="auth-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 col-sm-10">
                        <div class="auth-card card p-4">
                            <div class="card-body @yield('card_body_class')">
                                <!-- Logo -->
                                <div class="text-center brand-logo">
                                    <a href="{{url('/')}}" aria-label="{{setting('app_name')}} Home">
                                        <img src="{{logo()}}"
                                            alt="{{setting('app_name')}} Logo" class="img-fluid"
                                            style="max-width: 220px;">
                                    </a>
                                </div>

                                @yield('auth_content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('plugins/noty/noty.min.js') }}"></script>

        <script>
            // Password toggle visibility functionality
        $(document).ready(function() {
            $('.pwd-toggle').on('click', function() {
            var input = $(this).closest('.pwdMask').find('input');
            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                $(this).removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                input.attr('type', 'password');
                $(this).removeClass('fa-eye').addClass('fa-eye-slash');
            }
            });
        });

        // Error notifications
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                new Noty({
                    text: '{{$error}}',
                    type: 'error',
                    theme: 'relax',
                    timeout: 3000,
                    progressBar: true,
                    layout: 'topRight'
                }).show();
            @endforeach
        @endif

        @if (session('error'))
            new Noty({
                text: '{{session("error")}}',
                type: 'error',
                theme: 'relax',
                timeout: 3000,
                progressBar: true,
                layout: 'topRight'
            }).show();
        @endif

        @if (session('status'))
            new Noty({
                text: '{{session("status")}}',
                type: 'success',
                theme: 'relax',
                timeout: 3000,
                progressBar: true,
                layout: 'topRight'
            }).show();
        @endif
        </script>
        @yield('footer_scripts')
    </body>

</html>
