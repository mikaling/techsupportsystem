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
	background:#f8f8f8;
	border-top-left-radius:15% 50%;
	border-bottom-left-radius:15% 50%;
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
	     <div class="col-md-5 register-left">
		     <br><br><br><br><br><br><h3>Already Have an<br> Account?</h3>
			 <a href="#">Login</a>
		 </div>
		 
	<div class="col-md-7 register-right">
	     <h2>Register Here</h2>
		 <div class="register-form">
		    <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Full Name" name="name">
             </div>

            <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Password" name="pass"> 
             </div>
  
             <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Confirm Password" name="con_pass">
            </div>
			
			 <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email" name="email">
            </div>
			<br>
			 <input type="radio" name="gender" value="male"> Male
             <input type="radio" name="gender" value="female"> Female
             <input type="radio" name="gender" value="other"> Other<br> 

			 <button type="button" class="btn btn-primary">Register</button>
		 </div>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>



<!--  Text


<div class="register-form">
		     <div class="form-group">
			 <input type="text" class="form-control"placeholder="Name">
			 </div>
			 <div class="form-group">
			 <input type="text" class="form-control"placeholder="Password">
			 </div>
			 <div class="form-group">
			 <input type="email" class="form-control"placeholder="Confirm Password">
			 </div>
			 <div class="form-group">
			 <input type="password" class="form-control"placeholder="Email Address">
			 </div>
			 <button type="button" class="btn btn-primary">Register</button>
		 </div>






<!--<form method="post">
		<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="pass"/></td>
  </tr>
 
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  
  <tr>
    <td>Select Your Course </td>
    <td>
	<select name="course">
		<option value="">Select Course</option>
		<option>PHP</option>
		<option>Java</option>
		<option>Wordpress</option>
	</select>
	</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Register Me"/></td>
  </tr>
</table>
 
	</form>-->