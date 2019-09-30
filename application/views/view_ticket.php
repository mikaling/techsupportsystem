<!-- ACTIONS -->
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
              <h4>Ticket Details</h4>
              </div>
            <div class="card-body">
              <form id="form-one" method="post" action="<?php echo base_url(). 'ticket/complete/' . $ticket_det[0]->ticket_id;?>">
                <div class="form-group">
                  <label for="title">Title</label>
                  <p class="form-control"><?php echo $ticket_det[0]->title;?></p>
                </div>
                <div class="form-group">
                  <label for="body">Description</label>
                  <p name="" class="form-control"><?php echo $ticket_det[0]->description; ?></p>
                </div>
                <div class="form-group">
                  <label>Set Category</label>
                  <select class="form-control" name="category">
                    <option value="Network">Network</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Power">Power</option>
                    <option value="Other" selected>Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Set Priority</label>
                  <select class="form-control" name="priority">
                    <option value="Critical">Critical</option>
                    <option value="High">High</option>
                    <option value="Normal" selected>Normal</option>
                    <option value="Low">Low</option>
                  </select>
                </div>

                <div class="row py-4 mb-4 bg-light">
                <div class="col-md-3">
                  <button class="btn btn-success btn-block baton" type="submit">
                    <i class="fas fa-check"></i> Save Changes
                  </button>
                  </div>
                  <div class="col-md-3">
                    <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addCommentModal">
                      <i class="fas fa-comment-alt"></i> Add Comment
                    </a>
                  </div>
              </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- ADD COMMENT MODAL -->
  <div class="modal" id="addCommentModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add Comment</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(). 'ticket/add_comment/' . $ticket_det[0]->ticket_id;?>" method="post" id='comment_form'>
            <div class="form-group">
              <textarea name="comment" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" form="comment_form" type="submit">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
