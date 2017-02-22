<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
    $sess = $this->session->userdata('name');
     if($sess == 'user'){
       $this->load->view("p_user");
     } else {
       header('location:'.base_url().'login'); 
     }
	}
}

