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
        $this->db->where(array('support_id' => '2', 'status' => 'Open'));
        return $this->db->count_all_results($this->table);
    }
      
    public function get_assigned_tickets($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where(array('support_id' => '2', 'status' => 'Open'));
        $query = $this->db->get($this->table);
        return $query->result();
    }
  }
?>
