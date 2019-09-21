<!DOCTYPE html>
<html>
<head>
<title>Employee Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/registration.css">-->
<style>
body
{
	background-image:linear-gradient(to right, #841801, #ca2300);
	margin-top:150px !important;
}
.register-left
{
	text-align:center;
	color:#fff;
	padding:30px;
}
.register-right
{
	border:none;
	background:#FFFFFF;
	border-top-left-radius:15%;
	border-bottom-left-radius:15%;
	padding:50px;
	width:1200px;
	margin-bottom:100px;
	
}
.register-right h2
{
	text-align:center;
	margin-bottom:10px;
	color:#555;
}
.register-form
{
	padding:30px;

}
.register-right .btn-primary
{
	
	float:right;
	border-radius:1.5rem;
	border:none;
	width:120px;
	background:#841801;
	font-weight:600;
	color:#fff;
	margin-top:20px;
	padding:10px;
}
.register-right .btn-primary:hover
{
	background:#ca2300;
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 10px;
}

.icon {
  padding: 10px;
  background: #841801;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 8px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

</style>
</head>
 
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-10offset=md-1">
	<div class="row">
	     <div class="col-md-5 register-left">
		     <br><br><br><br><br><br><h3>Already have an<br> account?</h3>
			 <a href="login">Login</a>
		 </div>
	
     
		 
	<div class="col-md-7 register-right">
	 <?php
	/*if(validation_errors()!='')
	 {
		 echo '
		 <div class="alert alert-danger alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert"
			  aria-label="close">&times;</a>
			  ' . validation_errors() .'
		  </div>
		 ';
	 }	*/	 
	?>
	
	<form method="post" action="<?php echo base_url(); ?>index.php/User/insert_validation">
			<h2>
				Register Here
			  <img src="<?php echo base_url();?>assets/images/index.jpg" style="float: right; width: 12%"/>
		 	</h2>
		 <div class="register-form">
		    <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Full Name" name="name">
             </div>
			 <span class="text-danger"><?php echo form_error('name'); ?></span>

            <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Password" name="pass"> 
             </div>
			 <span class="text-danger"><?php echo form_error('pass'); ?></span>
  
             <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Confirm Password" name="con_pass">
            </div>
			<span class="text-danger"><?php echo form_error('con_pass'); ?></span>
			
			 <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email" name="email">
            </div>
			<span class="text-danger"><?php echo form_error('email'); ?></span>
			<div>
			<?php //echo @$error; ?>
			</div>

			 <input type="submit" class="btn btn-primary" name="register"value="Register">
		 </div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
</body>
</html>



