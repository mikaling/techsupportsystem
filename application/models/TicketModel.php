<?php
  class TicketModel extends CI_Model {
    /*function display_unassigned_tickets() {
      $query = $this->db->query("SELECT ticket_id, title, status,
        category, priority FROM ticket_demo WHERE status = 'Pending' LIMIT 10");
        return $query->result();
    }*/
    protected $table = 'tickets';

    public function __construct() {
        parent::__construct();
    }

    public function get_unassigned_count() {
        //return $this->db->count_all($this->table);
        $this->db->where('status', 'Pending');
        return $this->db->count_all_results($this->table);
    }

    public function get_unassigned_tickets($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('status', 'Pending');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_assigned_count() {
        //return $this->db->count_all($this->table);
        $this->db->where(array('support_id' => $this->session->user_id, 'status' => 'Open'));
        return $this->db->count_all_results($this->table);
    }

    public function get_assigned_tickets($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where(array('support_id' => $this->session->user_id, 'status' => 'Open'));
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function claim_ticket($ticket_id, $assigned_count) {
        if($assigned_count < 5) {
            $this->db->set(array('status' => 'Open', 'support_id' => $this->session->user_id));
            $this->db->where('ticket_id', $ticket_id);
            $this->db->update($this->table);
            return true;
        }
        else {
            return false;
        }
        //$this->db->update(array('status' => 'Open', 'support_id' => $this->session->user_id));
    }

    public function get_ticket($ticket_id) {
        $this->db->where('ticket_id', $ticket_id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function complete_ticket($ticket_id, $category, $priority, $status) {
        $det_set = array('category' => $category, 'priority' => $priority, 'status' => $status);
        //print_r($det_set);
        //print_r($ticket_id);
        $this->db->set($det_set);
        $this->db->where('ticket_id', $ticket_id);
        $this->db->update($this->table);
        return true;
    }

    public function insert_comment($ticket_id, $comment) {
      $comment_set = array('ticket_id' => $ticket_id, 'comment' => $comment);
      $this->db->insert('comments', $comment_set);
      return true;
    }

    public function get_ticket_comments($ticket_id) {
      $this->db->where('ticket_id', $ticket_id);
      $this->db->order_by('timestamp', 'DESC');
      $query = $this->db->get('comments');
      return $query->result();
    }

    public function get_closed_tickets() {
      $this->db->select('tickets.ticket_id, tickets.title, tickets.description,
      tickets.priority, tickets.status, tickets.category, tickets.opened_date, users.name');
      $this->db->where('status', 'Closed');
      $this->db->from('tickets');
      $this->db->join('users', 'tickets.support_id = users.user_id');
      $query = $this->db->get();
      return $query->result();
    }
  }
?>
