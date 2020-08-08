<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('M_Auth', 'm');
        $this->load->library('encrypt');
	}

	public function index() {

// 		if (loggedIn()) redirect(site_url($this->session->userdata('page')));

		if ($this->uri->segment(1) == 'maxpos-login') {
		    if (loggedIn()) redirect(site_url('maxpos'));
			$userdata = array('page' => 'maxpos');
		} elseif ($this->uri->segment(1) == 'maxcrm-login') {
		    if (loggedIn()) redirect(site_url('maxcrm'));
		    $userdata = array('page' => 'maxcrm');
		} elseif ($this->uri->segment(1) == 'maxpms-login') {
            if (loggedIn()) redirect(site_url('maxpms'));
            $userdata = array('page' => 'maxpms');
        }

		$this->session->set_userdata($userdata);
		
		$data = array(

			'judul'  => 'L&nbspO&nbspG&nbspI&nbspN &nbspH&nbspI&nbspS',

		);

		$this->load->view('login', $data);

	}

	public function login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $encrypt  = $this->encrypt->decode($password, 'maxproitsolution');
        $md5      = md5($this->input->post('password'));

        $cek_encrypt = $this->m->login($username, $encrypt);
        $cek_md5     = $this->m->login($username, $md5);

        if ($cek_encrypt->num_rows() > 0) {

            $row = $cek_encrypt->row();

            $update_on = array('online' => 1);

            $this->db->where('id', $row->id);
            $this->db->update('admin_app', $update_on);

            $data = array(

                'username' => $row->username,
                'name'     => $row->name,
                'id_admin' => $row->id,
                'phone'    => $row->mobile,
                'level'    => $row->type,
                'online'   => $row->online,

                'loggedIn' => true

            );
            
            $this->session->set_userdata($data);

            echo site_url($this->session->userdata('page'));

        } elseif ($cek_md5->num_rows() > 0) {
            $row = $cek_md5->row();

            $update_on = array('online' => 1);

            $this->db->where('id', $row->id);
            $this->db->update('admin_app', $update_on);

            $data = array(

                'username' => $row->username,
                'name'     => $row->name,
                'id_admin' => $row->id,
                'phone'    => $row->mobile,
                'level'    => $row->type,
                'online'   => $row->online,

                'loggedIn' => true

            );
            
            $this->session->set_userdata($data);

            echo site_url($this->session->userdata('page'));
        } else {
            echo 0;
        }

    }

	public function logout() {
		$update_on = array('online' => 0);

		$this->db->where('id', $this->session->userdata('id_admin'));
		$this->db->update('admin_app', $update_on);

		session_destroy();
		redirect(site_url(''));
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */