
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>National Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login_style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>
<body class="login-bg-wrapper">
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5 shadow-sm">
                        <div class="brand-logo text-center text-primary mb-2">
                            <h1>জাতীয় ড্যাশবোর্ড</h1>
                        </div>
                        <h6 class="text-center mb-4">লগইনের জন্য আপনার আইডি এবং পাসওয়ার্ড লিখুন</h6>
                        <form class="pt-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">ইউজার আইডি</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="ইউজার আইডি" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                                <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ইউজার আইডি" name="username" required> -->
                            </div>
                            <div class="form-group mb-1">
                                <label for="exampleInputPassword1">পাসওয়ার্ড</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="পাসওয়ার্ড" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                                <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="পাসওয়ার্ড" name="password" required> -->
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input"> সাইন ইন রাখুন </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="auth-link text-black" href="{{ route('password.request') }}">
                                        {{ __('পাসওয়ার্ড ভুলে গেছেন?') }}
                                    </a>
                            @endif
                            <!-- <a href="#" class="auth-link text-black">পাসওয়ার্ড ভুলে গেছেন?</a> -->
                            </div>
                            <button type="submit" class="btn btn-primary" name="login" >প্রবেশ</button>
                        </form>
                    </div>
                    <p class="powered-by mt-5 mb-2 text-center">Powered by <img src="{{ asset('assets/images/egeneration.png') }}" alt="egeneration-logo"></p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<!-- endinject -->
</body>
</html>
