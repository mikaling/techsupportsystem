<section id="tickets">
<div class="container" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>My Tickets</h4></div>
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
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php foreach($ticket_two as $row_two): ?>
                    <tr>
                        <td><?php echo $row_two->ticket_id; ?></td>
                        <td><?php echo $row_two->title; ?></td>
                        <td><?php echo $row_two->description; ?></td>
                        <td><?php echo $row_two->status; ?></td>
                        <td><?php echo $row_two->category; ?></td>
                        <td><?php echo $row_two->priority; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'ticket/view/' . $row_two->ticket_id;?>" class="btn btn-secondary">
                                <i class="fas fa-angle-double-right"></i> Details
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . 'message/view/' . $row_two->ticket_id;?>" class="btn btn-secondary">
                                <i class="fas fa-comment-alt"></i> Chat
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
