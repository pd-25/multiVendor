<!DOCTYPE html>
<html lang="en">
<head>


 @include('admin.layout.head');


</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


  <!-- Preloader -->


 @include('admin.layout.headerNavbar');

 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('admin.layout.navbar');
  

  <!-- Content Wrapper. Contains page content -->
 @yield('content');
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.layout.footer');
 
</body>
</html>
