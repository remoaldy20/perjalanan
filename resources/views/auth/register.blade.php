<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicons/favicons.png')}}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Register</title>
    <style>
        .btn.btn-primary {
        background: #DF6951 !important;
        border: 1px solid #DF6951 !important;
        color: #fff !important;
        }
    

        a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        color: #DF6951;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Silahkan Register Terlebih Dahulu !</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(/assets/images/sign-up.svg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>
                            <form action="/postregister" method="post" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" name="nik" class="form-control" autocomplete="off" placeholder="Nik(16 digit)" maxlength="16" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" placeholder="Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password_confirmation" class="form-control" autocomplete="off" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Sudah Melakukan Register ?<a href="/login"> Back to sign-in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
