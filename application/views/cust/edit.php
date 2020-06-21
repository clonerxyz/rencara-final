<html>
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


</head>
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        
    </div>
    <div class="container">
        <div class="row">
		
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="brand-logo">
                            <a href="https://store.rencara.com/cust"><img src="http://store.rencara.com/ct/img/rencara.PNG" class="img-fluid blur-up lazyload" alt=""></a>
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
                                        <a href="https://store.rencara.com/cust">Home</a>
                                    </li>
									<li>
                                        <a href="https://store.rencara.com/cust/transaksi">Transaksi</a>
                                    </li>
                                    <li>
                                        <a href="#">product</a>
                                        <ul>
                                            <?php $no = 1;foreach($cat as $c){ ?><li><a href='https://store.rencara.com/cust/search/<?php echo $c->n_cat ?>/0/12'><?php echo $c->n_cat ?><span class="new-tag">new</span></a></li><?php } ?>
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
												   <?php $no = 1;foreach($midz as $ca){ ?>
												   <tbody>
														<tr>
														  <td><?php echo $ca->name ?></td>
														  <td><?php echo $ca->quantity ?></td>
														  <td>Rp.<?php $price = number_format("$ca->price", 2, ",", "."); echo $price ?></td>
														  <td><a href="https://store.rencara.com/cust/delcart/<?php echo $ca->idd ?>">delete</td>
														</tr>
													  </tbody>
													
												   <?php } ?>
												   </table>
												</div>
												<div class="modal-footer">
												  <p class="text-left">Total price : RP.<?php $val = 0;foreach($midz as $ca){ ?><?php $val+= $ca->quantity * $ca->price;?><?php } ?> <?php $price = number_format("$val", 2, ",", "."); echo $price ?> </p>
												  <button type="button" onclick="window.location.href = 'https://store.rencara.com/cust/checkout';" class="btn btn-outline-warning" data-dismiss="modal">Checkout</button>
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
												
												   <input class="form-control" placeholder="search here.. " name="s" id="inputlg" type="text" onchange="checker2()" required="">
														<script>
														function checker2()
														{
														var x = document.getElementById("inputlg");
														window.location =('https://store.rencara.com/cust/search/'+x.value+'/0/12');
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
                                   <li><a href="#"><img style="width:20px; height:20px; " src="https://store.rencara.com/ct/img/<?php foreach ($res as $c ) { echo $c->imgc; } ?>"></a>
								   
								   <ul>
										<li><a href="#"><?php echo $this->session->userdata("nama"); ?></a></li>
                                       <li><a href="https://store.rencara.com/cust/editprof">edit profile</a></li>
									   <li><a href="https://store.rencara.com/cust/logout">logout</a></li>
									   
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
<body>
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
		
            <div class="col-lg-12">
			<span class="login100-form-title p-b-53">
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
					</span><br>
                <h3>Edit Profile</h3>
                <div class="theme-card">
				
                    <form class="theme-form" method="POST" enctype="multipart/form-data" action="<?php echo base_url('cust/eprf'); ?>">
					<?php foreach($res as $r) { ?>
                        <div class="form-row">
                                <input type="hidden" value="<?php echo $r->idc ?>" name="id">
                            <div class="col-md-6">
                                <label for="email">Your Name</label>
                                <input type="text" class="form-control" name="n_cust" id="fname" value="<?php echo $r->n_cust ?>" placeholder="<?php echo $r->n_cust ?>" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Email</label>
                                <input type="email" class="form-control" name="contact" id="review" value="<?php echo $r->contact ?>" placeholder="<?php echo $r->contact ?>" required="">
                            </div>
							<div class="col-md-6">
                                <label for="review">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="review" value="<?php echo $r->alamat ?>" placeholder="<?php echo $r->alamat ?>" required="">
                            </div>
							<div class="col-md-6">
                                <label for="review">Phone</label>
                                <input class="form-control" type="number" name="phone" id="review" value="<?php echo $r->phone ?>" placeholder="<?php echo $r->phone ?>" required="">
                            </div>
                            
							<div class="col-md-6">
                                
                                
                            </div>
                            <div class="col-md-12">
                            <p>&nbsp;</p>
                            </div>
							
							<button type="submit" class="btn btn-solid">Update</button>
							
					</div>
                    </form>
					</div>
					</br>
					<h3>EDIT PROFILE Image</h3>
					<div class="theme-card">
                    <form class="theme-form" method="POST" enctype="multipart/form-data" action="<?php echo base_url('cust/eprfi'); ?>">
                    <div class="col-md-6">
                                
                                <input type="hidden" name="id" value="<?php echo $r->idc ?>">
                                <input class="" type="file" value="<?php echo $r->imgc ?>" name="img" id="review"  accept=".jpg,.JPG,.JPEG,.PNG,.png,.svg," required="">
                                <img style="background-color:white;width:250px;height:250px;" src="https://store.rencara.com/ct/img/<?php echo $r->imgc ?>"><br/><br/><br/>
                            </div>
                            <button type="submit" class="btn btn-solid">Update image profile</button>
                    </form>
					</div>
					</br>
					<h3>EDIT PASSWORD</h3>
					<div class="theme-card">
					<form class="theme-form" method="POST" action="<?php echo base_url('cust/eprpw'); ?>">
					<div class="col-md-6">
								<input type="hidden" name="id" value="<?php echo $r->idc ?>">
								<label for="review">INPUT YOUR PASSWORD</label>
								<input class="form-control" type="password" value="" name="pw" required="">
								<label for="review">Retype YOUR PASSWORD</label>
								<input class="form-control" type="password" value="" name="pw" required="">
					</div>
							<button type="submit" class="btn btn-solid">Update PASSWORD</button>
					</form>
					</div>
					<?php } ?>
                    
				
                
            </div>
        </div>
    </div>
</section>
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>

<footer class="footer-light">
    <div class="light-layout">
        <div class="container">
            <section class="small-section border-section border-top-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe">
                            <div>
                                <h4>KNOW IT ALL FIRST!</h4>
                                <p>Never Miss Anything From Multikart By Signing Up To Our Newsletter.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="form-inline subscribe-form auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              target="_blank">
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                            </div>
                            <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img style="width:60%;" src="https://panel.rencara.com/ct/image/rcr2.png"/></div>
                        <p></p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>How to find us</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><img style="width:5%;"src="https://panel.rencara.com/ct/image/instagram.svg" /><a style="text-decoration:none;color:black;" href="https://www.instagram.com/rencaracom/"> https://www.instagram.com/rencaracom/</a></li>
                                <li><img style="width:5%;"src="https://panel.rencara.com/ct/image/whatsapp.svg" /><a style="text-decoration:none;color:black;" href="https://https://wa.me/6282216649839"> +62 822-1664-9839</a> </li>
                                <li><img style="width:5%;"src="https://panel.rencara.com/ct/image/adobephonegap.svg" /><a> +62 822-1664-9839</a></li>
                                <li><img style="width:5%;"src="https://panel.rencara.com/ct/image/mail-dot-ru.svg" /><a style="text-decoration:none;color:black;" href="mailto:rencara.techno@gmail.com">  rencara.techno@gmail.com</a></li>
                                <li><img style="width:5%;"src="https://panel.rencara.com/ct/image/googlemaps.svg" /><a style="text-decoration:none;color:black;" href="https://www.google.com/maps/@-6.9789331,107.6294394,17z"> Jl.Akiardiyaksan gang slamet 3 Block C No.6 Sukabirus RT 3 RW 8 Dayeuhkolot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright &copy; Rencara 2020</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    
                </div>
            </div>
        </div>
    </div>
</footer>
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

<!--<script>
    $("input[type='number']").inputSpinner()
</script>
<script>
window.onload=function(){
    jAlert('Example of a basic alert box in jquery', 'jquery basic alert box');
};
</script>-->
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

</body>
</html>