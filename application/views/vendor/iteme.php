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
	<?php foreach($diy as $u){ ?>
		<div class="container-fluid">
                        <h1 class="mt-4">Item Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Item Edit / <?php echo $u->n_item ?></li>
                        </ol>
			<div class="row">
			<div class="col-md-6">
			<form action="<?php echo base_url('vendor/update'); ?>" method="post" enctype="multipart/form-data">
			  <div class="form-row">
			  <div class="col-md-12">
			  
				  
				 <input type="hidden" class="form-control" id="validationServer01" value="<?php echo $u->idi ?>" name="idi" required="">
				</div>
				<div class="col-md-12">
				  <label for="validationServer01">Item name</label>
				  <input type="text" class="form-control" id="validationServer01" value="<?php echo $u->n_item ?>" name="n_item" required="">
				</div>
				<div class="col-md-12">
				  <label for="validationServer02">Detail</label>
				  <textarea type="text" class="form-control" id="validationServer02" name="detail" required=""><?php echo $u->detail ?></textarea>
				</div>
				<div class="col-md-12">
				<label for="validationServer02">Price</label>
				  <div class="input-group mb-2">
					<div class="input-group-prepend">
					  <div class="input-group-text">Rp.</div>
					</div>
					<input type="text" class="form-control" id="inlineFormInputGroup" value="<?php echo $u->price ?>" name="price" required="">
				  </div>
				</div>
				<?php } ?>
				<div class="col-md-12">
				
				<label for="validationServer02">Category</label>
				<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="idcat" required="">
				<option value="<?php foreach ($diy as $d) { echo $d->idcat; } ?>">default id</option>
				<?php 
				$no = 1;
				foreach($caty as $t){ 
				?>
				
				<option value="<?php echo $t->idcat ?>"><?php echo $t->n_cat ?></option>
				
				<?php } ?>
				</select>
				
			    </div>
				
				<div class="col-md-12">
				
				<label for="validationServer02">Status</label>
				<br>
				<!--<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="status" required="">
				<option style="display:none;" >------</option>
				<option style="display:none;" id="r" value="ready" >Tersedia</option>
				<option style="display:none;" id="nr" value="nready">Tidak Tersedia</option>-->
				<input class="form-control" style="display:none;" id="r" type="text" name="" value="ready" required="" readonly>
				<input class="form-control" style="display:none;" id="nr" type="text" name="" value="not ready" required="" readonly>
				<input type="hidden" id="cgr" value="" name="status">
			    </div>
				<br>
				<br>
				<div class="col-md-12">
				<label for="validationServer02">Today : <?php echo date("m/d/Y")?></label>
				</div>
				<div class="col-md-12">
				  <label for="validationServer02">item not available before ?</label>
				  <input type="date" onchange="changestt()" value="" class="form-control" id="d2" name="d2" required="">
				</div>
				<div class="col-md-12">
				  <label for="validationServer02">item available after ? </label>
				  <input type="date" onchange="changestt2()" value="" class="form-control" id="d1" name="d1" required="">
				</div>
				
			  </div>
			   
			   
			   
			   
			  <div class="col-md-12"><br/>
			  </div>
			  <button class="btn btn-secondary float-left" type="submit">Update</button>
			</form>
			  <button onclick="location.href='https://store.rencara.com/vendor/item';" class="btn btn-secondary float-right" >Goback</button>
      </div>
	  <div class="col-md-6">
	  <h6>Edit Image</h6>
	  <?php foreach ($diy as $s) { ?>
		<form enctype="multipart/form-data" method="POST" action="https://store.rencara.com/vendor/eii">
			<div class="form-group">
			<label for="formGroupExampleInput"><img style="widht:250px; height:250px;" src="https://store.rencara.com/ct/img/<?php echo $s->imgi ?>"></label>
			<input type="file" name="img" id="formGroupExampleInput" placeholder="Example input">
			<input type="hidden" name="idi" value="<?php echo $s->idi ?>">
			</div>
			<button type="submit" class="btn btn-secondary mb-2">Change Image</button>
		<?php } ?>
	  </div>
	  </div>
      <!-- /.container-fluid -->
		</div>
      <!-- Sticky Footer -->
     </div>

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
  <script>
  
  function changestt(){
	  var vui="ready"
	  var vuo="notready"
	  var b = document.getElementById("d2").value
	  var d = "<?php echo date("Y-m-d"); ?>"
	  if (d <= b) {
		  $("#nr").show();
		  $("#r").hide();
		  document.getElementById("cgr").value = vuo;
	  }
	  if (d >= b) {
		  $("#r").show();
		  $("#nr").hide();
		  document.getElementById("cgr").value = vui;
	  }
	  
  }
  </script>
  <script>
  function changestt2(){
	  var oui="ready"
	  var ouo="notready"
	  var b = document.getElementById("d1").value
	  var d = "<?php echo date("Y-m-d"); ?>"
	  if (d <= b) {
		  $("#nr").show();
		  $("#r").hide();
		  document.getElementById("cgr").value = ouo;
	  }
	  if (d >= b) {
		  $("#r").show();
		  $("#nr").hide();
		  document.getElementById("cgr").value = oui;
	  }
	  
  }
  </script>
</body>

</html>
