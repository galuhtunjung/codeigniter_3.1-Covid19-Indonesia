<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

	public function login($username, $password) {

		return $this->db->get_where('admin_app', array('username' => $username, 'password' => $password));

	}


}

/* End of file M_Auth.php */
/* Location: ./application/models/M_Auth.php */