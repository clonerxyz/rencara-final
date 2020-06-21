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
  <link href="/ct/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="/ct/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/ct/css/sb-admin.css" rel="stylesheet">

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
          <i ><img style="widht:20px; height:20px;" src="https://store.rencara.com/ct/img/<?php foreach ($res as $u) { echo $u->imgv; } ?>"></i>
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
      <li class="nav-item active">
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
                        <h1 class="mt-4">Add Item</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Item</li>
                        </ol>
                        <div class="row">
			<div class="col-md-9">
			<span class="login100-form-title p-b-53">
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
					</span>
			<form action="<?php echo base_url('vendor/save'); ?>" method="post" enctype="multipart/form-data">
			  <div class="form-row">
			  <div class="col-md-12">
			  <input type="hidden" class="form-control" id="validationServer01" value="" name="idi" required>
			  <input type="hidden" class="form-control" id="validationServer01" value="<?php echo substr($this->session->userdata("nama"),0,3); $a = rand(); echo substr($a,0,3);?> " name="idit" required>
				  <?php 
					$no = 1;
					foreach($catx as $u){ 
					?>
				  <input type="hidden" class="form-control" id="validationServer01" value="<?php echo $u->idv ?>" name="idv" required>
				  <?php } ?>
				</div>
				<div class="col-md-12">
				  <label for="validationServer01">Item name</label>
				  <input type="text" class="form-control" id="validationServer01" name="n_item" required>
				</div>
				<div class="col-md-12">
				  <label for="validationServer02">Detail</label>
				  <textarea type="text" class="form-control" id="validationServer02" name="detail" required></textarea>
				</div>
				<div class="col-md-12">
				<label for="validationServer02">Price</label>
				  <div class="input-group mb-2">
					<div class="input-group-prepend">
					  <div class="input-group-text">Rp.</div>
					</div>
					<input type="text" class="form-control" id="inlineFormInputGroup" name="price" required>
				  </div>
				</div>
				<div class="col-md-12">
				
				<label for="validationServer02">Category</label>
				<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="idcat" required>
				
				<?php 
				$no = 1;
				foreach($catz as $t){ 
				?>
				
				<option value="<?php echo $t->idcat ?>"><?php echo $t->n_cat ?></option>
				
				<?php } ?>
				
				</select>
				
			    </div>
				
				<br/><br/><br/>
				<div class="col-md-12">
				
				<label for="validationServer02">Status</label>
				<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="status" required>
				<option value="ready">Tersedia</option>
				<option value="nready">Tidak Tersedia</option>
				</select>
				
			    </div>
				<div class="col-md-12">
				<label for="validationServer02">Image</label>
				<div class="custom-file">
				  <input class="input100" type="file" required name="imgi" accept="image/*">
				  
				</div>
				</div>
			  </div>
			  <div class="col-md-12"><br/>
			  </div>
			  <button class="btn btn-primary" type="submit">submit</button>
			</form>
      
      </div>
	  </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
    

    </div>
    <!-- /.content-wrapper -->

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
  <script src="/ct/vendor/jquery/jquery.min.js"></script>
  <script src="/ct/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/ct/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="/ct/vendor/chart.js/Chart.min.js"></script>
  <script src="/ct/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/ct/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/ct/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="/ct/js/demo/datatables-demo.js"></script>
  <script src="/ct/js/demo/chart-area-demo.js"></script>

</body>

</html>
