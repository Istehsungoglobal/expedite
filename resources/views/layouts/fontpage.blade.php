<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedite</title>
    <!--css file-->
    <link rel="stylesheet" href="{{asset('assets/css/funnel/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/brands.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/funnel/normalize.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap" />


    <link rel="stylesheet" href="{{asset('assets/css/funnel/style.css')}}">
    <link rel="icon" type="image/x-icon" href="{{url('assets/images/funnel/favicon.svg')}}">
    @stack('styles')
</head>
<body>
    @include('layouts.fontendpart.navbar')

    

    @yield('content')
    


    @include('layouts.fontendpart.footer')

    @stack('scripts')
    <!--js file-->
    <script src="{{asset('assets/js/funnel/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/funnel/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/funnel/brands.min.js')}}"></script>
    <script src="{{asset('assets/js/funnel/fontawesome.min.js')}}"></script>
    <script src="{{asset('assets/js/funnel/script.js')}}"></script>
    <script src="{{asset('assets/js/funnel/popper.min.js')}}"></script>

    <script>
        const slider = document.querySelector('#serviceSlider');
          const carousel = new bootstrap.Carousel(slider, {
            interval: 4000,  // 4 seconds
            ride: 'carousel'
          });
    </script>
</body>
</html>
