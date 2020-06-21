
	

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
                                <h3>Edit Profile
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Edit Profile</li>
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
									<form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/eprfi'); ?>">
                                    <img id="imgshow" src="https://store.rencara.com/ct/img/<?php foreach($img as $i) { echo $i->img; } ?>" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                    <h5 class="f-w-600 mb-0"><?php foreach($img as $i) { echo $i->u_a; } ?></h5>
                                    <span><?php foreach($img as $i) { echo $i->email; } ?></span>
                                   <div class="project-status">
                                    <h5 class="f-w-600">Upload image </h5>
									<script>
									var check = "<?php if ($this->session->flashdata('success')): ?><?php echo $this->session->flashdata('success'); ?><?php endif; ?>";
									window.onload=function(){
									 if (check)
									 {
										 alert('data berhasil di input');
									 }
									};
									 </script>
                                    <div class="media">
										<input type="hidden" value="<?php foreach($img as $i) { echo $i->ida; } ?>" name="id" required="">
										<div class="container">
										<input id="inputimg" class="text-center" type="file" name="img" accept=".jpg,.JPG,.JPEG,.PNG,.png,.svg," required="">
										</div>
                                    </div><br><br><br><br>
									<hr>
										<button type="submit" class="btn btn-primary">Upload</button>
                                    </form>
                                </div> 
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
					<div class="col-xl-8">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <form class="needs-validation user-add" action="<?php echo base_url('admin/eprf'); ?>" method="POST">
								
                                            <h4>Edit Profile</h4>
											<br>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Your Name</label>
                                                <input name="name" value="" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" required="">
                                            </div>
											<br>
                                            <div class="form-group row">
												<input type="hidden" value="<?php foreach($img as $i) { echo $i->ida; } ?>" name="id">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> phone</label>
                                                <input name="phone" value="" class="form-control col-xl-8 col-md-7" id="validationCustom1" type="number" required="">
                                            </div>
											<br>
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                <input name="email" value="" class="form-control col-xl-8 col-md-7" id="validationCustom2" type="email" required="">
                                            </div>
											<br>
											<br>
											<hr>
											<br>
											<button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <form class="needs-validation user-add" action="<?php echo base_url('admin/eprpw'); ?>" method="POST">
								
                                            <h4>Edit Password</h4>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Your password</label>
                                                <input name="pw" value="" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" required="">
                                            </div>
                                            <div class="form-group row">
												<input type="hidden" value="<?php foreach($img as $i) { echo $i->ida; } ?>" name="id">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Re Type Your password</label>
                                                <input name="pw" value="" class="form-control col-xl-8 col-md-7" id="validationCustom1" type="password" required="">
                                            </div>
											<hr>
											<button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
		

        
