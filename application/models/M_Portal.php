<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Portal extends CI_Model {

    private $covid    = 'covid_19_id';

	public function get_data_covid_last($id_min) {
		return $this->db->where($this->covid . '.id_covid_19_id !=', $id_min)
		->order_by(
			$this->covid . '.date_covid_19_id', 'DESC'
		)->limit(1)->get($this->covid)->row();
	}

		public function get_data_covid_last_min() {
		return $this->db->order_by(
			$this->covid . '.date_covid_19_id', 'DESC'
		)->limit(1)->get($this->covid)->row();
	}

	public function get_data_table() {
		return $this->db->order_by(
			$this->covid . '.date_covid_19_id', 'ASC'
		)->get($this->covid);
	}

}

/* End of file M_Contact_list.php */
/* Location: ./application/modules/dcrm/models/M_Contact_list.php */