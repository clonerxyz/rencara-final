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
     <h4></h4>
	 <h2 class="title-inner1">Search <?php echo $key ?></h2>
</div>
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <ul style="display:block;" class="tabs tab-title">
					 <li class="curadd to cart"><a href="tab-4"></a></li>
                    </ul>
                    <div class="tab-content-cls">
                        <div id="tab-4" class="tab-content active default">
                            <div class="no-slider row">
							<?php $no = 1;foreach($find as $f){ ?>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <img style="width:250px; height:250px;" src="https://store.rencara.com/ct/img/<?php echo $f->imgi ?>" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        
                                        <div style="width:250px; height:250px;background-color:white;"class="back">
                                            <form action="<?php echo base_url('hp/input'); ?>" method="post">
													<input style="display:none;" type="text" name="customer" value="<?php echo $this->session->userdata("nama"); ?>">
													<input style="display:none;" type="text" name="id" value="<?php echo $f->idi ?>">
													<input style="display:none;" type="text" name="idit" value="<?php echo $f->idit ?>">
													<input style="display:none;" type="text" name="vendor" value="<?php echo $f->n_vendor ?>">
													<input style="display:none;" type="text" name="name" value="<?php echo $f->n_item ?>">
													<input style="display:none;" type="text" name="price" value="<?php echo $f->price ?>">
													<input style="display:none;" type="text" name="payable" value="no">
													<input style="display:none;" type="text" name="midtrans_id" value="1">
													</br>
													<p class="btn btn-warning">Quantity : </p> <input class="col-4 form-control-sm" type="number" value="1" name="quantity" min="1" max="20" required></br>
													<button type="submit" class="btn btn-warning">add to cart</button>
										</form></br>
													<button type="button" data-toggle="modal" data-target="#<?php echo $f->idi ?>" class="btn btn-warning">Detail</button>
										</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#" data-toggle="modal" data-target="#<?php echo $f->idi ?>">
                                            <h6><?php echo $f->n_item ?></h6>
                                        </a>
                                        <h4>Rp.<?php $price = number_format("$f->price", 2, ",", "."); echo $price ?></h4>
                                        
                                    </div>
                                </div> 
<div id="<?php echo $f->idi ?>" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                
                <h3 class="modal-title"><?php echo $f->n_item ?></h3>
            </div>
			
            <div class="modal-body">
			<div class="row">
			<div class="col-md-6">
				<img class="imgd" src="http://store.rencara.com/ct/img/<?php echo $f->imgi ?>" alt="">
            <p></p>
			</div>
			<div class="col-md-6">
				<h4>Detail</h4>
                <p><?php echo $f->detail ?></p>
				<p>PRICE : Rp.<?php $price = number_format("$f->price", 2, ",", "."); echo $price ?></p>
				<form action="<?php echo base_url('hp/input'); ?>" method="post">
				<input style="display:none;" type="text" name="customer" value="<?php echo $this->session->userdata("nama"); ?>">
				<input style="display:none;" type="text" name="id" value="<?php echo $f->idi ?>">
				<input style="display:none;" type="text" name="idit" value="<?php echo $f->idit ?>">
				<input style="display:none;" type="text" name="vendor" value="<?php echo $f->n_vendor ?>">
				<input style="display:none;" type="text" name="name" value="<?php echo $f->n_item ?>">
				<input style="display:none;" type="text" name="price" value="<?php echo $f->price ?>">
				<input style="display:none;" type="text" name="payable" value="no">
				<input style="display:none;" type="text" name="midtrans_id" value="1">
				<p>Quantity : </p> <input class="col-4 form-control-sm" type="number" value="1" name="quantity" min="1" max="20" required></br>
				<div class="btn-group" role="group" aria-label="Basic example">
				<button type="submit" class="btn btn-warning">add to cart</button>
				
				</div>
				</form>
			
			
			</div>
			
			</div>
            </div>
			<div class="modal-body">
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
								<?php } ?>
								</div>
                        </div>
						
                    </div>
					
                        </div>
                    </div>
                </div>
            </div>
       
    
</section>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="https://store.rencara.com/ct/js/jquery-3.3.1.min.js"></script>

<!-- fly cart ui jquery-->
<script src="https://store.rencara.com/ct/js/jquery-ui.min.js"></script>

<!-- exitintent jquery-->
<script src="https://store.rencara.com/ct/js/jquery.exitintent.js"></script>
<script src="https://store.rencara.com/ct/js/exit.js"></script>

<!-- popper js-->
<script src="https://store.rencara.com/ct/js/popper.min.js"></script>

<!-- slick js-->
<script src="https://store.rencara.com/ct/js/slick.js"></script>

<!-- menu js-->
<script src="https://store.rencara.com/ct/js/menu.js"></script>

<!-- lazyload js-->
<script src="https://store.rencara.com/ct/js/lazysizes.min.js"></script>

<!-- Bootstrap js-->
<script src="https://store.rencara.com/ct/js/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="https://store.rencara.com/ct/js/bootstrap-notify.min.js"></script>

<!-- Fly cart js-->
<script src="https://store.rencara.com/ct/js/fly-cart.js"></script>

<!-- Theme js-->
<script src="https://store.rencara.com/ct/js/script.js"></script>
<script src="https://store.rencara.com/ct/js/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
<style>
.modal-backdrop{
	display:none;
}
.dark-light{
	display:none;
}
.imgd{
	max-width:80%;
}
</style>

</body>
</html>