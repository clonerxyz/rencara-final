<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $this->session->userdata("nama"); ?> - page</title>

  <!-- Custom fonts for this template-->
  <link href="https://store.rencara.com/ct/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="https://store.rencara.com/ct/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="https://store.rencara.com/ct/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="https://store.rencara.com/vendor"><?php echo $this->session->userdata("nama"); ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i ><img style="widht:20px; height:20px;" src="https://store.rencara.com/ct/img/<?php foreach ($res4 as $u) { echo $u->imgv; } ?>"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="https://store.rencara.com/vendor/editprof">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/item'); ?>">
          <i class="fas fa-fw fa-list-ol"></i>
          <span>List item</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/input'); ?>">
          <i class="fas fa-fw fa-plus-square"></i>
          <span>Input item</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/order'); ?>">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>My order</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/inc'); ?>">
          <i class="fas fa-fw fa-credit-card"></i>
          <span>My Fund</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/stiket'); ?>">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>My order Process</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
                        <h4 class="mt-4"><?php foreach($res as $t) { echo $t->subject;} ?> || <?php foreach($res as $t) { echo $t->order_id;} ?></h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Subject / <?php foreach($res as $t) { echo $t->subject;} ?> || <?php foreach($res as $t) { echo $t->order_id;} ?></li>
                        </ol>
                        <div class="card-body">
						<h4 class="card-header" >Send to : <?php foreach ($res as $i){ echo $i->customer; } ?></h4><br/>
						<div class="card">
						<pre style="padding:10px 10px 10px 10px;"><?php foreach ($res as $i){ echo $i->isi_tiket; } ?></pre>
						</div>
						</div>
		
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      
    
    <!-- /.content-wrapper -->
	<button onclick="location.href='https://store.rencara.com/vendor/stiket';" class="btn btn-secondary float-left" >Goback</button>
  </div>
  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('vendor/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- Bootstrap core JavaScript-->
  <script src="https://store.rencara.com/ct/vendor/jquery/jquery.min.js"></script>
  <script src="https://store.rencara.com/ct/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="https://store.rencara.com/ct/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="https://store.rencara.com/ct/vendor/chart.js/Chart.min.js"></script>
  <script src="https://store.rencara.com/ct/vendor/datatables/jquery.dataTables.js"></script>
  <script src="https://store.rencara.com/ct/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="https://store.rencara.com/ct/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="https://store.rencara.com/ct/js/demo/datatables-demo.js"></script>
  <script src="https://store.rencara.com/ct/js/demo/chart-area-demo.js"></script>

</body>

</html>
