<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!loggedIn()) redirect(site_url(''));

	}

	public function index() {

		$data = array(

			'judul'  => $judul,
			'konten' => 'dashboard'

		);

		$this->load->view('master', $data);

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */