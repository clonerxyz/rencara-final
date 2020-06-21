<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Manage vendor
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Manage vendor</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    
					<script>
									var check = "<?php if ($this->session->flashdata('success')): ?><?php echo $this->session->flashdata('success'); ?><?php endif; ?>";
									window.onload=function(){
									 if (check)
									 {
										 alert('data berhasil di ubah');
									 }
									 
									};
									 </script>
					<div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h5>ALL Vendors</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            
                                   <div class="card-body vendor-table">
									  <table class="display" id="basic-1" width="100%" cellspacing="0">
										<thead>
										  <tr>
											<!--<th scope="col">image</th>-->
											<th scope="col">username</th>
											<th scope="col">email</th>
											<th scope="col">phone</th>
											<th scope="col">alamat</th>
											<th scope="col">status vendor</th>
											<th scope="col">action</th>
										  </tr>
										</thead>
										<tbody>
										<?php 
										$no = 1;
										foreach($vendor as $i){ 
										?>
										<tr>
											<!--<td><img class="imagen" style="width:30px;height:30px;" src="https://store.rencara.com/ct/img/<?php echo $i->imgv ?>"/></td>-->
											<td><?php echo $i->u_v ?></td>
											<td><?php echo $i->contact ?></td>
											<td><?php echo $i->phone ?></td>
											<td><?php echo $i->alamat ?></td>
											<td><?php echo $i->v_status ?></td>
											<td>
											<a href="https://store.rencara.com/admin/infovendor/<?php echo $i->idv ?>" class="fa fa-info i" aria-hidden="true"></a>
											&nbsp;
											
											<a href="https://store.rencara.com/admin/editvendor/<?php echo $i->idv ?>" class="fa fa-wrench e" aria-hidden="true"></a>
											&nbsp;
											
											<a data-toggle="modal" data-original-title="test" data-target="#<?php echo $i->idv ?>-detail" href="#" class="fa fa-id-card-o" aria-hidden="true"></a>
											&nbsp;
											
											<!--<a data-toggle="modal" data-original-title="test" data-target="#<?php echo $i->idv ?>-ktp" href="#" class="fa fa-id-card" aria-hidden="true"></a>-->
											
											
											<a href="https://store.rencara.com/admin/vendr/<?php echo $i->idv ?>" class="fa fa-trash r" aria-hidden="true"></a>
											&nbsp;
											
											</td>
										  </tr>
										 <?php } ?>
										 </tbody>
									  </table>
									  </div>
                                    
                               
                                
                            </div>
                        
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
									<?php 
										$no = 1;
										foreach($vendor as $i){ 
										?>
									<div class="modal fade" id="<?php echo $i->idv ?>-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">NPWP & KTP Vendor <?php echo $i->n_vendor ?></h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation">
                                                        <div class="form">
                                                            <img class="imagen" style="width:350px;height:200px;" src="https://store.rencara.com/ct/img/<?php echo $i->npwp ?>">
                                                        </div>
														<div class="form">
                                                            <img class="imagen" style="width:350px;height:200px;" src="https://store.rencara.com/ct/img/<?php echo $i->ktp ?>">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <!--<button class="btn btn-primary" type="button">Save</button>-->
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	

									<?php } ?>
									
        </div>
			

        
