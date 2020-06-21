<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category Manage
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Category Manage</li>
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
                                <h5>ALL Category</h5>
                                <div class="card-header-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcat">Add Category</button>
                                </div>
                            </div>
                            
                                   <div class="card-body ">
									  <table class="display" id="basic-1" width="100%" cellspacing="0">
										<thead>
										  <tr>
											<th scope="col">ID</th>
											<th scope="col">CATEGORY NAME</th>
											<th scope="col">Action</th>
										  </tr>
										</thead>
										<tbody>
										<?php 
										$no = 1;
										foreach($cat as $i){ 
										?>
										<tr>
											<td><?php echo $i->idcat ?></td>
											<td><?php echo $i->n_cat ?></td>
											<td>
											<a href="https://store.rencara.com/admin/infocat/<?php echo $i->idcat ?>" class="fa fa-info i" aria-hidden="true"></a>
											&nbsp;
											
											<a href="https://store.rencara.com/admin/editcat/<?php echo $i->idcat ?>" class="fa fa-wrench e" aria-hidden="true"></a>
											&nbsp;
											
											<a href="https://store.rencara.com/admin/rcat/<?php echo $i->idcat ?>" class="fa fa-trash r" aria-hidden="true"></a>
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
</div>
<div class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD CATEGORY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="https://store.rencara.com/admin/addcat" method="POST">
		<h5>Input Category Name<h5>
		<input class="form-control" name="n_cat" type="text" value="" placeholder="regex-regex" required="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>