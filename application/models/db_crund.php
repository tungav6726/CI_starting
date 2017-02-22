<?php if (!defined('BASEPATH')) exit ('No dererct!');

class DB_model extends CI_Model{
  public function get_record(){
    $query = $this->db->get('users');
    return $query->result();
  }
  public function add_record($data){
    $this->db->insert('users', $data);
    return;
  }
  public function update_record($data){
    $this->db->where('name','abc');
    $this->db->update('users', $data);
  }
  public function delete_row(){
    
  }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

