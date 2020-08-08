<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil_donasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Tampil_Donasi', 'm');
	}

	public function index() {
		
		$data = array(
			'judul'  => 'Donasi',
			'konten' => 'tampil_donasi'
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
			$row[] = $no++;
			$row[] = $donasi_nama;
			$row[] = number_format($dt->donasi_jumlah, 0);
			$row[] = $dt->donasi_trans_method;
			$row[] = $dt->donasi_note;
			$row[] = '
			<button type="button" class="btn btn-sm btn-success" id="edit" data="'.$dt->donasi_id.'">
			<span class="fa fa-edit"></span>
			</button>
			';
			$row[] = '
			<button type="button" class="btn btn-sm btn-danger" id="delete" data="'.$dt->donasi_id.'">
			<span class="fa fa-trash"></span>
			</button>
			';
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