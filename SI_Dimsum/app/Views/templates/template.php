<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
   
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-light" >
    <div class="container-fluid">
        <a href="/Assets/AdminLTE-3.2.0/index3.html" class="navbar-brand">
        <img src="/Assets/AdminLTE-3.2.0/dist/img/Logo-Dimsum.png" alt="AdminLTE Logo" style="opacity: .8" width="75px">
        <span class="brand-text font-weight-light">SI DIMSUM</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3 container justify-text-center" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="nav nav-pills flex-column flex-sm-row">
        <div class="navbar navbar-expand-lg" style="background-color: #41371D;">
            <li class="nav-item" style="margin-right: 50px ;">
            <a href="/home" class="nav-link">Dashboard</a>
          </li>

          <li class="nav-item" style="margin-right: 50px ;">
            <a href="/about" class="nav-link">Varian dan Harga</a>
          </li>

          <li class="nav-item" style="margin-right: 50px ;">
            <a href="/mahasiswa" class="nav-link">Belanja</a>
          </li>

          <li class="nav-item" style="margin-right: 50px ;">
            <a href="/mahasiswa" class="nav-link">Tentang Kami</a>
          </li>

          <li class="nav-item" style="margin-right: 50px ;">
            <a href="/mahasiswa" class="nav-link">Bantuan</a>
          </li>
          </div>
        </ul>

        <!-- SEARCH FORM -->
       
      </div>

      <!-- Right navbar links -->
      
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#CDC2B2;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container" >
        <?php $this->renderSection('content'); ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/Assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/Assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/Assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Assets/AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('#deskripsi').summernote()
    })
</script>
</body>
</html>
