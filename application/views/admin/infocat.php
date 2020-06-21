<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category Info
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Category Info</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid">
<div class="row">
<div class="col-xl-12">
<div class="card">
<div class="card-body tab2-card">
<ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
<?php foreach ($cat as $c) { ?>
  <li class="nav-item">
    <a class="nav-link " href="#<?php echo $c->n_cat ?>" role="tab" data-toggle="tab"><?php echo $c->n_cat ?></a>
  </li>
  <?php } ?>
</ul>
</div>
</div>
</div>
<div class="col-xl-12">
<div class="card">
<div class="card-body">
 <div class="tab-content">
 <?php foreach ($cat as $c) { ?>
  <div role="tabpanel" class="tab-pane fade" id="<?php echo $c->n_cat ?>">
  <div class="card-header">
  <h5><?php echo $c->n_cat ?></h5>
  </div>
  <div style="height=:1000px;" class="embed-responsive embed-responsive-1by1">
  <iframe  src="https://store.rencara.com/admin/catiframe/<?php echo $c->idcat ?>" border="none" target="_parent"></iframe>
  </div>
  </div>
  <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
