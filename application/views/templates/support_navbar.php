<section id="navbarmain">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="#" class="navbar-brand">Logo<!--<img src="<?php echo base_url(); ?>assets/images/index.jpg">--></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="<?php echo base_url() . 'ticket'; ?>" class="nav-link <?php if($this->uri->segment(1) == 'ticket') echo 'active';?>">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="#" class="nav-link">Tickets</a>
          </li>
          <li class="nav-item px-2">
            <a href="#" class="nav-link">Analysis</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url() . 'user/insert'; ?>" class="nav-link">Add User</a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Welcome <?php echo $this->session->email;?>
            </a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profile
              </a>
              <a href="#" class="dropdown-item">
                <i class="fas fa-cog"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'user/logout'?>" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 bg-secondary text-red">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-cog"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
</section>
