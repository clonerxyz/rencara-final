<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>ALL order
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">ALL order</li>
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
                                <h5>ALL Orders</h5>
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
											<th scope="col">Order ID</th>
											<th scope="col">Transaction Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
											<th scope="col">Total Price&nbsp;&nbsp;&nbsp;&nbsp;</th>
											<th scope="col">Transaction time&nbsp;&nbsp;&nbsp;</th>
											<th scope="col">Payment method&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
											<th scope="col">action</th>
										  </tr>
										</thead>
										<tbody>
										<?php 
										foreach($filter as $filt=>$item ){
										$filter[$filt] = (array)$item;
										$it = $filter[$filt]['order_id'];
										$it2 = $filter[$filt]['transaction_status'];
										$it3 = $filter[$filt]['gross_amount'];
										$it4 = $filter[$filt]['transaction_time'];
										$it5 = $filter[$filt]['payment_type'];
										?>
										<tr>
											
											<td><?php echo $it ?>&nbsp;&nbsp;</td>
											<td><?php echo $it2 ?></td>
											<td>Rp.<?php echo number_format($it3,2,",",".") ?></td>
											<td><?php echo $it4 ?></td>
											<td><?php echo $it5 ?>&nbsp;&nbsp;</td>
											<td>
											
											<a href="https://store.rencara.com/admin/order/<?php echo $it ?>" class="fa fa-info i" aria-hidden="true"></a>
											&nbsp;
											<a href="https://store.rencara.com/admin/rorder/<?php echo $it ?>" class="fa fa-trash r" aria-hidden="true"></a>
											&nbsp;
											
											</td>
										  </tr>
										 <?php } ?>
										 </tbody>
									  </table>
									  <br><br><br>
										<button onclick="window.location.href = 'https://store.rencara.com/admin/updatetrans';" type="button" class="btn btn-primary">Update transaksi</button>
                                
									  </div>
                                    
                               </div>
                           
                        
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
									
									
        </div>
			

        
