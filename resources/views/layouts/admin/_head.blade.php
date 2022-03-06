<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<title>{{ $title ?? config('app.name') }}</title>
<!-- icons -->
<link href="{{ asset('assets/admin/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
      type="text/css"/>
<link href="{{ asset('assets/admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
      type="text/css"/>
<!--bootstrap -->
<link href="{{ asset('assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
      type="text/css"/>
<!-- Material Design Lite CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/assets/plugins/material/material.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/assets/css/material_style.css') }}">
<!-- animation -->
<link href="{{ asset('assets/admin/assets/css/pages/animate_page.css') }}" rel="stylesheet">
<!-- Template Styles -->
<link href="{{ asset('assets/admin/assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/assets/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/assets/css/theme-color.css') }}" rel="stylesheet" type="text/css"/>
<!-- sweet alert -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css"/>

@stack('css')
<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('assets/admin/assets/img/bangladesh.ico') }}"/>

