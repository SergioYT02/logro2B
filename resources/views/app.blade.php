<!DOCTYPE html>
<html lang="en">
<!--head-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

@include('paltilla.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->

@include('paltilla.navSuperio')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
@include('paltilla.mainSlidebar')
  <!-- Content Wrapper. Contains page content -->


    <!-- Content Header (Page header) -->
    <!-- /.content-header -->
    <!-- Main content -->
  @include('paltilla.main')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('paltilla.footer')
    
<!-- jQuery -->
@include('paltilla.scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
