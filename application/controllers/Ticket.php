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
        $config['base_url'] = base_url(). 'ticket/';
        $config['total_rows'] = $this->TicketModel->get_unassigned_count();
        $config['per_page'] = 5;
        $config['url_segment'] = 2;
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

        $data['header'] = 'Dashboard';
        $data['header_icon'] = 'fa-cog';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/support_navbar');
        $this->load->view('unassigned_tickets');
        $this->load->view('assigned_tickets');
        $this->load->view('templates/footer');

    }

    public function claim() {
        $assigned_count = $this->TicketModel->get_assigned_count();
        $ticket_id = $this->uri->segment(3);
        //echo $ticket_id;
        $result = $this->TicketModel->claim_ticket($ticket_id, $assigned_count);
        //redirect('user/register');
        if ($result == true) {
            //echo "<script>alert('Claim successful!')</script>";
            //$data['ticket_det'] = $this->TicketModel->get_ticket($ticket_id);
            //$this->load->view('templates/header', $data);
            //$this->load->view('templates/support_navbar');
            //$this->load->view('view_ticket');
            //$this->load->view('templates/footer');
            redirect('ticket/view/' . $ticket_id, 2000);
            //redirect('ticket');
        } elseif ($result == false) {
            echo "<script language='javascript'>" .
                "setTimeOut(function() {window.location.href = 'ticket'; }, 2000); "."</script>";
            redirect('ticket', 5000);
        } else {
            redirect($_SERVER['REQUEST_URI'], 'refresh');
        }
        //alert('Claim failed! Ticket assignment limit reached.');
    }

    public function view() {
        $ticket_id = $this->uri->segment(3);
        $data['ticket_det'] = $this->TicketModel->get_ticket($ticket_id);
        $data['ticket_comments'] = $this->TicketModel->get_ticket_comments($ticket_id);
        $data['header'] = 'View Ticket';
        $data['header_icon'] = 'fa-eye';
        //print_r($data['ticket_det']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/support_navbar');
        $this->load->view('view_ticket');
        $this->load->view('ticket_comments');
        $this->load->view('templates/footer');
    }

    public function complete() {
        $ticket_id = $this->uri->segment(3);
        //echo $ticket_id;
        $category = $this->input->post('category');
        $priority = $this->input->post('priority');
        $status = $this->input->post('status');
        $rs = $this->TicketModel->complete_ticket($ticket_id, $category, $priority, $status);
        if($rs == true) {
            redirect('ticket');
        }
    }

    public function add_comment() {
      $ticket_id = $this->uri->segment(3);
      $comment = $this->input->post('comment');
      $rs = $this->TicketModel->insert_comment($ticket_id, $comment);
      if($rs == true) {
        redirect('ticket/view/' . $ticket_id);
      }
    }

    public function closed_tickets() {
      $data['closed_tickets'] = $this->TicketModel->get_closed_tickets();
      $data['header'] = 'Tickets';
      $data['header_icon'] = 'fa-cog';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/support_navbar');
      $this->load->view('closed_tickets');
      $this->load->view('templates/footer');
    }


  }
?>
