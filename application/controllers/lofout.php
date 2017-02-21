<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }
	public function index(){
    $cek = $this->session->userdata('name');
    if(emtp($cek)){
      header('location:'.base_url());
    } else {
      $this->session->sess_destroy();
       header('location:'.base_url());
    }
}
}

