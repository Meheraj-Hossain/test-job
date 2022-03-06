<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test job</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/admin/login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    @csrf
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-33">
						Account Login
					</span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required placeholder="Enter email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password" placeholder="Enter password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger" style="margin-top: 15px">
                        {{$errors->first()}}
                    </div>
                @endif
                <div class="container-login100-form-btn m-t-20">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="text-center p-t-45 p-b-4">
                </div>

                <div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

                    <a href="{{ route('register') }}" class="txt2 hov1">
                        Sign up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('assets/admin/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/admin/login/js/main.js')}}"></script>
</body>
</html>
