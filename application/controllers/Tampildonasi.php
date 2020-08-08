<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampildonasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Tampildonasi', 'm');
	}

	public function index() {
		
		$data = array(
			'judul'  => 'Donasi',
			'konten' => 'tampildonasi'
		);

		$this->load->view('master', $data);

	}


	public function get_list_data() {

		$list = $this->m->get_list_data();
		$no = 1;
		$data = array();

		foreach ($list->result() as $dt) {

			if ($dt->donasi_status == TRUE) {
				$donasi_nama = 'Anonim';
			} else {
				$donasi_nama = $dt->donasi_nama;
			}

			$row = array();
			$row[] = '';
			$row[] = $donasi_nama;
			$row[] = number_format($dt->donasi_jumlah, 0);
			$data[] = $row;
		}

		$output = array(

			'draw'           => $this->input->post('draw'),
			'recordTotal'    => $list->num_rows(),
			'recordFiltered' => $list->num_rows(),
			'data'           => $data

		);

		echo json_encode($output);

	}



}

/* End of file Tampil_donasi.php */
/* Location: ./application/modules/donasi/controllers/Tampil_donasi.php */