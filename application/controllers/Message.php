<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Message extends CI_Controller{
    public function __construct() {
      parent::__construct();
      //$this->load->database();
      $this->load->helper('url');
      $this->load->model('MessageModel');
      $this->load->model('UserModel');
      $this->load->model('TicketModel');
  }

  public function view() {
      $ticket_id = $this->uri->segment(3);
      $data['ticket_det'] = $ticket_id;
      $data['ticket'] = $this->TicketModel->get_ticket($ticket_id);
      $data['message'] = $this->MessageModel->getMessages($ticket_id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/support_navbar');
      $this->load->view('chat');
      $this->load->view('templates/footer');
  }

  public function send(){
    $ticket_id = $this->uri->segment(3);
    $message = $this->input->post('message');
    $sender = $this->session->name;
    $assigned_to = $this->session->ticket_assigned_to;
    $opened_by = $this->session->ticket_opened_by;

    //Assigning recipient based on current user
    if ($this->session->user_type == "support" || $this->session->user_type == "admin") {
      //$recipient =  $data['ticket'][0]['opened_by'];
      $recipient = $opened_by;
      //Recipient is staff since the currently signed in user is support / admin
    }else{
      //$recipient =  $data['ticket'][0]['assigned_to'];
      $recipient = $assigned_to;
      //Recipient is the support member the ticket is assigned to, since the current
      //user is staff
    }
    //Load data into array
    $messageData = array(
      'ticket_id' => $ticket_id,
      'sender' => $sender,
      'recipient' => $recipient,
      'message' => $message);

    //Insert message into database
    $this->MessageModel->insertMessage($messageData);
    redirect(base_url(). "message/view/$ticket_id");
  }

  //TODO: auto-refresh/auto-retrieve, keep chat div scrolled to bottom, and notifications.
}


?>
