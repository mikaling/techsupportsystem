<?php
  class MessageModel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function getMessages($ticket_id){
      $this->db->where('ticket_id', $ticket_id);
      $query = $this->db->get('messages');
      return $query->result();
    }

    function insertMessage($messageData){
      $this->db->insert('messages', $messageData);
      return $this->db->insert_id();
    }
  }
?>
