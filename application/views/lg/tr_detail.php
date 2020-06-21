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
<div class="col-md-12">
<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">Selected item</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		$no = 1;
		foreach($custx as $t){ 
		?>	
    <tr>
      <th scope="row">
	  id transaksi : <?php echo $t->idt ?> |
	  cust_name : <?php echo $t->cust_name ?> |
	  id item : <?php echo $t->idi ?> |
	  vendor_name : <?php echo $t->vendor_name ?> |
	  item name : <?php echo $t->item_name ?> |
	  price : Rp.<?php echo $t->price ?> |
	  Qty : <?php echo $t->qty ?>
	  </th>
    </tr>
	<?php } ?>
  </tbody>
  
</table>
		
     
		 
		<div class="pagi" style="padding-left:20px;">
				<nav aria-label="Page navigation example">
				<ul class="pagination"><?php echo $linkz; ?></ul></nav></div>
		</div>
		
		
		
		</div>
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