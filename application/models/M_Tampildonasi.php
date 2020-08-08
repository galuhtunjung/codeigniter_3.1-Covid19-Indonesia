<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tampildonasi extends CI_Model {

	private $donasi    = 'donasi';

	public function get_list_data() {
		return $this->db->select($this->donasi . '.*'
		)->order_by($this->donasi . '.donasi_id', 'ASC'
		)->get($this->donasi);
	}

}

/* End of file M_Tampil_donasi.php */
/* Location: ./application/modules/donasi/models/M_Tampil_donasi.php */