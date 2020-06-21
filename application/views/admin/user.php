
	

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
                                <h3>Manage user
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Manage user</li>
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
                                <h5>ALL Users</h5>
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
											<th scope="col">image</th>
											<th scope="col">username</th>
											<th scope="col">email</th>
											<th scope="col">phone</th>
											<th scope="col">alamat</th>
											<th scope="col">action</th>
										  </tr>
										</thead>
										<tbody>
										<?php 
										$no = 1;
										foreach($usr as $i){ 
										?>
										<tr>
											<td><img class="imagen" style="width:30px;height:30px;" src="https://store.rencara.com/ct/img/<?php echo $i->imgc ?>"/></td>
											<td><?php echo $i->u_c ?></td>
											<td><?php echo $i->contact ?></td>
											<td><?php echo $i->phone ?></td>
											<td><?php echo $i->alamat ?></td>
											<td>
											<a href="https://store.rencara.com/admin/infocust/<?php echo $i->idc ?>" class="fa fa-info i" aria-hidden="true"></a>
											&nbsp;
											
											<a href="https://store.rencara.com/admin/editcust/<?php echo $i->idc ?>" class="fa fa-wrench e" aria-hidden="true"></a>
											&nbsp;
											
											<a href="https://store.rencara.com/admin/rcust/<?php echo $i->idc ?>" class="fa fa-trash r" aria-hidden="true"></a>
											
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

        </div>
			

        
