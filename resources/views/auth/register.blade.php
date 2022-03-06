<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Test job</title>

    <!-- Icons font CSS-->
    <link href="{{asset('assets/admin/registration/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin/registration/vendor/font-awesome-4.7/css/font-awesome.min.csss')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/admin/registration/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('assets/admin/registration/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/admin/registration/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        @if(session()->has('message'))
            <div class="alert alert-success" style="font-weight: bold">
                {{session('message')}}
            </div>
        @endif
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Registration Form</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('user.registration')}}">
                    @csrf
                    <div class="form-row">
                        <div class="name">User name</div>
                        <div class="value">
                            <div class="row row-space">
                                <input class="input--style-5" type="text"  name="user_name" value="{{old('user_name')}}" placeholder="Enter user name" >
                            </div>
                            @error('user_name')
                            <div class="alert alert-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="email" value="{{old('email')}}" placeholder="Enter email">
                                @error('email')
                                <div class="alert alert-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">City</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="city" value="{{old('city')}}" placeholder="Enter city">
                            </div>
                            @error('city')
                            <div class="alert alert-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Country</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="country" value="{{old('country')}}" placeholder="Enter country">
                            </div>
                            @error('country')
                            <div class="alert alert-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Date of Birth</div>
                        <div class="value">
                            <div class="input-group" >
                                <input class="input--style-5" type="date" name="date_of_birth" value="{{old('date_of_birth')}}" >
                            </div>
                            @error('date_of_birth')
                            <div class="alert alert-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="password" placeholder="Enter password">
                            </div>
                            @error('password')
                            <div class="alert alert-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Retype password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="retype_password" placeholder="Confirm password">
                            </div>
                            @error('retype_password')
                            <div class="alert alert-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        <h5 style="float: right;margin-top: 25px">Already an <a href="{{ route('login') }}" style="text-decoration: none;color: blue">user</a>?</h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->

<script src="{{asset('assets/admin/registration/vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('assets/admin/registration/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/registration/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/registration/vendor/datepicker/daterangepicker.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('assets/admin/registration/js/global.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
