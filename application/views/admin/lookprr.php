<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3><?php foreach($pro as $p) { echo $p->subject ; } ?> 
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="https://store.rencara.com/admin"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active"><?php foreach($pro as $p) { echo $p->subject ; } ?></li>
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
                                <h5><?php foreach($pro as $p) { echo $p->subject ; } ?></h5>
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
                            
                                   <div class="card-body">
									  <h5>To : <?php foreach($pro as $p) { echo $p->customer ; } ?><h5>
									  <h5>Sender : <?php foreach($pro as $p) { echo $p->vendor ; } ?><h5>
									  <h5>Subject : <?php foreach($pro as $p) { echo $p->subject ; } ?><h5>
									  <hr>
									  <h5>Ticket content : <h5>
									  <div class="form-group">
										<label for="exampleFormControlTextarea1"></label>
										<pre><textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="30">
										<?php foreach($pro as $p) { echo $p->isi_tiket ; } ?>
										</textarea></pre>
									  </div>
									  
									  </div>
                                    
                               
                                
                            </div>
                        
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
									
        </div>
			

        
