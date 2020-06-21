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
          <i ><img style="widht:20px; height:20px;" src="https://store.rencara.com/ct/img/<?php foreach ($res2 as $u) { echo $u->imgv; } ?>"></i>
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
        <a class="nav-link" href="<?php echo base_url('vendor/order'); ?>"><i class="fas fa-fw fa-briefcase"></i><span>My order</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/inc'); ?>">
          <i class="fas fa-fw fa-credit-card"></i>
          <span>My Fund</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('vendor/stiket'); ?>">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>My order process</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
                        <h1 class="mt-4">MY Fund</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">My Fund </li>
                        </ol>
		<p></p>
		<form action="https://store.rencara.com/vendor/inc/" method="POST">
			<div class="form-group">
			<label for="formGroupExampleInput">Order_id</label>
			<select class="form-group" id="formGroupExampleInput" name="order_id">
			<?php foreach ($res as $t) { ?>
			<option class="form-group" value="<?php echo $t ?>"><?php echo $t ?></option>
			<?php } ?>
			</select>
			</div>
			
			<button type="submit" class="btn btn-secondary mb-2">withdraw</button>
		</form>
                        
      </div>
	  <br>
	  <br>
	  <div class="container-fluid">
	  <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">My Fund / status</li>
                        </ol>
	  <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th scope="col">Order id</th>
                    <th scope="col">Price</th>
                    <th scope="col">status</th>
                  </tr>
                </thead>
				<tbody>
				<?php 
				$no = 1;
				foreach($stt as $i){ 
				?>
				<tr>
                    <td><?php echo $i->order_id ?></td>
					<td>Rp.<?php echo $i->price ?></td>
					<td><?php echo $i->status ?></td>
					<!--<td>action</td>
					<td>
					<a href="https://store.rencara.com/vendor/itemd/<?php echo $i->idi ?>" class="fa fa-info i" aria-hidden="true"></a>
					&nbsp;
					
					<a href="https://store.rencara.com/vendor/iteme/<?php echo $i->idi ?>" class="fa fa-wrench e" aria-hidden="true"></a>
					&nbsp;
					
					<a href="https://store.rencara.com/vendor/itemr/<?php echo $i->idi ?>" class="fa fa-trash r" aria-hidden="true"></a>
					
					</td>-->
                  </tr>
				 <?php } ?>
				 </tbody>
			  </table>
			  </div>
			</div>
			<br>
			<br>
			<h3>Total Fund : Rp.<?php $sum=0; foreach($ttl as $t){ $sum+=str_replace('Rp.','',$t->price);} $price = number_format("$sum", 2, ",", "."); echo $price ; ?><h3>
			</div>
			<br>
			<br>
			<br>
	  <div style="display:none; "id="out" class="container-fluid">
	  <?php foreach ($out as $o) { ?>
      <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">My Fund / checkout</li>
      </ol>
	  <form action="https://store.rencara.com/vendor/inc2/" method="POST">
	  <div class="form-group">
		<label for="text">Order_id</label><br>
		<input type="disabled" class="form-control" value=" <?php echo $o->order_id; ?>"  name="order_id" readonly>
		</div>
		<div class="form-group">
		<label for="email">Total Price</label><br>
		<input type="disabled" class="form-control" value="Rp.<?php echo $o->gross_amount; ?>"  name="price" readonly>
		</div>
		<div class="form-group">
		<label for="email">vendor name</label><br>
		<input type="disabled" class="form-control" value="<?php echo $this->session->userdata("nama"); ?>"  name="vendor" readonly>
		<input type="hidden" value="belum di acc" name="status">
		</div>
		<div class="form-group">
		<label for="email">Silahkan isi Detail Rekening yang di tuju</label><br>
		<textarea id="rek" required="" onclick="fucs()" class="form-control" style="widh:500px;height:300px" name="rekening"></textarea>
		
		</div>
		<button type="submit" class="btn btn-secondary mb-2">process</button>
	  </form>
	  <?php } ?>
	  <h3>Proses pencairan dana maximal 3x24 jam setelah pencairan di submit</h3>
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
  window.onload=function(){
    if (<?php foreach($out as $o) { echo $o->order_id ; }?> !== null)
	{
		$("#out").show();
	}
  };
  </script>
  <script>
  function fucs() {
  var b =
	"Nama Bank : \n\n" +

	"No.Rekening : \n\n\n"+

	"Atas Nama : ";
document.getElementById("rek").value = b;
  };
  </script>

</body>

</html>
