<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <title>Tech Support Landing Page</title>
</head>

<body>
<section id="navbarmain">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="#" class="navbar-brand">Logo</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="#" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="#" class="nav-link">Tickets</a>
          </li>
          <li class="nav-item px-2">
            <a href="#" class="nav-link">Analysis</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Welcome X
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
            <a href="#" class="nav-link">
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

  <section id="posts">
    <div class="container" style="margin-top: 1%">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Unassigned Tickets</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Category</th>
                    <th>Priority</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                /*foreach ($data as $row) {
                  echo "<tr>";
                  echo "<td>".$row->ticket_id."</td>";
                  echo "<td>".$row->title."</td>";
                  echo "<td>".$row->status."</td>";
                  echo "<td>".$row->category."</td>";
                  echo "<td>".$row->priority."</td>";
                  echo '<td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Claim
                    </a>
                  </td>';
                  echo "</tr>";*/
                  foreach ($ticket as $row){
                  echo "<tr>";
                  echo "<td>".$row->ticket_id."</td>";
                  echo "<td>".$row->title."</td>";
                  echo "<td>".$row->status."</td>";
                  echo "<td>".$row->category."</td>";
                  echo "<td>".$row->priority."</td>";
                  echo '<td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Claim
                    </a>
                  </td>';
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
              <p><?php echo $links; ?></p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
    
  <section id="">
    <div class="container" style="margin-top: 1%">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <h4>My Tickets</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Category</th>
                  <th>Priority</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                /*foreach ($data as $row) {
                  echo "<tr>";
                  echo "<td>".$row->ticket_id."</td>";
                  echo "<td>".$row->title."</td>";
                  echo "<td>".$row->status."</td>";
                  echo "<td>".$row->category."</td>";
                  echo "<td>".$row->priority."</td>";
                  echo '<td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Claim
                    </a>
                  </td>';
                  echo "</tr>";*/
                  foreach ($ticket_two as $row_two){
                  echo "<tr>";
                  echo "<td>".$row_two->ticket_id."</td>";
                  echo "<td>".$row_two->title."</td>";
                  echo "<td>".$row_two->description."</td>";
                  echo "<td>".$row_two->status."</td>";
                  echo "<td>".$row_two->category."</td>";
                  echo "<td>".$row_two->priority."</td>";
                  echo '<td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>';
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
              <p><?php echo $links_two; ?></p>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Orbit Chemicals
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    CKEDITOR.replace('editor1');
  </script>
</body>

</html>
