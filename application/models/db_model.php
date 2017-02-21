<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_model extends CI_Model {
  
  public function getLoginData($name, $pass){
    $name0 = mysql_real_escape_string($name);
    $pass0 = md5(mysql_real_escape_string($pass));

    $check_login = $this->db->get_where('users', array('name' => $name0, 'password' => $pass0));
    if($check_login->num_rows() > 0){
         $check_user = $check_login->row();
         if($name0 == $check_user->name && $pass0 == $check_user->password ){
           $sess = array('name'=> $check_user->name,
                         'stts' => $check_user->status,
                   );
           $this->session->set_userdata($sess);
           if($check_user->status == 'admin')
             header('location:'.base_url().'admin');
            else 
             header('location:'.base_url().'user');
      }  else {
         echo "<script>alert('Name/pass not match...');";
         echo "</script>";
      }
    }
  }
}

