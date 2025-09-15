<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bali Lady Tour | BackOffice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
        href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet"
        href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">

  <!-- Custom Override -->
  <style>
    /* Hilangkan geser ke kanan saat sidebar collapse */
    body.sidebar-collapse .content-wrapper {
      margin-left: 0 !important;
    }
    /* Supaya pas sidebar normal, tetap ada margin */
    .content-wrapper {
      transition: margin-left .3s ease-in-out;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse"><!-- pakai collapse -->

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('aset/logo.png') }}" alt="Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="" class="nav-link"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="" method="GET" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('aset/logo.png') }}" alt="Logo"
           class="brand-image img-circle elevation-3" style="opacity: .5">
      <span class="brand-text font-weight-light">Bali Lady Tour</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('aset/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/galeri" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Gallery</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/programs" class="nav-link">
              <i class="nav-icon fas fa-heartbeat"></i>
              <p>Program</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/review" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>Review</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Pemilik Fasilitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/venue" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Venue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tempat-sehat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tempat Sehat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Accounts</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper -->
<div class="px-3 py-3">
    @yield('content')
</div>

  <!-- /.content-wrapper -->

  <!-- Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025 Bali Lady Tour.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->

<!-- Scripts -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('template/plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('template/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

</body>
</html>
