<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="_token" content="{{ csrf_token() }}">

  <!-- <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."> -->
  <!-- <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app"> -->
  <meta name="author" content="PIXINVENT">
  <title>Login EnviaJus</title>
  <link rel="shortcut icon" href="{{asset('assets/img/9620novo-logo-envia.ico')}}" />
  <link rel="apple-touch-icon" href="{{asset('assets/img/9620novo-logo-envia.ico')}}" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/feather/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/pace.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/icheck/icheck.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/icheck/custom.css')}}"> -->
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}"> -->
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/login-register.css')}}"> -->
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/pace.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/extensions/toastr.css')}}"> -->

  <!-- END Custom CSS-->
  <!-- <script src="{{asset('/assets/js/build.js')}}"></script> -->

  <title>Sistema de Controle de Matriculas</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- <link href="{{ asset('js/vue.js') }}" rel="stylesheet" type="text/css" /> -->

</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="{{ asset('js/vue.js') }}" type="text/js"></script>
  <script src="{{ asset('js/vue.min.js') }}" type="text/js"></script>


</body>
</html>
