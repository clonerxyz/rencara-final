<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="multikart">
<meta name="keywords" content="multikart">
<meta name="author" content="multikart">
<link rel="icon" href="https://store.rencara.com/ct/images/favicon/1.png" type="image/x-icon">
<link rel="shortcut icon" href="https://store.rencara.com/ct/images/favicon/1.png" type="image/x-icon">
<title>Store rencara</title>
<!--Google font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/fontawesome.css">
<!--Slick slider css-->
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/slick.css">
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/slick-theme.css">
<!-- Animate icon -->
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/animate.css">
<!-- Themify icon -->
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/themify-icons.css">
<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/bootstrap.css">
<!-- Theme css -->
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/color1.css" media="screen" id="color">
</head>
<body>
<div class="title1 section-t-space">
    <h4>INVOICE NO : <?php echo $key ?></h4>
    <h2 class="title-inner1">STORE RENCARA</h2>	
</div>
<div class="row">
<div class="col-md-12">
<h4>Website : https://store.rencara.com</h4>
<h4>Telp : +62 822-1664-9839</h4>
<h4>Fax : +62 822-1664-9839</h4>
<h4>Email : rencara.techno@gmail.com</h4>
<h4>Address : Jl.Akiardiyaksan gang slamet 3 Block C No.6 Sukabirus RT 3 RW 8 Dayeuhkolot</h4>
</div>
</div>
<br/><br/><br/>
<div class="row">
<div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Customer name</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
	  <th scope="col">vendor</th>
	  <th scope="col">Status payment</th>
    </tr>
  </thead>
  <?php foreach($res as $e){ ?>
  <tbody>
    <tr>
      <td><?php echo $e->c_name ?></td>
      <td><?php echo $e->name ?></td>
      <td>Rp.<?php $price = number_format("$e->price", 2, ",", "."); echo $price ?></td>
      <td><?php echo $e->quantity ?></td>
	  <td><?php echo $e->vendor ?></td>
	  <td><?php echo $e->payable ?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
<p>Total Price : Rp. <?php $price = number_format("$e->gross_amount", 2, ",", "."); echo $price ?></p>
</div>
</div>
<div class="row">
<h4><?php $a="end"; foreach($res as $e) { $stat = $e->transaction_status; }?>
	<?php if ( $stat == "settlement") {
		echo "THANKS FOR YOUR ORDER MR/MRs."; echo $e->c_name; 
		}  
		
		else { 
		$a = "trig" ; 
		} 
		 
		if ( $a == "trig" ) {echo "PLEASE WAIT FOR TRANSACTION PROCESS" ;} ?>
		</h4>
</div>
<br/><br/>
<p>NOTE : </p>
<p>Expire Transaction will be Deleted soon.. (1 month)</p>
<p>NOTE : </p>
<p>IF 1x24 Hours , Your Transaction still pending Please let me know Email : rencara.techno@gmail.com </p>
<p>Term & condition</p>
<p>*Info maksimal penyewaan untuk setiap item 3 hari sesudah pembayaran berhasil , atau bisa menetapkan pada tanggal lain sesudah pembayaran berhasil</p>
<p>*Mohon hubungi vendor terkait sebelum penyewaan , apakah barang sedang dalam penyewaan customer kami yang lain </p>
</body>
</html>