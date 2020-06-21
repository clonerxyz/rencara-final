<html>
<body>
<script>
									var check = "<?php if ($this->session->flashdata('success')): ?><?php echo $this->session->flashdata('success'); ?><?php endif; ?>";
									window.onload=function(){
									 if (check)
									 {
										 alert('data berhasil di input');
										 window.top.location.href='https://store.rencara.com/admin/category';
									 }
									};
									 </script>
<div class="page-wrapper">
<div class="card-body ">
									  <table class="display" id="basic-1" width="100%" cellspacing="0">
										<thead>
										  <tr>
											
											<th scope="col">Category Name</th>
											<th scope="col">Name Item</th>
											<th scope="col">Edit category</th>
										  </tr>
										</thead>
										<tbody>
										<?php 
										$no = 1;
										foreach($cat as $i){ 
										?>
										<script>
									  function showcat<?php echo $i->idi ?>() {
										  $("#catshow<?php echo $i->idi ?>").show();
										  $("#trig<?php echo $i->idi ?>").hide();
									  }
									  </script>
										<tr>
											
											<td><?php echo $i->n_cat ?></td>
											<td><?php echo $i->n_item ?></td>
											<td>
											<button id="trig<?php echo $i->idi ?>" class="btn btn-primary" onclick="showcat<?php echo $i->idi ?>()">move category</button>
											<div style="display:none;" id="catshow<?php echo $i->idi ?>" class="form-group">
											<form action="<?php echo base_url('admin/movecat'); ?>" method="POST">
											<input type="hidden" value="<?php echo $i->idi ?>" name="iditem">
											<select  class="form-control" id="exampleFormControlSelect1" name="idcat">
											<?php foreach ($cat2 as $j) { ?>
											  <option value="<?php echo $j->idcat ?>" ><?php echo $j->n_cat ?></option>
											<?php } ?>
											</select>
											<hr>
											<button type="submit" class="btn btn-primary" onclick="showcat()">move category</button>
											</form>
										  </div>
											</td>
										  </tr>
										 <?php } ?>
										 </tbody>
									  </table>
									  </div>
									  </div>
									  </body>
									  
<!-- latest jquery-->
<script src="https://store.rencara.com/ct/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="https://store.rencara.com/ct/js/popper.min.js"></script>
<script src="https://store.rencara.com/ct/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="https://store.rencara.com/ct/js/icons/feather-icon/feather.min.js"></script>
<script src="https://store.rencara.com/ct/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="https://store.rencara.com/ct/js/sidebar-menu.js"></script>

<!-- Datatables js-->
<script src="https://store.rencara.com/ct/js/datatables/jquery.dataTables.min.js"></script>
<script src="https://store.rencara.com/ct/js/datatables/custom-basic.js"></script>

<!--Customizer admin-->
<script src="https://store.rencara.com/ct/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="https://store.rencara.com/ct/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="https://store.rencara.com/ct/js/chat-menu.js"></script>
<!--counter js-->
<script src="https://store.rencara.com/ct/js/counter/jquery.waypoints.min.js"></script>
<script src="https://store.rencara.com/ct/js/counter/jquery.counterup.min.js"></script>
<script src="https://store.rencara.com/ct/js/counter/counter-custom.js"></script>

<!--script admin-->
<script src="https://store.rencara.com/ct/js/admin-script.js"></script>
<!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/flag-icon.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/jsgrid.css">
	<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/datatables.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/admin.css">
	<style>
.custom-theme{
	display:none;
}
</style>
</html>