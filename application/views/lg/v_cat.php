<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $this->session->userdata("nama"); ?> - page</title>

  <!-- Bootstrap core CSS -->
  <link href="/ct/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/ct/css/scrolling-nav.css" rel="stylesheet">

</head>
<body>
<div class="row">
    <?php 
		foreach($itemv as $u){ 
		?>	
			<div class="col-md-12">
			<div class="card">
    			<div class="card-body">
    			<h5 class="card-title">nama item : <?php echo $u->n_item ?></h5>
   			<p class="card-text">
			<p>Detail : <?php echo $u->detail ?></p>
			<p>Harga : Rp.<?php echo $u->price ?></p>
			<p>Vendor : <?php echo $u->n_vendor ?></p>
			<p><img class="img-fluid img-thumbnail" src="<?php echo $u->imgi ?>"></img></p>
			<p><button type="button" class="btn btn-light"><a href="/cust">Go back</a></button></p>
			<p><form action="<?php echo base_url('cust/input'); ?>" method="post">
			<input style="display:none;" type="text" name="cust_name" value="<?php echo $this->session->userdata("nama"); ?>">
			<input style="display:none;" type="text" name="idt" value="">
			<input style="display:none;" type="text" name="idi" value="<?php echo $u->idi ?>">
			<input style="display:none;" type="text" name="idv" value="<?php echo $u->idv ?>">
			<input style="display:none;" type="text" name="status" value="on-going">
                  <button type="submit" value="pilih item" class="btn btn-light">pilih item</button>
			</form>
			</div>
			</div>
			</div>
			<?php } ?>  
			</div>

<!-- Bootstrap core JavaScript -->
  <script src="ct/vendor/jquery/jquery.min.js"></script>
  <script src="ct/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="ct/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="ct/js/scrolling-nav.js"></script>

</body>
</html>