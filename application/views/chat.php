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
              <h4>Chat</h4>
              </div>
            <div class="card-body">
              <?php
                $ticket_id2 = $this->uri->segment(3);
                foreach($ticket as $row1){
                $this->session->set_userdata('ticket_assigned_to', $row1->assigned_to);
                $this->session->set_userdata('ticket_opened_by', $row1->opened_by);}
              ?>
              <form id="form-one" method="post" action="<?php echo base_url(). 'message/send/' . $ticket_id2 ?>">
                <div style="overflow-y: auto; height: 300px">
                  <?php foreach($message as $row): ?>
                    <div style="border:1px solid; margin: 2px">
                      <strong><?php echo $row->sender; ?></strong>
                      <p><?php echo $row->message; ?></p>
                      <p><?php echo $row->time; ?></p>
                    </div>
                  <?php endforeach?>

                </div>
                <!--<input type="text" name="message" required>-->
                <label for="comment">Message:</label>
                <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                <div class="col-md-1">
                  <button class="btn btn-success btn-block baton" type="submit" name="send">
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<script type="text/javascript">
  var hasFocus = true;
  comment.onblur = function(){
    hasFocus = false;
  }

  comment.onfocus = function(){
    hasFocus = true;
  }

  setTimeOut(reload(), 3);

  function reload(){
    alert("Hello");
    location.reload(true);
  }
</script>
