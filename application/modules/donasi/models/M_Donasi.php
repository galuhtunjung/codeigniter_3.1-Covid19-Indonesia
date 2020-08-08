<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Donasi extends CI_Model {

	private $donasi    = 'donasi';

	public function get_list_data() {
		return $this->db->select($this->donasi . '.*'
		)->order_by($this->donasi . '.donasi_id', 'DESC'
		)->get($this->donasi);
	}

	public function save_data($data) {
		return $this->db->insert($this->donasi, $data);
	}

	public function get_data_edit() {
		return $this->db->where(
			$this->donasi . '.donasi_id', $this->input->post('donasi_id')
		)->get($this->donasi);
	}

	public function update_data($data) {
		return $this->db->where(
			$this->donasi. '.donasi_id', $this->input->post('donasi_id')
		)->update($this->donasi, $data);
	}

	public function delete() {
		return $this->db->delete($this->donasi, array('donasi_id' => $this->input->post('donasi_id')));
	}	

}

/* End of file M_Donasi.php */
/* Location: ./application/modules/donasi/models/M_Donasi.php */