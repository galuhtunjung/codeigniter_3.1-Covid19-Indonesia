<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kdonasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Donasi', 'm');
	}

	public function index() {
		
		$data = array(
			'judul'  => 'Donasi',
			'konten' => 'kdonasi'
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


	public function save_data() {

		$this->form_validation->set_rules('donasi_nama', '', 'trim|required');
		$this->form_validation->set_rules('donasi_jumlah', '', 'trim|required');

		if ($this->form_validation->run() === TRUE) {

			$data = array(

				'donasi_nama'         => $this->input->post('donasi_nama'),
				'donasi_jumlah'       => $this->input->post('donasi_jumlah'),
				'donasi_trans_method' => $this->input->post('donasi_trans_method'),
				'donasi_note'         => $this->input->post('donasi_note'),
				'donasi_status'       => $this->input->post('donasi_status'),
				'donasi_tanggal'      => date('Y-m-d H:i:s')

			);

			$this->m->save_data($data);
			$output = array(
				'pesan' 	=> 'Success',
				'pesanbox'  => '1'
				
			);
			echo json_encode($output);

		} else {
			$output = array(
				'pesan'    => 'Failed',
				'pesanbox' => '0'

			);
			echo json_encode($output);
		}

	}


	public function get_data_edit() {

		$row = $this->m->get_data_edit()->row();
		$data = array(
			'donasi_id'           => $row->donasi_id,
			'donasi_nama'         => $row->donasi_nama,
			'donasi_jumlah'       => $row->donasi_jumlah,
			'donasi_trans_method' => $row->donasi_trans_method,
			'donasi_note'         => $row->donasi_note,
			'donasi_status'       => $row->donasi_status
		);
		echo json_encode($data);
	}

	public function update_data() {

		$this->form_validation->set_rules('donasi_nama', '', 'trim|required');
		$this->form_validation->set_rules('donasi_jumlah', '', 'trim|required');

		if ($this->form_validation->run() === TRUE) {

			$data = array(

				'donasi_nama'         => $this->input->post('donasi_nama'),
				'donasi_jumlah'       => $this->input->post('donasi_jumlah'),
				'donasi_trans_method' => $this->input->post('donasi_trans_method'),
				'donasi_note'         => $this->input->post('donasi_note'),
				'donasi_status'       => $this->input->post('donasi_status')

			);

			$this->m->update_data($data);

			$output = array(
				'pesan' 	=> 'Success Updated',
				'pesanbox'  => '1',
			);
			echo json_encode($output);

		} else {
			$output = array(
				'pesan'    => 'Failed Updated',
				'pesanbox' => '0',
			);
			echo json_encode($output);
		}

	}

	public function delete() {
		$this->m->delete();
	}

}

/* End of file Donasi.php */
/* Location: ./application/modules/donasi/controllers/Donasi.php */