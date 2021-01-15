<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="pm/images/icon/favicon.ico" type="image/x-icon"/>
    <title>বাংলাদেশ (Bangladesh) জাতীয় ড্যাশবোর্ড | গণপ্রজাতন্ত্রী বাংলাদেশ সরকার | People's Republic of
        Bangladesh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="pm/images/icon/favicon.ico">
    <link rel="stylesheet" href="pm/css/bootstrap.min.css">
    <link rel="stylesheet" href="pm/css/font-awesome.min.css">
    <link rel="stylesheet" href="pm/css/themify-icons.css">
    <link rel="stylesheet" href="pm/css/metisMenu.css">
    <link rel="stylesheet" href="pm/css/owl.carousel.min.css">
    <link rel="stylesheet" href="pm/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
    <!-- others css -->
    <link rel="stylesheet" href="pm/css/typography.css">
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link rel="stylesheet" href="pm/css/default-css.css">
    <link rel="stylesheet" href="pm/css/styles.css">
    <link rel="stylesheet" href="pm/css/responsive.css">
    <!-- modernizr css -->
    <script src="pm/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .powered-by {
            font-weight: bold;
            margin-top: 5px;
            color: #444;
            font-size: 14px;
        }
        .form-gp input {
            width: 100%;
            height: 50px;
            border: none;
            border-bottom: 1px solid #e6e6e6;
        }
        .invalid-feedback {
            display: block;
        }
        .form-gp.focused label {
            top: -20px;
            color: #8cc63f;
        }
        .form-gp label {
            position: absolute;
            left: 0;
            top: 0;
            color: #b3b2b2;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            font-size: 20px;
            top: -15px;
        }
        .login-form-head {
            text-align: center;
            background: #a5489b;
            padding: 30px;
            border-radius: 10px 10px 0 0;
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        }
    </style>
</head>

<body>
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>জাতীয় ড্যাশবোর্ড</h4>
                    <p>লগইনের জন্য আপনার আইডি এবং পাসওয়ার্ড লিখুন</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">ইউজার আইডি</label>
                        <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}" required  autofocus>
                        <i class="ti-email"></i>
                        <div class="text-danger">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">পাসওয়ার্ড</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        <i class="ti-lock"></i>
                        <div class="text-danger">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">সাইন ইন রাখুন</label>
                            </div>
                        </div>

                        <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-pass">পাসওয়ার্ড ভুলে গেছেন?</a>
                            @endif
                        </div>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-success login-btn" name="login">প্রবেশ</button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <div class="d-flex justify-content-center bd-highlight mb-3">
                            <div class="p-2"><img src="pm/images/icon/a2i.png" alt="logo"></div>
                            <div class="p-2"><img src="pm/images/icon/cabinet-division.png" alt="logo"></div>
                            <div class="p-2"><img src="pm/images/icon/ict-division.png" alt="logo"></div>
                            <div class="p-2"><img src="pm/images/icon/undp-update.png" alt="logo"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="d-flex justify-content-center bd-highlight mb-3 powered-by">
                <div class="p-2">Powered by  <img src="{{asset('assets/images/egeneration.png')}}" alt="logo"></div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->

<!-- jquery latest version -->
<script src="pm/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="pm/js/popper.min.js"></script>
<script src="pm/js/bootstrap.min.js"></script>
<script src="pm/js/owl.carousel.min.js"></script>
<script src="pm/js/metisMenu.min.js"></script>
<script src="pm/js/jquery.slimscroll.min.js"></script>
<script src="pm/js/jquery.slicknav.min.js"></script>

<!-- others plugins -->
<script src="pm/js/plugins.js"></script>
<script src="pm/js/scripts.js"></script>
</body>

</html>
