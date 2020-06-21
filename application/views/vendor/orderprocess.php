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
<div style="display:none;" id="fresult" class="container">
<h3>Order ini sudah selesai</h3><br>
<button onclick="location.href='https://store.rencara.com/vendor/order';" class="btn btn-secondary float-left" >Goback</button>
</div>
<div id="content-wrapper">
<div class="container">
<form action="https://store.rencara.com/vendor/addtiket" method="POST">
	<div class="form-group">
	<label for="text">subject</label><br>
	<select id="this" name="subject" class="form-control" onchange="changetext()" >
			<option >--Select subject--</option>
			<option  id="a" value="Order Di Proses order number : <?php echo $res2 ?>">Order Di Proses</option>
			<option  id="b" value="Ask Tanggal sewa order number : <?php echo $res2 ?>">Ask Tanggal sewa</option>
			<option  id="c" value="All item telah di kirimkan ke alamat order number : <?php echo $res2 ?>">All item telah di kirimkan ke alamat</option>
			<option  id="d" value="Menunggu Pengembalian order number : <?php echo $res2 ?>">Menunggu Pengembalian</option>
			<option  id="e" value="Item sudah di kembalikan order number : <?php echo $res2 ?>">Item sudah di kembalikan</option>
			<option  id="f" value="Close Order order number : <?php echo $res2 ?>">Close Order</option>
			<option  id="g" value="Custom Case order number : <?php echo $res2 ?>">Custom Case</option>
	</select>
	</div>
	<div class="form-group">
	<label for="text">Order_id</label><br>
	<input type="disabled" class="form-control" value="<?php echo $res2 ?>"  name="order_id" readonly>
	</div>
	<div class="form-group">
	<label for="email">Vendor</label><br>
	<input type="disabled" class="form-control" value="<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?>"  name="vendor" readonly>
	</div>
	<div class="form-group">
	<label for="email">Customer</label><br>
	<input type="disabled" class="form-control" value="<?php foreach ($res as $v) { $user = $v->customer; } echo $user ?>"  name="customer" readonly>
	</div>
	<div class="form-group">
	<label for="email">Ticket content</label><br>
	<textarea id="tiket" required="" class="form-control" style="widh:500px;height:300px" name="isi_tiket"></textarea>
	</div>
	<button type="submit" class="btn btn-secondary float-left">Submit</button>
</form>

	<button onclick="location.href='https://store.rencara.com/vendor/order';" class="btn btn-secondary float-right" >Goback</button>
