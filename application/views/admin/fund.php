<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>withdraw page vendor
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">withdraw page vendor</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
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
                                <h5>ALL fund vendor</h5>
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
                            
                                   <div class="card-body ">
									   <table class="display" id="basic-1" width="100%" cellspacing="0">
										<thead>
										  <tr>
											<th scope="col">status</th>
											<th scope="col">Order Id</th>
											<th scope="col">Amount</th>
											<th scope="col">Vendor</th>
											<th scope="col">Rekening Detail</th>
											<th scope="col">Change status</th>
										  </tr>
										</thead>
										<tbody>
										<?php 
										$no = 1;
										foreach($fund as $i){ 
										?>
										<script>
									  function showcat<?php echo $i->idf ?>() {
										  $("#catshow<?php echo $i->idf ?>").show();
										  $("#trig<?php echo $i->idf ?>").hide();
									  }
									  </script>
										<tr>
											<td><?php echo $i->status ?></td>
											<td><?php echo $i->order_id ?></td>
											<td>Rp.<?php echo number_format($i->price,2,',','.'); ?></td>
											<td><?php echo $i->vendor ?></td>
											<td><pre><?php echo $i->rekening ?></pre></td>
											<td>
											<button id="trig<?php echo $i->idf ?>" class="btn btn-primary" onclick="showcat<?php echo $i->idf ?>()">Change status</button>
											<div style="display:none;" id="catshow<?php echo $i->idf ?>" class="form-group">
											<form action="<?php echo base_url('admin/sttsfund'); ?>" method="POST">
											<input type="hidden" value="<?php echo $i->idf ?>" name="idf">
											<select  class="form-control" id="exampleFormControlSelect1" name="status">
											  <option value="belum di acc" >Tolak persetujuan</option>
											  <option value="sudah di acc" >Acc persetujuan withdraw</option>
											</select>
											<hr>
											<button type="submit" class="btn btn-primary" onclick="showcat()">Change status</button>
											</form>
										  </div>
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
</div>