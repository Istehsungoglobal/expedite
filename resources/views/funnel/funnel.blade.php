
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'My Laravel App')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/funnel/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/funnel/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/funnel/brands.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/css/funnel/normalize.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ url('assets/images/funnel/favicon.svg') }}">
  @stack('styles')
</head>
<body>
    <div class="container">
        @include('funnel.partials.navbar')
        

        <main class="py-4">
            @yield('content')
        </main>

        

    </div>

    <script src="{{ asset('assets/js/funnel/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/funnel/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/js/funnel/popper.min.js') }}"></script>
    
    @stack('scripts')

</body>
</html>
