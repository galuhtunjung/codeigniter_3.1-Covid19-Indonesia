<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sources extends CI_Model {

    private $covid    = 'covid_19_id';

	public function get_list_data() {
		return $this->db->select($this->covid . '.*'
		)->order_by($this->covid . '.date_covid_19_id', 'DESC'
		)->get($this->covid);
	}

	public function save_data($data) {
		return $this->db->insert($this->covid, $data);
	}

	public function get_data_edit() {
		return $this->db->where(
			$this->covid . '.id_covid_19_id', $this->input->post('id_source')
		)->get($this->covid);
	}

	public function update_data($data) {
		return $this->db->where(
			$this->covid. '.id_covid_19_id', $this->input->post('id_source')
		)->update($this->covid, $data);
	}

	// public function select_source() {
	// 	return $this->db->select(
	// 		'id_contact_source as id, name_contact_source as name'
	// 	)->get($this->contact_source)->result();
	// }

	public function delete() {
		return $this->db->delete($this->covid, array('id_covid_19_id' => $this->input->post('id_source')));
	}	

}

/* End of file M_Contact_list.php */
/* Location: ./application/modules/dcrm/models/M_Contact_list.php */