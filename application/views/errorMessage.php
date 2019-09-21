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
	width:1000px;
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
	  <div class="table-responsive">
        <?php
		 if($this->session->flashdata('action'))
		 {
			 echo '
			 <div class="alert alert-danger alert-dismissible">
		       <a href="#" class="close" data-dismiss="alert"
			     aria-label="close">&times;</a>
			     ' . $this->session->flashdata('acion') .'
		      </div>
			 ';
		 }
		?>	  
	  </div>
	 
	    
	</div>
	</div>
	</div>
	</div>
</body>
</html>



