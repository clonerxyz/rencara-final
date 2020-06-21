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
                    <div class="col-xl-8">
                        <div class="card tab2-card">
										<div class="card-body">
										<form class="needs-validation user-add" action="<?php echo base_url('admin/catnewn'); ?>" method="POST">
										
                                            <div class="form-group row">
												<input type="hidden" value="<?php foreach($cat as $i) { echo $i->idcat; } ?>" name="id">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">Input New Name Category</label>
                                                <input name="name" value="" class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="">
                                            </div>
											<hr>
											<button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
										</div>
										</div>
                    </div>
				</div>
			</div>
		</div>
