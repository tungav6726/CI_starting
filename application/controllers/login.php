<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    session_start();
  }
	public function index(){
    $checak_user = $this->session->userdata('name');
    if(empty($check_user)){
      	$this->load->view('p_login');
    } else {
      $st =$this->session->userdata('stts');
      if($st == 'admin')
        header('location:'.base_url().'admin');
      else {
        header('location:'.base_url().'user'); 
    }
	}
}
}

