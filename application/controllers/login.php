<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('db_crund');
    session_start();
  }
	public function index(){
    $this->load->view('p_login');
  }
  public function out(){
    $this->db_model->logoutuser();
  }
  
  public function show_data(){
//    $this->load->model('db_crund');
    $data_get = $this->db_crund->get_record();
//    var_dump($data_get);die;
    $data_user = array('user'=>$data_get);
    $this->load->view('p_user',$data_user);
  }
  
  public function add_user(){
//    $this->load->model('db_crund');
    $data= array(
        'name' => $this->input->post('name'),
        'password' => md5($this->input->post('pass')),
            );
    $this->db_crund->add_user($data);
//    $this->session->set_flashdata('message', 'Your data update done!');   
    redirect('Login/index');
  }
  
  public function delete_data(){
    $name = $this->input->post('abc');
//    var_dump($name);die;
    $this->db_crund->delete_user($name);
    redirect('Login/show_data');
  }
  
  public function show_id($id){
     var_dump($id);die;
    $data = $this->db_crund->get_data($id);
    var_dump($data);die;
  }
}

