<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Win extends CI_Model {

	

	private $contact = 'customer';
	private $member  = 'member';
	private $event 	 = 'list_event';
	private $lead    = 'lead';
	private $admin 	 = 'admin_app';

	private $oppstage      = 'opp_stage';
	private $product       = 'list_product';
	private $catservtype   = 'category_servicetype';
	private $cattype       = 'category_service';
	private $productmbr    = 'product_membership';

	private $crm_skp            		 = 'crm_skp';
	private $crm_customer_relation       = 'crm_customer_relation';
	private $crm_customer_letter_address = 'crm_customer_letter_address';
	private $crm_letter_address_use      = 'crm_letter_address_use';
	private $crm_skp_detil_service 		 = 'crm_skp_detil_service';
	private $crm_skp_membership        	 = 'crm_skp_membership';
	private $crm_skp_payment        	 = 'crm_skp_payment';
	private $crm_skp_trans        	     = 'crm_skp_trans';
	private $crm_skp_sign       		 = 'crm_skp_sign';

	private $rms_room      				 = 'rms_room';
	private $rms_location 			  	 = 'rms_location';

	private $crm_product_package = 'crm_product_package';

	// private $crm_curel   = 'opp_won_addactivity';




public function get_list_data($category_2, $convert_born_3, $convert_born_4) {


		if($category_2 != "") {
if($convert_born_3 == 0) { // submit dan change
	$u_filter_2 = $this->input->post('update_cust_2');
	$u_filter_1 = $this->input->post('update_cust_1');
	$u_filter_2fix = "$u_filter_2 23:59:00";
	$u_filter_1fix = "$u_filter_1 00:00:00";

	$sql = $this->db->query("SELECT * FROM opp_win_active WHERE create_oppstage BETWEEN '".$u_filter_1fix."' AND  '".$u_filter_2fix."'  order by create_oppstage DESC");
	return $sql;
}else{

	$sql = $this->db->query("SELECT * FROM opp_win_active WHERE born_customer BETWEEN '".$convert_born_4."' AND  '".$convert_born_3."'  order by born_customer DESC");
	return $sql;
}
}
else{

	$sql = $this->db->query("SELECT * FROM opp_win_active order by create_oppstage DESC");
	return $sql;

}


}

public function get_data_oppstage($oppstage) {
	return $this->db->where(
		$this->oppstage. '.id_oppstage', $oppstage
	)->get($this->oppstage);
}

public function get_data_member($id_customer) {
	return $this->db->where(
		$this->member . '.id_customer', $id_customer
	)->join(
		$this->contact, $this->contact . '.id_customer= ' . $this->contact . '.id_customer'
	)->get($this->member);
}

	public function get_id_skp() {

		return $this->db->where($this->crm_skp . '.tahun_crm_skp', date('Y'))
		->order_by(
			$this->crm_skp . '.nourut_crm_skp', 'DESC'
		)->limit(1)->get($this->crm_skp)->row();
	}




	public function create_id_skp($code_catsv) {

		$bulansekarang = date("Y-m");
		$kodebulan  = "$bulansekarang";
		$id         = $this->get_id_skp();
		if($id==""){ $noid=0;}else{$noid=$id->nourut_crm_skp;}
		$noid++;

		$charid = "-$kodebulan";
		$newida = sprintf("%05s", $noid).$charid;
		$newid  = "$newida"; //insertdatabase
		return 'SKP-'.$code_catsv.'-'.$newid;
	}

	public function cek_skp($id_skp) {
		return $this->db->get_where($this->crm_skp, array('id_crm_skp' => $id_skp));
	}

	public function cek_opp_skp($oppstage) {
		return $this->db->get_where($this->crm_skp, array('id_oppstage' => $oppstage));
	}

	public function cek_detil_service($id_skp) {
		return $this->db->get_where($this->crm_skp_detil_service, array('id_crm_skp' => $id_skp));
	}


	public function cek_detil_payment($id_trans) {
		return $this->db->get_where($this->crm_skp_payment, array('id_skp_trans' => $id_trans));
	}


	

	public function cek_skp_null(){
		$sql="SELECT COUNT(id_crm_skp) as Total_Skp FROM crm_skp ;";
		$result=$this->db->query($sql);
		$count=$result->row();
		return $count;
	}

	public function save_skp($data) {
		return $this->db->insert('crm_skp', $data);
	}
	public function save_service($data) {
		return $this->db->insert_batch('crm_skp_detil_service', $data);
	}
	public function save_mbr($data) {
		return $this->db->insert('crm_skp_membership', $data);
	}
	public function save_sign($data) {
		return $this->db->insert('crm_skp_sign', $data);
	}
	public function cek_skp_trans($id_skp) {
		return $this->db->get_where($this->crm_skp_trans, array('id_crm_skp' => $id_skp ));
	}
	public function save_trans($data) {
		return $this->db->insert('crm_skp_trans', $data);
	}
	public function get_id_trans($id_skp) {
		return $this->db->where(
			$this->crm_skp_trans . '.id_crm_skp', $id_skp
		)->get($this->crm_skp_trans);
	}
	public function save_payment_cash($data) {
		return $this->db->insert('crm_skp_payment', $data);
	}

	public function save_payment_installment($data) {
		return $this->db->insert_batch('crm_skp_payment', $data);
	}
	public function save_curel($data) {
		return $this->db->insert('crm_customer_relation', $data);
	}

	public function save_mailing($data) {
		return $this->db->insert('crm_customer_letter_address', $data);
	}

	public function save_add($data) {
		return $this->db->insert('crm_letter_address_use', $data);
	}


	public function save_oppstage($data, $id_oppstage) {
		return $this->db->where(
			$this->oppstage. '.id_oppstage', $id_oppstage
		)->update($this->oppstage, $data);
	}



	public function get_data_skp($id_skp) {
		return $this->db->where(
		$this->crm_skp. '.id_crm_skp', $id_skp
		)->get($this->crm_skp);
	}

	public function get_data_customer_member($id_member) {
		return $this->db->where(
			$this->member. '.id_member', $id_member
		)->join(
			$this->contact, $this->contact . '.id_customer = ' . $this->member . '.id_customer'
		)->get($this->member);
	}

	public function check_letter_address($id_skp) {
		return $this->db->get_where($this->crm_letter_address_use , array('id_crm_skp' => $id_skp ));
	}


	public function get_data_letter_address($id_skp) {
		return $this->db->where(
			$this->crm_letter_address_use. '.id_crm_skp', $id_skp
		)->join(
			$this->crm_customer_letter_address, $this->crm_customer_letter_address . '.id_letter_address = ' . $this->crm_letter_address_use . '.id_letter_address'
		)->get($this->crm_letter_address_use);
	}

	public function check_pic($id_skp) {
		return $this->db->get_where($this->crm_customer_relation, array('id_crm_skp' => $id_skp ));
	}

	public function get_data_curel($id_skp) {
		return $this->db->where(
			$this->crm_customer_relation. '.id_crm_skp', $id_skp
		)->get($this->crm_customer_relation);
	}

	public function get_data_pic($id_pic) {
		return $this->db->where(
			$this->contact. '.id_customer', $id_pic
		)->get($this->contact);
	}


	public function get_data_mbr($id_skp) {
		return $this->db->where(
			$this->crm_skp_membership. '.id_crm_skp', $id_skp
		)->join(
			$this->rms_room, $this->rms_room . '.room_id = ' . $this->crm_skp_membership . '.room_id' ,'left'
		)->join(
			$this->rms_location, $this->rms_location . '.location_id = ' . $this->rms_room . '.location_id' , 'left'
		)->get($this->crm_skp_membership);
	}


	public function get_data_trans($id_skp) {
		return $this->db->where(
			$this->crm_skp_trans. '.id_crm_skp', $id_skp
		)->get($this->crm_skp_trans);
	}

	public function get_data_sign($id_skp) {
		return $this->db->where(
			$this->crm_skp_sign. '.id_crm_skp', $id_skp
		)->join(
			$this->admin, $this->admin. '.id = ' . $this->crm_skp_sign . '.id'
		)->get($this->crm_skp_sign);
	}





public function get_data_product($id_product) {
	return $this->db->where(
		$this->product. '.id_product', $id_product
	)->join(
		$this->catservtype, $this->product . '.id_typecatsv = ' . $this->catservtype . '.id_typecatsv'
	)->get($this->product);
}

public function get_data_product_category($id_typecatsv) {
	return $this->db->where(
		$this->catservtype. '.id_typecatsv', $id_typecatsv
	)->join(
		$this->cattype, $this->catservtype . '.id_catsv = ' . $this->cattype . '.id_catsv'
	)->get($this->catservtype);
}

public function check_skp($oppstage) {
	return $this->db->get_where($this->crm_skp, array('id_oppstage' => $oppstage));
}

public function get_data_skp_row($oppstage) {
	return $this->db->where(
		$this->crm_skp. '.id_oppstage', $oppstage
	)->get($this->crm_skp);
}


public function get_list_package($id_catsv, $id_skp) {
	$sql = $this->db->query("SELECT * FROM skp_service_active WHERE id_catsv = '".$id_catsv."'  AND id_package_product NOT IN (SELECT id_package_product FROM crm_skp_detil_service WHERE id_crm_skp ='".$id_skp."') ORDER BY id_package_product ASC");
	return $sql;
}


public function selectroom($id_room) {
	return $this->db->select(
		'room_id as id, room_name as name'
	)->get($this->rms_room)->result();
}


public function selectaddr($id_cust) {
	return $this->db->select(
		'id_letter_address as id, name_letter_address as name'
	)->where(
		$this->crm_customer_letter_address. '.id_customer', $id_cust
	)->get($this->crm_customer_letter_address)->result();
}


// public function get_data_service($id_skp) {
// 	$sql = $this->db->query("SELECT * FROM crm_skp_detil_service Where id_crm_skp = '".$id_skp."'  order by id_skp_detil ASC");
// 	return $sql;
// }

public function get_data_service($id_skp) {
	return $this->db->where(
		$this->crm_skp_detil_service. '.id_crm_skp', $id_skp
	)->order_by($this->crm_skp_detil_service. '.id_package_product', 'ASC'
	)->get($this->crm_skp_detil_service)->result();
}

public function get_data_term($id_trans) {
	return $this->db->where(
		$this->crm_skp_payment. '.id_skp_trans', $id_trans
	)->order_by($this->crm_skp_payment. '.duedate_skp_payment_post', 'ASC'
	)->get($this->crm_skp_payment)->result();
}








}
/* End of file M_Contact_list.php */
/* Location: ./application/modules/dcrm/models/M_Contact_list.php */