<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    session_start();
  }
	public function index(){
    $this->load->view('p_login');
  }
  public function out(){
    $this->db_model->logoutuser();
  }
}

