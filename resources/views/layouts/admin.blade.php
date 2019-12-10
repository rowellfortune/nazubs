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
         
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>               
              </ul>

              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
                </li> --}}
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
              </ul>
            
                
              
            </nav>
         
      <!-- /.navbar -->
          @section('sidebar')
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">NAZUBS CMS</span>
              </a>
          
              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                  </div>
                </div>
          
                <!-- Sidebar Menu -->
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                          with font-awesome or any other icon font library -->
                      <li class="nav-item has-treeview">
                          <a href="{{ ('/admin/dashboard') }}" class="nav-link">
                          <i class="nav-icon fas fa fa-tachometer-alt"></i>
                          <p>                     
                            Beheren
                          </p>
                        </a>
                      
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="{{ route('klanten.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>                     
                          Klanten
                        </p>
                      </a>
                    
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="{{ route('users.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>                     
                        Users
                      </p>
                    </a>
                  
                  </li>
                      <li class="nav-item has-treeview">
                          <a href="{{ route('appartementen.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-building"></i>
                          <p>                     
                            Appartementen
                          </p>
                        </a>
                      
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="{{ route('facturen.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                              Facturen
                            </p>
                          </a>
                        
                        </li>
                      </li>                 
                    </ul>
                  </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
          @show

        <div class="container">
            @yield('content')
        </div>
        
      </div>

  <!-- Main Footer -->
  <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">UNASAT Suriname | Rowell Fortune & Groep A</a>.</strong> All rights reserved.
  </footer>
      <!-- ./wrapper -->

    </body>
</html>