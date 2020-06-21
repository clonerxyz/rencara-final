<html>

<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">

  <!-- Bootstrap core CSS -->

  <link href="/ct/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <!-- Custom styles for this template -->

  <link href="/ct/css/scrolling-nav.css" rel="stylesheet">



</head>

<body>

<div class="container">

    <?php 
		$uc = NULL;
		$uv = NULL;
		//echo $chekx;
		foreach($chekz as $c){ $uv = $c->u_v ;}
		foreach($chekz2 as $d){ $uc = $d->u_c ;}
		//echo $uv;
		//echo $uc;
		//echo $chekz['u_v'][0];
		//echo $chekz2['u_c'][0];
		echo '<div class="col-md-12"><p>';
		if ($uc == $chekx ||  $uv == $chekx ) { 
		echo "<script>alert('user sudah digunakan');window.top.location.href='https://store.rencara.com/Regven'; </script>"
		;} 
		else {
			
		;} 
		?>
		</p>
 	


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