</div>
</div>
</div>
<?php $sum = 0; foreach ($res as $i) { $sum+=$i->quantity * $i->price;  } ; ?>
<?php $price = number_format("$sum", 2, ",", ".");   ?>
</div>
</body>
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
  <script>function changetext() {
var a = 
"Dear customer <?php foreach ($res as $v) { $user = $v->customer; } echo $user ?> \n\n" +

"Pesanan dengan detail : \n\n"+

"Item name : \n<?php foreach ($res as $i) { echo $i->name; ?> Quantity : <?php echo $i->quantity; ?>\n<?php } ?>\n\n"+

"Total price : Rp. <?php echo $price; ?>\n\n"+

"akan segera di proses \n\n"+

"mohon untuk menyertakan detail \n"+ 
"no telp (yang valid)\n"+
"alamat lengkap (jika alamat pengantaran bukan merupakan alamat di profile anda) \n\n\n"+


"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";

var b =
"Dear customer <?php foreach ($res as $v) { $user = $v->customer; } echo $user ?> \n\n" +

"mohon untuk menetapkan tanggal peminjaman dengan mereply tiket ini \n\n\n"+
"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";
var c = 
"Dear customer <?php foreach ($res as $v) { $user = $v->customer; } echo $user ?> \n\n" +
"Pesanan dengan detail : \n\n"+

"Item name : \n<?php foreach ($res as $i) { echo $i->name; ?> Quantity : <?php echo $i->quantity; ?>\n<?php } ?>\n\n"+

"Total price : Rp. <?php echo $price; ?>\n\n"+

"sudah di antarkan ke Alamat <?php foreach ($res3 as $i) { echo $i->alamat; } ?> \n\n"+

"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";
var d = 
"Dear customer <?php foreach ($res as $v) { $user = $v->customer; } echo $user ?> \n\n" +

"Item yang terdaftar di bawah : \n\n"+

"Item name : \n<?php foreach ($res as $i) { echo $i->name; ?> Quantity : <?php echo $i->quantity; ?>\n<?php } ?>\n\n"+

"untuk pengembalian item di atas , apakah akan di antar ke kami atau akan kami ambil kembali ke alamat <?php foreach ($res3 as $i) { echo $i->alamat; } ?> \n\n\n"+

"mohon untuk me reply tiket ini dengan jawaban yang kami tanyakan di atas \n\n\n"+

"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";
var e =
"Dear customer <?php foreach ($res as $v) { $user = $v->customer; } echo $user ?> \n\n" +

"Item yang terdaftar di bawah : \n\n"+

"Item name : \n<?php foreach ($res as $i) { echo $i->name; ?> Quantity : <?php echo $i->quantity; ?>\n<?php } ?>\n\n"+

"Sudah kami terima kembali \n\n\n"+

"Terimakasih Telah menggunakan Jasa kami untuk mensukes kan acara anda.\n\n\n"+

"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";
var f =
"Dear customer <?php foreach ($res as $v) { $user = $v->customer; } echo $user ?> \n\n" +

"Untuk Order berikut : <?php echo $res2 ?> akan kami close \n\n"+

"Terimakasih Telah menggunakan Jasa kami untuk mensukes kan acara anda.\n\n\n"+

"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";
var g =
"Dear customer <?php foreach ($res as $v) { $customer = $v->customer; } echo $customer ?> \n\n" +

"Silahkan edit kolom berikut untuk menanyakan kepada customer tentang addition Request dengan Order Id : <?php echo $res2 ?> \n\n"+

"Terimakasih Telah menggunakan Jasa kami untuk mensukes kan acara anda.\n\n\n"+

"Regards, \n"+

"<?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n"+

"Rencara Team ";
var state = document.getElementById("this").value;
if ( state === "Order Di Proses order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = a;
}
if ( state === "Ask Tanggal sewa order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = b;
}
if ( state === "All item telah di kirimkan ke alamat order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = c;
}
if ( state === "Menunggu Pengembalian order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = d;
}
if ( state === "Item sudah di kembalikan order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = e;
}
if ( state === "Close Order order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = f;
}
if ( state === "Custom Case order number : <?php echo $res2 ?>" ) {
document.getElementById("tiket").value = g;
}
  }
  </script>
 <script>
var a = document.getElementById("a").value;
var b = document.getElementById("b").value;
var c = document.getElementById("c").value;
var d = document.getElementById("d").value;
var e = document.getElementById("e").value;
var f = document.getElementById("f").value;
var g = document.getElementById("g").value;

var check = "<?php foreach($notif as $n){ echo $n->subject;}  ?>"
window.onload=function(){
    if (!check.match(<?php echo $res2 ?>))
	{
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		
	}
	if (check.match(a))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(/Re : Order Di Proses order number : <?php echo $res2 ?>/g))
		{
		$("#a").hide();
		$("#b").show();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(b))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(/Re : Ask Tanggal sewa order number : <?php echo $res2 ?>/g))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").show();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(c))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	 if (check.match(/Re : All item telah di kirimkan ke alamat order number : <?php echo $res2 ?>/g))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").show();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(d))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(/Re : Menunggu Pengembalian order number : <?php echo $res2 ?>/g))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").show();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(e))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").hide();
		$("#g").hide();
		}
	if (check.match(/Re : Item sudah di kembalikan order number : <?php echo $res2 ?>/g))
		{
		$("#a").hide();
		$("#b").hide();
		$("#c").hide();
		$("#d").hide();
		$("#e").hide();
		$("#f").show();
		$("#g").hide();
		}
	if (check.match(f))
		{
		 $("#content-wrapper").hide();
		 $("#fresult").show();
		}
	
	
	
};
</script>
</html>