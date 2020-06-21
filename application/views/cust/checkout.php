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
	  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-0e3XbxImrtXVzNu2"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <title><?php echo $this->session->userdata("nama"); ?> - page</title>


</head>

<body>


<!-- header start -->
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
                                        <a href="https://store.rencara.com/cust">Home</a>
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
<div class="title1 section-t-space">
     <h4></h4>
	 <h2 class="title-inner1">ALL Checkout</h2>
</div>
<section class="wishlist-section section-b-space">
    <div class="container">
        <div class="row">
		<form id="payment-form" method="post" action="<?=site_url()?>cust/finish">
		<?php $sum = 0;foreach($midz as $n){ ?>
		<input type="hidden" name="idd" value="<?php echo $n->idd ?>">
		<?php } ?>
		<input type="hidden" name="result_type" id="result-type" value="">
		<input type="hidden" name="result_data" id="result-data" value="">
		</form>
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
					<?php $sum = 0;foreach($midz as $m){ ?>
                    <tbody>
                    <tr>
					
                        <td>
                            <a href="#"><img src="https://store.rencara.com/ct/img/<?php echo $m->imgi ?>" alt=""></a>
                        </td>
                        <td><a href="#"><?php echo $m->name ?></a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <p><?php echo $m->quantity ?></p>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color">Rp.<?php $price = number_format("$m->price", 2, ",", "."); echo $price  ?></h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="https://store.rencara.com/cust/delcart/<?php echo $m->idd ?>" class="icon mr-1"><i class="ti-close"></i> </a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>Rp.<?php $price = number_format("$m->price", 2, ",", "."); echo $price  ?></h2></td>
                        <td>
                            <p><?php echo $m->quantity ?></p>
                        </td>
                        <td><a href="https://store.rencara.com/cust/delcart/<?php echo $m->idd ?>" class="icon mr-3"><i class="ti-close"></i> </a></td>
                    </tr>
                    </tbody>
                    
                
				 <?php  $sum+=$m->quantity * $m->price;?>
				<?php } ?>
				<div class="col-md-12">&nbsp;</div>
				<h3>Total Price : Rp.<?php $price = number_format("$sum", 2, ",", "."); echo $price  ?></h3>
				<div class="col-md-12">&nbsp;</div>
                 </table>
				
            </div>
			 
        </div>
        <div class="row wishlist-buttons">
            <div class="col-12"><a href="https://store.rencara.com/cust" class="btn btn-solid">continue shopping</a> <a href="#" id="pay-button" class="btn btn-solid">Pay!</a></div>
        </div>
    </div>
</section>
<!-- header end -->



<!-- footer -->
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
<!-- footer end -->


<!--modal popup start-->

<!--modal popup end-->



<!-- Quick-view modal popup end-->


<!-- theme setting -->

<!-- theme setting -->


<!-- exit modal popup start-->

<!-- Add to cart modal popup end-->



<!-- facebook chat section end -->


<!-- cart start -->

<!-- cart end -->


<!-- tap to top -->
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
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
<script src="https://store.rencara.com/ct/js/production.min.js"></script>
 <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      //event.preventDefault();
      //$(this).attr("disabled", "disabled");
    
    $.ajax({
      url: '<?=site_url()?>/cust/token',
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

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
