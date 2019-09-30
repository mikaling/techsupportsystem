<section style="margin: 1%">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Ticket Comments</h4>
              </div>
              <?php foreach($ticket_comments as $tkt_cmt): ?>
                <div class="card-body" style="border: 1px solid grey; margin: 1%;">
                <p><?php echo $tkt_cmt->comment; ?></p>
                <p><?php echo $tkt_cmt->timestamp; ?></p>
                </div>
              <?php endforeach?>
          </div>
        </div>
      </div>
    </div>
</section>
