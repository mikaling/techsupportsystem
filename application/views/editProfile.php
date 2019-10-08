<!DOCTYPE html>
<html>
<head>
<title>Employee Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
 <div class="container">
 <div id="page-wrapper">
   <div class="row">
      <div class="col-lg-12">
	     <h1 class="page-header"><i class "fa fa-user"></i>Profile</h1>
	  </div>
	</div>
	<div class="row">
	  <div class="col-lg-12">
	      <?php if($error=$this->session->flashdata('success-msg')):?>
		     <div class="alert alert-success alert-dismissable" role="alert">
			     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				 <strong>Success!</strong><?=$error?>
			 </div>
			 <?php endif;?>
			 <?php if($error=$this->session->flashdata('error-msg')):?>
		     <div class="alert alert-danger alert-dismissable" role="alert">
			     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?=$error?>
			 </div>
			 <?php endif;?>
			 
	     <div class="panel panel-green">
		  <div class="panel-body">
		     <form method="post" action="<?php echo base_url();?>User/editProfile">
			   <div class="row">
			     <div class="col-lg-4">
				    <div class="form-group">
					 <label>User Full Name</label>
					 <input type="text" value="<?php echo $this->session->userdata('name')?>" name="name" class="form-control">
					 <?php echo form_error('name'); ?>
					</div>
				 </div>
				 <div class="col-lg-4">
				    <div class="form-group">
					 <label>Email</label>
					 <input type="email" value="<?php echo $this->session->userdata('email')?>" name="email" class="form-control">
					 <span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>
				 </div>
			    </div>
				<div class="row">
				   <div class="col-lg-4"></div>
				   <div class="col-lg-4"></div>
				   <div class="col-lg-4">
				       <input type="submit" class="btn btn-primary btn-lg btn-block" value ="Update Details"/>

				    </div>
				</div>
				</form>
		  </div>
		 </div>
	   </div>
	 </div>
 </div>
 </div>
 
 
 </body>
 </html>