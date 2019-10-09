<section id="tickets">
<div class="container" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Closed Tickets</h4></div>
                <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Priority</th>
                    <th>Opened Date</th>
                    <th>Opened By</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php foreach($closed_tickets as $row): ?>
                    <tr>
                        <td><?php echo $row->ticket_id; ?></td>
                        <td><?php echo $row->title; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->category; ?></td>
                        <td><?php echo $row->priority; ?></td>
                        <td><?php echo $row->opened_date; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'ticket/view/' . $row->ticket_id;?>" class="btn btn-secondary">
                                <i class="fas fa-angle-double-right"></i> Details
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
