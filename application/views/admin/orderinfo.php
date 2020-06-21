<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Order <?php foreach ($ord as $o) {  } echo $o->midtrans_id; ?>
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Order <?php foreach ($ord as $o) {  } echo $o->midtrans_id; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
			<div class="container-fluid">
				<div class="card">
				<div class="card-header">
				<h5>Order <?php foreach ($ord as $o) {  } echo $o->midtrans_id; ?> Detail</h5>
				</div>
				<div class="card-body">
				<div class="row">
				<div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-details text-center">
                                    <img src="https://store.rencara.com/ct/img/<?php foreach ($ord as $i){  } echo $i->imgc; ?>" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                    <h5 class="f-w-600 mb-0"><?php foreach ($ord as $i){  } echo $i->n_cust; ?></h5>
                                    <span><?php foreach ($ord as $i){  } echo $i->contact; ?></span><br>
									<span><?php foreach ($ord as $i){  } echo $i->alamat; ?></span>
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
                                    <h5 class="f-w-600">Detail Order</h5>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Total Quantity : <span class="pull-right"><?php $a=0; foreach ($ord as $o) { $a+=$o->quantity; } echo $a; ?></span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: <?php $a=0; foreach ($ord as $o) { $a+=$o->quantity; } echo $a; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Total Price : <span class="pull-right">Rp.<?php $a=0; foreach ($ord as $o) { $a+=$o->quantity * $o->price ; } echo number_format($a,2,",",".") ?></span></h6>
                                            
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Vendor : <span class="pull-right"><?php foreach ($ord as $o) { } echo $o->vendor; ?></span></h6>
                                            
                                        </div>
                                    </div>
									<div class="media">
                                        <div class="media-body">
                                            <h6>Status transaction : <span class="pull-right"><?php foreach ($ord as $o) { } echo $o->payable; ?></span></h6>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-8">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                        <h5 class="f-w-600">Detail item</h5>
                                        <div class="table-responsive profile-table">
                                            <table class="display" id="basic-1" width="100%" cellspacing="0">
											<thead>
										  <tr>
											<th scope="col">Image</th>
											<th scope="col">Item name</th>
											<th scope="col">Quantity</th>
											<th scope="col">price</th>
										  </tr>
										</thead>
                                                <tbody>
												
												<?php foreach ($ord as $o) {?>
                                                <tr>
                                                    
													<td><img style="width:40px;height:40px;" src="https://store.rencara.com/ct/img/<?php  echo $o->imgi;  ?>"></td>
													<td> - <?php  echo $o->name;  ?></td>
													<td><?php  echo $o->quantity;  ?></td>
													<td>Rp.<?php  echo number_format($o->price,2,",",".")  ?></td>
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
					</div>
				</div>
				</div>
				
			</div>
</div>