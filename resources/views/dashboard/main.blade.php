<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="{{ asset('img/logo.jpg') }}">
    <title>{{ $title }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/owlcarousel2/dist/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/owlcarousel2/dist/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('LoginAssets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('LoginAssets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('LoginAssets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('LoginAssets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('LoginAssets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('dashboard.navbar')
            <div class="main-sidebar sidebar-style-2">
                @include('dashboard.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('maincontent')
            </div>
            <footer class="main-footer">
                @include('dashboard.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('LoginAssets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/popper.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('LoginAssets/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <script src="{{ asset('LoginAssets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('LoginAssets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('LoginAssets/modules/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('LoginAssets/js/page/index.js') }}"></script>
    <script src="{{ asset('LoginAssets/js/page/modules-datatables.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('LoginAssets/js/scripts.js') }}"></script>
    <script src="{{ asset('LoginASsets/js/custom.js') }}"></script>
</body>

</html>
