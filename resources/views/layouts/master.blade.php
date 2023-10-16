<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>


    <link rel="icon" type="image/png" href="/img/logo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    @include('layouts.header')
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    {{-- @include('layouts.menubar') --}}
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            @yield('container')

        </div>
    </section>
    <!-- Featured Section End -->



    @include('layouts.footer')

    <!-- Js Plugins -->
    <script src="{{ asset('Assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('Assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('Assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('Assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Assets/js/main.js') }}"></script>



</body>

</html>
