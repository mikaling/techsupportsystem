<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Ticket extends CI_Controller {
    public function __construct() {
      parent::__construct();
      //$this->load->database();
      $this->load->helper('url');
      $this->load->model('TicketModel');
      $this->load->library('pagination');
    }

    /*public function home() {
      $result['data'] = $this->TicketModel->display_unassigned_tickets();
      $this->load->view('TechSupportHome', $result);
    }*/
      
    public function index() {
        $config = array();
        $config['base_url'] = base_url(). 'ticket/one';
        $config['total_rows'] = $this->TicketModel->get_unassigned_count();
        $config['per_page'] = 5;
        $config['url_segment'] = 3;
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['ticket'] = $this->TicketModel->get_unassigned_tickets($config['per_page'], $page);
        
        $config_two = array();
        $config_two['base_url'] = base_url() . 'ticket/two';
        $config_two['total_rows'] = $this->TicketModel->get_assigned_count();
        $config_two['per_page'] = 5;
        $config_two['url_segment'] = 3;
        $this->pagination->initialize($config_two);
        $data['links_two'] = $this->pagination->create_links();
        $page_two = ($this->uri->segment(2)) ? $this->uri->segment(3) : 0;
        $data['ticket_two'] = $this->TicketModel->get_assigned_tickets($config_two['per_page'], $page_two);
        
        $this->load->view('TechSupportHome', $data);
    }


  }
?>
