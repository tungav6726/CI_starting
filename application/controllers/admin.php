<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{ 
    $sess = $this->session->userdata('name');
    if($sess == 'admin'){
      $this->load->view("p_amin");
    } else {
      header('location:'.base_url().'login'); 
    }
	}
}

