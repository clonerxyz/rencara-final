
	

        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3><?php foreach ($info as $i){ echo $i->n_vendor; } ?>
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active"><?php foreach ($info as $i){ echo $i->n_vendor; } ?> profile detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-details text-center">
                                    <img src="https://store.rencara.com/ct/img/<?php foreach ($info as $i){ echo $i->imgv; } ?>" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                    <h5 class="f-w-600 mb-0"><?php foreach ($info as $i){ echo $i->n_vendor; } ?></h5>
                                    <span><?php foreach ($info as $i){ echo $i->contact; } ?></span>
                                    <div class="social">
                                        <div class="form-group btn-showcase">
                                            <!--<button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                            <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                                            <button class="btn social-btn btn-google d-inline-block mr-0"><i class="fa fa-twitter"></i></button>-->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="project-status">
                                    <h5 class="f-w-600">Vendor status </h5>
									<div class="media">
                                        <div class="media-body">
                                            <h6>Status Account : <span class="pull-right"><i style="display:none;" id="on" class="fa bg-success fa-power-off fa-2x" aria-hidden="true"></i><i style="display:none;" id="off" class="fa bg-dark fa-power-off fa-2x" aria-hidden="true"></i></span></h6>
                                        </div>
                                    </div>
									<hr>
									<div class="media">
                                        <div class="media-body">
                                            <h6>All item <span class="pull-right"><?php echo $citem4 ?></span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $citem4 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>All item order<span class="pull-right"><?php echo $citem ?></span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $citem ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>All item order success <span class="pull-right"><?php echo $citem2 ?></span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo $citem2 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>All item order failed<span class="pull-right"><?php echo $citem3 ?></span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $citem3 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Edit Password</a>
                                    </li>
									<li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                        <h5 class="f-w-600">Edit password <?php foreach ($info as $i){ echo $i->n_vendor; } ?></h5>
                                        <div class="card tab2-card">
										<div class="card-body">
										<form class="needs-validation user-add" action="<?php echo base_url('admin/vendprw'); ?>" method="POST">
										
                                            
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span><?php foreach ($info as $i){ echo $i->n_vendor; } ?> password</label>
                                                <input name="pw" value="" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" required="">
                                            </div>
                                            <div class="form-group row">
												<input type="hidden" value="<?php foreach($info as $i) { echo $i->idv; } ?>" name="id">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Re Type <?php foreach ($info as $i){ echo $i->n_vendor; } ?> password</label>
                                                <input name="pw" value="" class="form-control col-xl-8 col-md-7" id="validationCustom1" type="password" required="">
                                            </div>
											<hr>
											<button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
										</div>
										</div>
                                    </div>
										<div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                        <div class="row">
										
										<div class="col-md-12">
										<h5>Npwp info</h5><br>
                                        <img class="imagen" style="width:350px;height:200px;" src="https://store.rencara.com/ct/img/<?php foreach ($info as $i){ echo $i->npwp; } ?>"><br>
                                        </div>
										<div class="col-md-12">&nbsp;</div>
										<div class="col-md-12">
										<h5>ktp info</h5><br>
                                        <img class="imagen" style="width:350px;height:200px;" src="https://store.rencara.com/ct/img/<?php foreach ($info as $i){ echo $i->ktp; } ?>"><br>
                                        </div>
										</div><br>
											<h5>Info : jika npwp dan ktp tidak valid mohon menonaktifkan account dengan menggunakan tombol di bawah</h5>
                                            <button onclick="window.location.href = 'https://store.rencara.com/admin/dissvendor/<?php foreach($info as $i) { echo $i->idv; } ?>';" type="button" class="btn btn-primary">Disable Account</button>
											<div class="col-md-12">&nbsp;</div>
											<h5>Info : jika npwp dan ktp sudah valid mohon mengaktifkan account dengan menggunakan tombol di bawah</h5>
                                            <button onclick="window.location.href = 'https://store.rencara.com/admin/envendor/<?php foreach($info as $i) { echo $i->idv; } ?>';" type="button" class="btn btn-primary">Enable Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
		<!--<script src="https://store.rencara.com/ct/js/jquery-3.3.1.min.js"></script>-->
		<script>
		window.onload=function(){
		var check = "<?php foreach ($status as $s){ echo $s->v_status; }?>"
		if (check === 'acc')
		{
			$("#on").show();
		}
		else {
			$("#off").show();
		}
		};
		</script>
		

        
