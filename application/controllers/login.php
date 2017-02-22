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
  
  public function show_data(){
    $this->load->model('db_crund');
    $data_get = $this->db_crund->get_record();
//    var_dump($data_get);die;
    $data_user = array('user'=>$data_get);
    $this->load->view('p_user',$data_user);
  }
}

