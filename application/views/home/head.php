<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="https://store.rencara.com/ct/img/rico.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://store.rencara.com/ct/img/rico.png" type="image/x-icon">
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

<style>
.modal-backdrop{
	display:none;
}
.dark-light{
	display:none;
}
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
</style>

</head>

<body>


<!-- header start -->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="brand-logo">
                            <a href="https://store.rencara.com/hp/mainpage"><img src="http://store.rencara.com/ct/img/rencara.PNG" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li>
                                        <a href="https://store.rencara.com/hp/mainpage">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">product</a>
                                        <ul>
                                            <?php $no = 1;foreach($cat as $c){ ?><li><a href='https://store.rencara.com/hp/category/<?php echo $c->idcat ?>/'><?php echo $c->n_cat ?><span class="new-tag">new</span></a></li><?php } ?>
                                        </ul>
                                    </li>
									<li>
                                        <a href="#"><img style="width:20px; height:20px;" src="http://store.rencara.com/ct/img/cart.png" data-toggle="modal" data-target="#regmod" ></a>
                                    </li>
									 <div style="z-index: 2; position:absolut;" class="modal fade " id="regmod" role="dialog">
											<div class="modal-dialog modal-lg modal-dialog-centered" >
											
											  <!-- Modal content-->
											  <div class="modal-content">
												<div class="modal-header">
												  
												  <h4 class="modal-title">CART</h4>
												</div>
												<div class="modal-body">
												<table class="table">
													  <thead>
														<tr>
														  <th scope="col">name item</th>
														  <th scope="col">Quantity</th>
														  <th scope="col">Price</th>
														  <th scope="col">Action</th>
														</tr>
													  </thead>
												   <?php $no = 1;foreach($cart as $ca){ ?>
												   <tbody>
														<tr>
														  <td><?php echo $ca->name ?></td>
														  <td><?php echo $ca->quantity ?></td>
														  <td>Rp.<?php $price = number_format("$ca->price", 2, ",", "."); echo $price ?></td>
														  <td><a href="https://store.rencara.com/hp/delcart/<?php echo $ca->idd ?>">delete</td>
														</tr>
													  </tbody>
													
												   <?php } ?>
												   </table>
												</div>
												<div class="modal-footer">
												  <p class="text-left">Total Price : RP.<?php $val = 0;foreach($cart as $ca){ ?><?php $val+= $ca->quantity * $ca->price;?><?php } ?> <?php $price = number_format("$val", 2, ",", "."); echo $price ?> </p>
												  <button type="button" onclick="window.location.href = 'https://store.rencara.com/login';" class="btn btn-outline-warning" data-dismiss="modal">Checkout</button>
												  <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Close</button>
												</div>
											  </div>
											  
											</div>
										  </div>
									<div style="z-index: 2; position:absolut;" class="modal fade " id="regmod2" role="dialog">
											<div class="modal-dialog modal-lg modal-dialog-centered" >
											
											  <!-- Modal content-->
											  <div class="modal-content">
												<div class="modal-header">
												  
												  <h4 class="modal-title"></h4>
												</div>
												<div class="modal-body">
												
												   <input class="form-control" placeholder="search here.. " name="s" id="inputlg" type="text" onchange="checker2()">
														<script>
														function checker2()
														{
														var x = document.getElementById("inputlg");
														window.location =('https://store.rencara.com/hp/search/'+x.value+'/0');
														}
														</script>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-outline-warning" >Search</button>
												  <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Close</button>
												</div>
											  </div>
											  
											</div>
										  </div>
                                    <li>
                                        <a href="#"><img style="width:20px; height:20px;" src="https://store.rencara.com/ct/images/icon/search.png" data-toggle="modal" data-target="#regmod2"></a>
                                    </li>
                                   <li>
                                        <a href="#">Welcome Guest</a>
                                    &nbsp;&nbsp;&nbsp;
										<ul>
										<li><a href="https://store.rencara.com/login">Login</a></li>
										<li><a href="https://store.rencara.com/regcust">Become customer</a></li>
										<li><a href="https://store.rencara.com/regven">Become vendor</a></li>
										</ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
