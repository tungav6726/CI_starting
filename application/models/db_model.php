<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_model extends CI_Model {

	public function index()
	{
		$this->load->view('p_login');
	}
}

