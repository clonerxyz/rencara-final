<html>
<head>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
    <?php foreach($trans as $stz=>$item ){ ?>
    <?php $trans[$stz] = (array)$item; ?>
    <p>order_id = <?php echo $trans[$stz]['order_id']; ?></p>
    <p>status = <?php echo $trans[$stz]['transaction_status']; ?></p>
    <p>Total price = Rp.<?php $c = $trans[$stz]['gross_amount']; echo number_format($c,0,',','.');?></p>
	
    <?php } ?>
	<?php foreach($i1 as $ztz=>$itemz ){ ?>
    <?php $i1[$ztz] = (array)$itemz; ?>
    <p>item name = <?php echo $i1[$ztz]['name']; ?></p>
	<?php } ?>
	
    
	<a href="<?php echo base_url('admin/logout'); ?>">Logout</a>
</body>
</html>