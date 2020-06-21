<!DOCTYPE html>
<html lang="en">
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
												
												   <input class="form-control" placeholder="search here.. " name="s" id="inputlg" type="text" onchange="checker2()">
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
                                   <li><a href="#"><img style="width:20px; height:20px; " src="https://store.rencara.com/ct/img/<?php foreach ($custz as $c ) { echo $c->imgc; } ?>"></a>
								   
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
<!-- header end -->

<div class="container">
<br>
<br>
<div class="card-header">
<h3><?php foreach($res as $r){ echo $r->subject; } ?></h3>
</div>
<div class="card-body">
<div class="card">
<pre style="padding:10px 10px 10px 10px;"><?php foreach($res as $r){ echo $r->isi_tiket; } ?></pre>
</div>

</div>

</div>
<br>
<br>
<div style="display:none;"id="showrep"class="container">
<br>
<br>
<div class="card-header">
<h3><?php foreach($notif as $r){ echo $r->subject; } ?></h3>
</div>
<div class="card-body">
<div class="card">
<pre style="padding:10px 10px 10px 10px;"><?php foreach($notif as $r){ echo $r->isi_tiket; } ?></pre>
</div>

</div>

</div>
<br>
<br>
<div style=""class="container" id="reply">
<button id="rep" type="button" onclick="funct()" class="btn btn-solid" >Reply</button>
<br><br>
<div id="formrep" style="display:none;" class="card-header">
<h3>Re : <?php foreach($res as $r){ echo $r->subject; } ?></h3>
</div><br><br>
<div id="formrep2" style="padding:10px 10px 10px 10px;display:none;" class="card">
<form method="post" action="https://store.rencara.com/cust/sentrep/<?php foreach($res as $r){ echo $r->ido; } ?>">
	<div class="form-group">
	<label for="text">Subject : </label><br>
	<input type="disabled" class="form-control" value="Re : <?php foreach($res as $r){ echo $r->subject; } ?>"  name="subject" readonly>
	</div>
	<div class="form-group">
	<label for="text">Order_id : </label><br>
	<input type="disabled" class="form-control" value="<?php foreach($res as $r){ echo $r->order_id; } ?>"  name="order_id" readonly>
	</div>
	<div class="form-group">
	<label for="text">Sent to : </label><br>
	<input type="disabled" class="form-control" value="<?php foreach($res as $r){ echo $r->vendor; } ?>"  name="vendor" readonly>
	</div>
	<div class="form-group">
	<label for="text">From  : </label><br>
	<input type="disabled" class="form-control" value="<?php foreach($res as $r){ echo $r->customer; } ?>"  name="customer" readonly>
	</div>
	<div class="form-group">
	<label for="email">Ticket content</label><br>
	<p>Pilih tanggal sewa : </p><input type="date" id="date" value="" name="isi_tiket" onchange="datepicker()" required="">
	<textarea id="tiket" class="form-control" style="widh:500px;height:300px" name="isi_tiket" required=""></textarea>
	</div>
	<button type="submit" class="btn btn-solid float-left">submit</button>
</form>
<script>
function datepicker() {
	var date = document.getElementById("date").value;
	var f =
"Dear vendor <?php foreach ($res as $v) { $vendor = $v->vendor; } echo $vendor ?> \n\n" +

"Berikut kami tetapkan tanggal penerimaan barang yang sudah kami sewa\n\n"+

"tanggal : " + date + "\n\n"+

"Terimakasih Atas support dan kerja sama nya \n\n\n"+

"Regards, \n"+

"<?php foreach ($res as $v) { $customer = $v->customer; } echo $customer ?> \n"+

"Rencara Client ";
document.getElementById("tiket").value = f;
}
	
	
</script>
</div>
</div>
<!-- Home slider -->

<br>
<br>	
<!-- service layout -->
<div class="container">
    <section class="service border-section small-section">
        <div class="row">
            <div class="col-md-4 service-block">
                <div class="media">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
                        <path d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0" fill="#ff4c3b" /> </svg>
                    <div class="media-body">
                        <h4>free shipping</h4>
                        <p>free shipping world wide</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-block">
                <div class="media">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px" height="512px">
                            <g>
                                <g>
                                    <g>
                                        <path d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160 c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24 c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z" fill="#ff4c3b" />
                                        <path d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552 c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8 c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32 l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8 S332.418,464,328,464z" fill="#ff4c3b" />
                                        <path d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0 C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288 V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2 c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296 c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0 c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248 c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952 C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112 C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568 c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z" fill="#ff4c3b" />
                                        <path d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704 c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947 c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888 C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002 c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002 C224.781,213.464,224.781,218.53,221.658,221.654z" fill="#ff4c3b" /> </g>
                                </g>
                            </g>
                        </svg>
                    <div class="media-body">
                        <h4>24 X 7 service</h4>
                        <p>online service for new customer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-block">
                <div class="media">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
                        <path d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0" fill="#ff4c3b" />
                        <path d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0" fill="#ff4c3b" />
                        <path d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0" fill="#ff4c3b" />
                        <path d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0" fill="#ff4c3b" />
                        <path d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0" fill="#ff4c3b" />
                        <path d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0" fill="#ff4c3b" /> </svg>
                    <div class="media-body">
                        <h4>festival offer</h4>
                        <p>new online special festival offer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
</div>
<!-- service layout  end -->


<!-- blog section -->



<!-- instagram section -->

<!-- instagram section end -->


<!--  logo section -->

<!--  logo section end-->


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

<!-- Bootstrap Notifiorder_idion js-->
<script src="https://store.rencara.com/ct/js/bootstrap-notify.min.js"></script>

<!-- Fly cart js-->
<script src="https://store.rencara.com/ct/js/fly-cart.js"></script>

<!-- Theme js-->
<script src="https://store.rencara.com/ct/js/script.js"></script>
<script>
var check = "<?php foreach($notif as $n){ echo $n->subject; }?>"
window.onload=function(){
    if (check.match(/Re : Ask Tanggal sewa order number : /g)){
		$("#reply").hide();
		$("#showrep").show();
	}
	
	
};
function funct() {
	$("#formrep").show();
	$("#formrep2").show();
}
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


</html>
