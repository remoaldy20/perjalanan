<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title> Peduli Diri | Home</title>

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
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                    </ul>
                    <div class="d-flex ms-lg-4"><a class="btn btn-danger" href="/login">Sign In</a></div>
                </div>
            </div>
        </nav>
        <section class="pt-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center py-6">
                        <h1 class="mb-4 fs-9 fw-bold">Selamat Datang  <br>di Peduli Diri</h1>
                        <div class="text-center text-md-start"><a class="btn btn-danger me-3 btn-lg" href="/register" role="button">Sign Up</a></div>
                    </div>
                    <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid"
                            src="{{ asset('admin/img/Otw-bro.svg') }}" alt="" /></div>
                </div>
            </div>
        </section>
    </main>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('admin/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/is/is.min.js') }}"></script>
    <script src="{{ asset('admin/https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('admin/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/js/theme.js') }}"></script>

    <link
        href="{{ asset('admin/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap') }}"
        rel="stylesheet">
</body>

</html>
