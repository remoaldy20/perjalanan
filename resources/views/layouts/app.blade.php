<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    @if(Auth::user()->role == "user")
        <title> Peduli Diri | Perjalanan</title>
    @endif
    @if(Auth::user()->role == "admin")
        <title> Peduli Diri | Admin</title>
    @endif
    
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicons/favicons.png') }}">
    <link rel="manifest" href="{{ asset('admin/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('admin/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('admin/css/theme.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><img src="{{ asset('admin/img/logopd.png') }}" height="65" alt="logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                    </ul>
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="/dashboard">Dashboard</a></div>
                    @if(Auth::user()->role == "admin")
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="/admin/index">Data User</a></div>
                    @endif
                    @if(Auth::user()->role == "user")
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="/perjalanan">Perjalanan</a></div>
                    @endif
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="/profile/{{auth()->user()->id}}">Profile</a></div>
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="/logout">Log Out</a></div>
                </div>
        </nav>
        <section class="pt-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center py-6" style="overflow: hidden">
                          @yield('content')
                    </div>
                    <div class="col-md-5 text-end">
                        <img class="pt-7 pt-md-0 img-fluid" src="{{ asset('admin/img/Journey-bro.svg') }}" alt="hero-header" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
        <script src="{{ asset('admin/@popperjs/popper.min.js') }}"></script>
        <script src="{{ asset('admin/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/is/is.min.js') }}"></script>
        <script src="{{ asset('admin/https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
        <script src="{{ asset('admin/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('admin/js/theme.js') }}"></script>
        <link href="{{ asset('admin/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap') }}" rel="stylesheet">
</body>
</html>
