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
		<div class="card-body">
		<h2>Settings</h2>
		<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Settings</li>
        </ol>
		<div class="card">
		<span class="card-header">
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
					</span><br>
		<h4 class="card-header">Edit profile</h4>
		<div class="card-body">
		<form method="POST" action="https://store.rencara.com/vendor/eprf">
			<?php foreach ($res as $r) { ?>
			<div class="form-group">
			<label for="formGroupExampleInput">Your name</label>
			<input type="text" name="n_vendor" class="form-control" id="formGroupExampleInput" value="<?php echo $r->n_vendor ?>">
			</div>
			<div class="form-group">
			<label for="formGroupExampleInput2">Email</label>
			<input type="text" name="contact" class="form-control" id="formGroupExampleInput2" value="<?php echo $r->contact ?>">
			</div>
			<div class="form-group">
			<label for="formGroupExampleInput2">Address</label>
			<input type="text" name="alamat" class="form-control" id="formGroupExampleInput2" value="<?php echo $r->alamat ?>">
			</div>
			<div class="form-group">
			<label for="formGroupExampleInput2">phone</label>
			<input type="number" name="phone" class="form-control" id="formGroupExampleInput2" value="<?php echo $r->phone ?>">
			</div>
			<input type="hidden" name="idv" value="<?php echo $r->idv ?>">
			<button type="submit" class="btn btn-secondary mb-2">Update</button>
			<?php } ?>
		</form>
		</div>
		</div><div class="col-md-12">&nbsp;</div>
		<div class="card">
		<h4 class="card-header">Edit Image Profile</h4>
		<div class="card-body">
		<?php foreach ($res as $s) { ?>
		<form enctype="multipart/form-data" method="POST" action="https://store.rencara.com/vendor/eprfi">
			<div class="form-group">
			<label for="formGroupExampleInput"><img style="widht:30%; height:30%;" src="https://store.rencara.com/ct/img/<?php echo $s->imgv ?>"></label>
			<input type="file" name="img" id="formGroupExampleInput" placeholder="pilih gambar" accept=".jpg,.JPG,.JPEG,.PNG,.png,.svg,">
			<input type="hidden" name="idv" value="<?php echo $s->idv ?>">
			</div>
			<button type="submit" class="btn btn-secondary mb-2">Update</button>
		<?php } ?>
		</form>
		</div>
		</div><div class="col-md-12">&nbsp;</div>
		<div class="card">
		<h4 class="card-header">Change Password</h4>
		<div class="card-body">
		<?php foreach ($res as $t) { ?>
		<form action="https://store.rencara.com/vendor/eprpw" method="POST">
			<div class="form-group">
			<label for="formGroupExampleInput">Enter New Password</label>
			<input type="password" name="pw" class="form-control" id="blink1" required="">
			</div>
			<div class="form-group">
			<label for="formGroupExampleInput2">Re-Type New Password</label>
			<input type="password" name="pw" class="form-control" id="blink2" required="">
			<br/>
			<a onclick="myFunction()"><i class="far fa-eye this"></i></a>
			</div> 
			<input type="hidden" name="id" value="<?php echo $t->idv ?>">
			<button type="submit" class="btn btn-secondary mb-2">Update</button>
		</form>
		<?php } ?>
		</div>
		</div>
		</div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      

    </div>
    <!-- /.content-wrapper -->

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
  <style> .this:hover { color:white; }</style>
  <script>
 function myFunction() {
  for(i=1; i<=4; i++){
  var x = document.getElementById("blink"+i);
  
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  }
}
</script>
</body>

</html>
