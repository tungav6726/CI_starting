<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_crund extends CI_Model{
  protected $table = 'users';
  public function __construct() {
    parent::__construct();
  }
  public function get_record(){
    $this->db->select('name, password');
    return $this->db->get($this->table)->result_array();
  }
  public function add_user($name, $pass){
    $data['name'] = $name;
    var_dump($name);die;
    $data['password']= md5($pass);
    $this->db->insert('users', $data);
    var_dump($data);die;
    $this->load->view('p_user');
  }
//  public function add_record($data){
//    $this->db->insert('users', $data);
//    return;
//  }
//  public function update_record($data){
//    $this->db->where('name','abc');
//    $this->db->update('users', $data);
//  }
//  public function delete_row(){
//    
//  }
}
