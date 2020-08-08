<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sources extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Sources', 'm');
	}

	public function index() {
		
		$data = array(

			'judul' => "FORM_HISTORY",
			'konten' => 'sources'

		);

		$this->load->view('master', $data);

	}

	public function get_list_data() {

		$list = $this->m->get_list_data();
		$no = 1;
		$data = array();

		foreach ($list->result() as $dt) {
			$row = array();
			$row[] = $no++;
			$row[] = date('Y-m-d H:i:s a', strtotime($dt->date_covid_19_id));
			$row[] = $dt->positif_covid_19_id;
			$row[] = $dt->sembuh_covid_19_id;
			$row[] = $dt->meninggal_covid_19_id;
			$row[] = '
			<button type="button" class="btn btn-sm btn-success" id="edit" data="'.$dt->id_covid_19_id.'">
			<span class="fa fa-edit"></span>
			</button>
			';
			$row[] = '
			<button type="button" class="btn btn-sm btn-danger" id="delete" data="'.$dt->id_covid_19_id.'">
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

		$this->form_validation->set_rules('positif_covid', '', 'trim|required');
		$this->form_validation->set_rules('rec_covid', '', 'trim|required');
		$this->form_validation->set_rules('death_covid', '', 'trim|required');
		$this->form_validation->set_rules('date_source', '', 'trim|required');

		if ($this->form_validation->run() === TRUE) {

			$data = array(

				'date_covid_19_id'        => $this->input->post('date_source'),
				'positif_covid_19_id'        => $this->input->post('positif_covid'),
				'sembuh_covid_19_id'         => $this->input->post('rec_covid'),
				'meninggal_covid_19_id'      => $this->input->post('death_covid'),

			);

				$this->m->save_data($data);
				$output = array(
					'pesan' 	=> 'Success Add New Source Contact',
				   	'pesanbox'  => '1'
					
				);
				echo json_encode($output);

		} else {
			$output = array(
				'pesan' => 'Failed To Save New Source Contact',
				'pesanbox'  => '0'

             );
			echo json_encode($output);
		}

	}


public function get_data_edit() {

		$row = $this->m->get_data_edit()->row();
		$data = array(
			'id_source'        					=> $row->id_covid_19_id,
			'date_source'           			=> date('Y-m-d H:i:s', strtotime($row->date_covid_19_id)),
			'positif_covid'         			=> $row->positif_covid_19_id,
			'rec_covid'         				=> $row->sembuh_covid_19_id,
			'death_covid'         				=> $row->meninggal_covid_19_id,
		);
		echo json_encode($data);
	}

	public function update_data() {

		$this->form_validation->set_rules('positif_covid', '', 'trim|required');
		$this->form_validation->set_rules('rec_covid', '', 'trim|required');
		$this->form_validation->set_rules('death_covid', '', 'trim|required');
		$this->form_validation->set_rules('date_source', '', 'trim|required');
		$this->form_validation->set_rules('id_source', '', 'trim|required');

		if ($this->form_validation->run() === TRUE) {

				$data = array(

				'date_covid_19_id'           => $this->input->post('date_source'),
				'positif_covid_19_id'        => $this->input->post('positif_covid'),
				'sembuh_covid_19_id'         => $this->input->post('rec_covid'),
				'meninggal_covid_19_id'      => $this->input->post('death_covid'),

			);

				$this->m->update_data($data);

				$output = array(
				'pesan' 	=> 'Data Source Success Updated',
				'pesanbox'  => '1',
			);
				echo json_encode($output);

		} else {
			$output = array(
			'pesan' => 'Data Source Failed Updated',
		    'pesanbox'  => '0',
			);
			echo json_encode($output);
		}

	}

	public function select_source() {
		$options = $this->m->select_source();
		echo json_encode($options);
	}

	public function delete() {
		$this->m->delete();
	}



	

















}






/* End of file Dcrm.php */
/* Location: ./application/modules/dcrm/controllers/Dcrm.php */