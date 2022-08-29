<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('template/parts/head') ?>
</head>
<body class="hold-transition <?= $this->adminlte->config('sidebar_options') ?>">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php $this->load->view('template/parts/navbar/navbar') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('template/parts/sidebar/sidebar_main') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?= $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('template/parts/footer') ?>

  <!-- Control Sidebar -->
  <?php $this->load->view('template/parts/control_sidebar') ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('template/parts/scripts') ?>
</body>
</html>
