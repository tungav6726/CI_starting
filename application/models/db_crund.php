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
  public function add_user($data){
   $this->db->insert('users', $data);
   return TRUE;
  }
   public function delete_user($name){
    $this->db->where('name',$name);
    $this->db->delete('users');
  }
  
  public function get_data($id){
     $this->db->select('name, password');
     return $this->db->get($this->table)->where('$id')->result_array();
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
