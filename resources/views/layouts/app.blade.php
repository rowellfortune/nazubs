<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>App Name - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title', 'Page Title')

         <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lib/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lib/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lib/icheck-bootstrap/icheck-bootstrap.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dir/css/adminlte.min.css')}}" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lib/overlayScrollbars/css/OverlayScrollbars.min.css')}}" rel="stylesheet">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lib/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lib/summernote/summernote-bs4.css')}}" rel="stylesheet">

  <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body>
      <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
         
        <!-- /.navbar -->
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
      </div>
      <!-- ./wrapper -->
    </body>
</html>