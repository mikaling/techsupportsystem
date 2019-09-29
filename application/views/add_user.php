<section id="actions" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="centa">
      <div class="col-md-3">
        <a href="<?php echo base_url(). 'ticket'; ?>" class="btn btn-light btn-block">
          <i class="fas fa-arrow-left"></i> Back To Dashboard
        </a>
      </div>
    </div>
  </div>
</section>

<section id="details">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Add User</h4>
            </div>
          <div class="card-body">
            <form id="form-one" method="post" action="<?php echo base_url() . 'user/add'; ?>">
              <div class="form-group">
                <i class="fa fa-user icon"></i>
                <label for="title">Full Name</label>
                  <input type="text" class="form-control" name="name">
              </div>

              <div class="form-group">
                <i class="fa fa-envelope icon"></i>
                <label for="body">Email Address</label>
                  <input type="email" class="form-control" name="email">
              </div>

              <div class="form-group">
                <i class="fa fa-key icon"></i>
                <label for="body">Password</label>
                <input class="form-control" type="password" name="pass">
               </div>

               <div class="form-group">
                <i class="fa fa-key icon"></i>
                <label for="body">Confirm Password</label>
                <input class="form-control" type="password" name="con_pass">
              </div>

              <div class="form-group">
                <label>User Type</label>
                <select class="form-control" name="user_type">
                  <option value="staff" selected>Staff</option>
                  <option value="support">Support</option>
                  <?php if($this->session->userdata('user_type') == "admin") {
                    echo "<option value='admin'>Admin</option>";
                  } ?>
                </select>
              </div>



              <div class="col-md-3">
                <button class="btn btn-success btn-block baton" type="submit">
                  <i class="fas fa-check"></i> Add User
                </button>
              </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
