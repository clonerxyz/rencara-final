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


</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="brand-logo">
                            <a href="https://store.rencara.com"><img src="http://store.rencara.com/ct/img/rencara.PNG" class="img-fluid blur-up lazyload" alt=""></a>
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
                                        <a href="https://store.rencara.com">Home</a>
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
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form" action="<?php echo base_url('Regven/add'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="email">User name</label>
								<input class="input100" type="hidden" name="idc" >
                                <input type="text" class="form-control" name="u_v" id="fname" onchange="checker()" placeholder="Enter your username" required="">
								<input type="hidden" class="form-control" name="u_cz" value="<?php echo  $this->session->userdata("nama"); ?>" >
                            </div>
								<script>
								function checker()
								{
								var x = document.getElementById("fname");
								var iframe = document.getElementById('3');
								var y = "https://store.rencara.com/Regven/readu/";
								iframe.setAttribute('src',"https://store.rencara.com/Regven/readu/"+x.value);
								}
								</script>
							<div class="col-md-12">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" name="p_v" id="review" placeholder="Enter your password" required="">
                            </div>
                            <div class="col-md-4">
                                <label for="review">Address</label>
                                <input type="text" class="form-control" name="alamat" id="review" placeholder="Enter your address" required="">
                            </div>
							 <div class="col-md-4">
                                <label for="review">Phone</label>
                                <input type="number" class="form-control" maxlength="14" name="phone" id="review" placeholder="Enter your phone" required="">
                            </div>
							 <div class="col-md-4">
                                <label for="review">Email</label>
                                <input type="email" class="form-control" name="contact" id="review" placeholder="Enter your email" required="">
                            </div>
							
							<div class="col-md-6">
                                <label for="review">Silahkan input Npwp</label>
                                <input type="file" class="form-control" name="npwp" id="review" placeholder="Silahkan input Npwp" accept=".jpg,.JPG,.JPEG,.PNG,.png,.svg," required="">
                            </div>
							<div class="col-md-6">
                                <label for="review">Silahkan input Ktp</label>
                                <input type="file" class="form-control" name="ktp" id="review" placeholder="Silahkan input Ktp" accept=".jpg,.JPG,.JPEG,.PNG,.png,.svg," required="">
                            </div>
							<input type="hidden" name="v_status" value="belum di acc">
							<div class="col-md-12"></div>
							<button type="submit" class="btn btn-solid">create Account</button>&nbsp;<button type="button" onclick="window.location.href = 'https://store.rencara.com/login';" class="btn btn-solid">Already user ?</button></div>
							
							<iframe id ="3" height="20px" frameborder="0" scrolling="no" src=""></iframe>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
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

<style>
.modal-backdrop{
	display:none;
}
.dark-light{
	display:none;
}

</style>

</body>
</html>