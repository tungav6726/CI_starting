<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

  public function __construct() {
    parent::__construct();
    session_start();
  }
	public function index(){
    $this->session->sess_destroy();
	}
}

