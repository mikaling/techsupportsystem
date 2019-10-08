

<div class="layout" style="padding:50px;">
<div class="user-pic">
   <img src="<?php echo base_url('assets/images/no_image.png');?>" class="img-thumbnail" alt= "user profile image"style="width:250px;height:250px"/>
   <div style="float:right;margin-right:650px;font-family:sans serif;margin-top:70px">
<h1><?php echo $users->name?></h1>
<h5 style="color:dodgerblue"><?php echo $users->email." - ".$users->user_type. " member"?></h5>
<div class="form-group">
    <label for="profileImage">Profile Image</label>
	<input type="file"name="profileImage"class="form-control">
</div>

</div>
<div class="form-group" style="width:250px;margin-top:20px">
     <input type="submit" name="save-user" class="btn btn-primary btn-block" value="Save User"/>
</div>
   <!-- <div>
  </br>
   <a href="#" class="btn btn-success btn-block">Upload Image</a>
   </div>-->
</div>

<br>
<h3>Account</h3>
<br></br>
<div class="row">
    <div class="col-md-9">
	    <div class="usr-profile">
		   <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"value="<?php echo $users->name?>"readonly="readonly">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3"value="<?php echo $users->email?>"readonly="readonly">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3"value="<?php echo $users->user_type?>"readonly="readonly">
    </div>
  </div>
 
  
</form>
		</div>
	</div>
	
</div>
<div class="userlinks"style="margin-left:160px">
	     <?php echo anchor('','Edit Profile')?><br>
		 <?php echo anchor('','Change Password')?>
	</div>

</div>