<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Derry W - Web SPK Karyawan">
    <meta name="author" content="Derry W">
    <meta name="keyword" content="Skripsi : Aplikasi berbasis Website dengan menggunakan metode TOPSIS">

    @yield('title')

    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/table.scss') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('modular_admin/css/vendor.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?version=1.0.2">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    @include('layouts.module.header')

    <div class="app-body" id="dw">
        <div class="sidebar">

            @include('layouts.module.sidebar')
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        @yield('content')
        {{-- <script src="{{ asset('modular_admin/js/vendor.js') }}"></script> --}}
    </div>
    <footer class="app-footer" style="align-content: center">
        <div class="footer-block author" style="align-items: center">
            <div>
                UNIVERSITAS KRISNADWIPAYANA | {{ date('Y') }}
            </div>
            <div>
                Created by : Deri Wahidin 1670231068
            </div>
        </div>
    </footer>
    {{-- <script src="{{ asset('modular_admin/js/app.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-tooltips.min.js') }}"></script>

    @yield('js')

</body>

</html>
