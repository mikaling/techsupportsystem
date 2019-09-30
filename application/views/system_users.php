<section id="staff">
<div class="container" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Staff</h4></div>
                <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php foreach($staff as $row_one): ?>
                    <tr>
                        <td><?php echo $row_one->user_id; ?></td>
                        <td><?php echo $row_one->name; ?></td>
                        <td><?php echo $row_one->email; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'user/delete/' . $row_one->user_id;?>" class="btn btn-danger">
                                <i class="fas fa-minus-square"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>

<section id="support">
<div class="container" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Support</h4></div>
                <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php foreach($support as $row_one): ?>
                    <tr>
                        <td><?php echo $row_one->user_id; ?></td>
                        <td><?php echo $row_one->name; ?></td>
                        <td><?php echo $row_one->email; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'user/delete/' . $row_one->user_id;?>" class="btn btn-danger">
                                <i class="fas fa-minus-square"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>

<section id="admin">
<div class="container" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Admins</h4></div>
                <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <?php if($this->session->userdata('user_type') == "admin") : ?>
                      <th></th>
                    <?php endif ?>
                </tr>
                </thead>

                <tbody>
                    <?php foreach($admin as $row_one): ?>
                    <tr>
                        <td><?php echo $row_one->user_id; ?></td>
                        <td><?php echo $row_one->name; ?></td>
                        <td><?php echo $row_one->email; ?></td>
                        <?php if($this->session->userdata('user_type') == "admin") : ?>
                          <td>
                              <a href="<?php echo base_url() . 'user/delete/' . $row_one->user_id;?>" class="btn btn-danger">
                                  <i class="fas fa-minus-square"></i> Delete
                              </a>
                          </td>
                        <?php endif ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
