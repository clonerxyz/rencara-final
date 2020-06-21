<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3><?php foreach ($cat as $i){ echo $i->n_cat; } ?> detail
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active"><?php foreach ($cat as $i){ echo $i->n_cat; } ?> detail</li>
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
                                <div class="project-status">
                                    <h5 class="f-w-600">Category status</h5>
									<hr>
									<div class="media">
                                        <div class="media-body">
                                            <h6>All item <span class="pull-right"><?php echo $item ?></span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $item ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
