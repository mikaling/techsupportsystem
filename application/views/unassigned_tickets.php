<section id="posts">
    <div class="container" style="margin-top: 1%">
      <div class="row">
        <div class="col-md-7">
          <div class="card">
            <div class="card-header">
              <h4>Unassigned Tickets</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($ticket as $row): ?>
                  <tr>
                    <td><?php echo $row->ticket_id ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->description ?></td>
                    <td><?php echo $row->status ?></td>
                    <td>
                        <a href="<?php echo base_url() . 'ticket/claim/' . $row->ticket_id;?>" class="btn btn-secondary"> Claim </a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
              <p><?php echo $links; ?></p>
          </div>
        </div>

      </div>
    </div>
  </section>
