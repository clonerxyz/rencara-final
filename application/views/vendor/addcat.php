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

      <div class="container-fluid">
                        <h1 class="mt-4">Add Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                        <div class="row">
<form action="<?php echo base_url('vendor/addcate'); ?>" method="post" enctype="multipart/form-data">
<div class="col-md-12">
<span class="login100-form-title p-b-53">
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
					</span>
<label for="validationServer01">Category name</label>
<input type="text" class="form-control" id="validationServer01" name="catname" required>
</br>
<!--<label for="validationServer01">Category Image</label>
<input class="input100" type="file" required name="imgc" accept="image/*">
</br></br>-->
<button class="btn btn-secondary" type="submit">Add category</button>
</div>

</form>
</div>
</div>
<br>
<br>
<div class="container-fluid">
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Add Category / category list</li>
</ol>
<div class="card-body">
<div class="row">
<?php foreach($res2 as $c) {?>
<div class="alert alert-secondary col-sm" role="alert">
<?php echo $c->n_cat; ?>
</div>
<div>&nbsp;</div>
<?php } ?>
</div>
</div>
</div>
</body>
</html>