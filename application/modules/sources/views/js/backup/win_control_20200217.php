<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Win extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		if ($_SESSION['level'] === 'dcrm' || $_SESSION['level'] === 'admin' || $_SESSION['level'] === 'superadmin' || $_SESSION['level'] === 'level1' || $_SESSION['level'] === 'level2' || $_SESSION['level'] === 'guest'   ) {

			$this->load->model('M_Win', 'm');
			// $this->load->model('M_', 'm');

		} else redirect(site_url(''));

	}
	public function index() {
		
		$data = array(

			'judul'  => "CRM WIN PREVIEW",
			'konten' => 'win',
			'body_collapse' => 'sidebar-collapse'

		);

		$this->load->view('master', $data);

	}

	public function get_list_data() {

		$category = $this->input->post('contact_category');
		$category_2 = $this->input->post('contact_category_2');
		$category_reserve = $category;



		if($category_2 == 1) { 
			$convert_born_1 = $this->input->post('age_cust_1');
			$convert_born_2  = $this->input->post('age_cust_2');
			$convert_born_3  = date('Y-12-31', strtotime("-$convert_born_1 year", strtotime(date('Y-m-d'))));
			$convert_born_4  = date('Y-01-01', strtotime("-$convert_born_2 year", strtotime(date("Y-m-d"))));
		}else{
			$convert_born_3 =0;
			$convert_born_4 =0;
		}

		$today		 = date('Y-m-d');

		$list = $this->m->get_list_data($category_2, $convert_born_3, $convert_born_4);
		$no   = 1;
		$data = array();

		
		foreach ($list->result() as $dt) {

			$date    = DateTime::createFromFormat("Y-m-d", $dt->born_customer);
			$fullname = $dt->salutation_name.' '.$dt->first_name.' '.$dt->last_name;


			if ($dt->born_customer == 0000-00-00) $born_customer = '-';
			else $born_customer = date('Y') - $date->format('Y') ;

			$update =$dt->end_oppstage; $category_lose="-";

			$id_customer = $dt->id_customer;
			$produt_pax = $dt->qty_productopp." X ".$dt->qty_product." ".$dt->nama_satuanproduct;

			$disc_decision = $dt->discount_oppstage;
			$disc_decision_length = strlen($disc_decision);


			if($disc_decision_length < 3){
				$subtotal_a= (($dt->price_product + $dt->price_adm)*$dt->qty_productopp);
				$disc     = ($subtotal_a * $disc_decision)/100;
				$subtotal_b = $subtotal_a-$disc;
				$vat= $subtotal_b / $dt->vat_product;
				$subtotal = $subtotal_b + $vat; 
			}else{
				$subtotal_a= (($dt->price_product + $dt->price_adm)*$dt->qty_productopp);
				$disc = $disc_decision;
				$subtotal_b= $subtotal_a-$disc;
				$vat= $subtotal_b/$dt->vat_product;
				$subtotal = $subtotal_b + $vat; 
			}


			$oppstage=$dt->id_oppstage;
			$cek_opp_skp = $this->m->cek_opp_skp($oppstage);

			if($cek_opp_skp->num_rows() == 0){

			$dpoint=0;
			$id_skp='';

			}else{

			$dpoint=1;
			$row_skp     = $this->m->get_data_skp_row($oppstage)->row();
			$id_skp      = $row_skp->id_crm_skp;
			}


			$dtprice=number_format($dt->price_product);
			$dtadm=number_format($dt->price_adm);
			$dtvat=number_format($vat);
			$dttotal=number_format($subtotal);
			$dtdisc=number_format($disc);


			$row = array();
			$row[] = $no++;
			$row[] = $fullname;
			$row[] = $born_customer;
			$row[] = $dt->nama_product;
			$row[] = $dt->nama_event;
			$row[] = $dt->signlead;
			$row[] = $dt->name;
			$row[] = date('d M Y <p> g:i A', strtotime($dt->create_oppstage));
			$row[] = $produt_pax;
			$row[] = number_format($subtotal);
			$row[] = '<button type="button" class="btn btn-sm btn-warning" id="edit_win"  data_win="'.$dt->id_oppstage.'" data_cust="'.$dt->id_customer.'" data_prod="'.$dt->nama_product.'" data_price="'.$dtprice.'" data_price_adm="'.$dtadm.'" data_price_vat="'.$dtvat.'" data_pax="'.$dt->qty_productopp.'" data_total="'.$dttotal.'" data_disc="'.$dtdisc.'" data_disc_code="'.$disc.'">
			<span class="fas fa-calculator"></span>
			</button>
			';
			$row[] = '<button type="button" class="btn btn-sm btn-success #00a65a" id="editskp" data="'.$dt->id_customer.'" data_opp_1="'.$dt->id_opp.'" data_direct="'.$dpoint.'" data_opp="'.$dt->id_oppstage.'" data_skp="'.$id_skp.'">
			<span class="fa fa-print"></span>
			</button>
			';
			$row[] = $dt->address_city;
			$row[] = "IDR ".number_format($dt->price_product);
			$row[] = "IDR ".number_format($dt->price_adm);
			$row[] = "IDR ".number_format($disc);
			$row[] = $dt->vat_product. " %";
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



public function save_opp(){

	$this->form_validation->set_rules('data_disc', '', 'trim|required');
	$this->form_validation->set_rules('id_oppstage', '', 'trim|required');
	$this->form_validation->set_rules('data_pax', '', 'trim|required');

if ($this->form_validation->run() === TRUE) {

$id_oppstage= $this->input->post('id_oppstage');
$data = array(
		'qty_productopp'        		 => $this->input->post('data_pax'),
		'discount_oppstage'        		 => $this->input->post('data_disc')

);

$save_oppstage = $this->m->save_oppstage($data, $id_oppstage);

$output = array(
	'pesan' 		=> 'Win Data Success Updated',
	'pesanbox'  	=> '1'

);
echo json_encode($output);


} else{

	$output = array(
		'pesan' 		=> 'Data Not Update Some Thing Not Completed',
		'pesanbox'  	=> '0'

	);
	echo json_encode($output);

}

}


public function searchco() {
$dtcheckin = $this->input->post('dtcheckin');
$dtperiod  = $this->input->post('period');
$dtperiodb  = $this->input->post('period');
$dtpax     = $this->input->post('pax');

if($dtperiod == '3' ){  $period="years";  $pax=$dtpax;   }elseif($dtperiod == '2'){ $period="month"; $pax=$dtpax;  }else if($dtperiod == '1'){ $period="days"; $pax=$dtpax;  }else{  $period="days";  $pax=0;   }

$dtci=date('Y-m-d H:i:s', strtotime($dtcheckin));
$dtcob=date('Y-m-d 12:00:00', strtotime("+$pax $period", strtotime(date($dtci))));

if($dtperiod == '3' ){  $dtco=date('Y-m-d 12:00:00', strtotime("-1 days", strtotime(date($dtcob))));   }elseif($dtperiod == '2'){ $dtco=date('Y-m-d 12:00:00', strtotime("-1 days", strtotime(date($dtcob))));  }else{  $dtco=date('Y-m-d 12:00:00', strtotime("+0 days", strtotime(date($dtcob))));   }




$data = array(
	'dtci'        		=> $dtci,
	'dtco'        		=> $dtco,
	'selisih'           => round((abs(strtotime($dtco) - strtotime($dtci)))/(60*60*24))

);

echo json_encode($data);



}

public function searchdiff() {
$dtcheckin  = $this->input->post('dtcheckin');
$dtcheckout = $this->input->post('dtcheckout');

$dtci=date('Y-m-d H:i:s', strtotime($dtcheckin));
$dtco=date('Y-m-d H:i:s', strtotime($dtcheckout));

$data = array(
	'dtci'        		=> $dtci,
	'dtco'        		=> $dtco,
	'selisih'           => round((abs(strtotime($dtco) - strtotime($dtci)))/(60*60*24))

);

echo json_encode($data);



}




	public function get_package_list() {




		$oppstage= $this->input->post('id_oppstage');

		// Milih Product Service Category Cari Id Catsv
		$row_opp = $this->m->get_data_oppstage($oppstage)->row();
		$id_product = $row_opp->id_product;

		$row_product = $this->m->get_data_product($id_product)->row();
		$id_typecatsv    = $row_product->id_typecatsv;

		$row_catproduct = $this->m->get_data_product_category($id_typecatsv)->row();
		$id_catsv       = $row_catproduct->id_catsv;

		$check_skp   = $this->m->check_skp($oppstage);

		

		if($check_skp->num_rows() == 0){
			$id_skp ="0X";
		}else{
			$row_skp     = $this->m->get_data_skp_row($oppstage)->row();
			$id_skp      = $row_skp->id_crm_skp;
		}

		// Get List Data Product
		//id_package , nama_service, catatan new
		$list = $this->m->get_list_package($id_catsv, $id_skp);

		$no   = 1;
		$data = array();
		$index  = 0;
		foreach ($list->result() as $dt) {

			$row_name_input='<input type="hidden" name="nmservice['.$index.']" value="'.$dt->name_add_service.'" class="form-control col-sm-8">';
			$row_note_input='<input type="text"   name="noteservice['.$index.']" value="" class="form-control">';
			$row_check_input='<input type="checkbox" name="checkservice['.$index.']" value="'.$dt->id_package_product.'" class="form-control col-sm-8">';



			$row = array();
			$row[] = $no++;
			$row[] = $row_name_input;
			$row[] = $dt->name_add_service;
			$row[] = $row_check_input;
			$row[] = $row_note_input;
			$data[]= $row;

			$index++;
		}


		$output = array(

			'draw'           => $this->input->post('draw'),
			'recordTotal'    => $list->num_rows(),
			'recordFiltered' => $list->num_rows(),
			'data'           => $data

		);

		echo json_encode($output);

	}

	public function save_skp() {
		$this->form_validation->set_rules('id_customer_skp', '', 'trim|required');
		$this->form_validation->set_rules('id_oppstage', '', 'trim|required');
		$this->form_validation->set_rules('pic_1', '', 'trim|required');
		$this->form_validation->set_rules('cn_1', '', 'trim|required');
		$this->form_validation->set_rules('cn_2', '', 'trim|required');
		$this->form_validation->set_rules('cn_3', '', 'trim|required');

$this->form_validation->set_rules('stsa', '', 'trim|required');
$this->form_validation->set_rules('stsb', '', 'trim|required');
$this->form_validation->set_rules('stsc', '', 'trim|required');
$this->form_validation->set_rules('stsd', '', 'trim|required');
$this->form_validation->set_rules('mbre', '', 'trim|required');

$this->form_validation->set_rules('mbrcheckin', '', 'trim|required');
$this->form_validation->set_rules('mbrcheckout', '', 'trim|required');

$this->form_validation->set_rules('term_1', '', 'trim|required');
$this->form_validation->set_rules('term_pay_due', '', 'trim|required');
$this->form_validation->set_rules('incash', '', 'trim|required');

$this->form_validation->set_rules('inprice', '', 'trim|required');
$this->form_validation->set_rules('indisc', '', 'trim|required');
$this->form_validation->set_rules('invat', '', 'trim|required');
$this->form_validation->set_rules('inpax', '', 'trim|required');
$this->form_validation->set_rules('inadm', '', 'trim|required');


if($this->input->post('pic_1')== 2){   $this->form_validation->set_rules('id_pic', '', 'trim|required'); $this->form_validation->set_rules('id_pic_stats', '', 'trim|required');}else{      }

if($this->input->post('term_1') == 2){

	$this->form_validation->set_rules('term_pay_dp', '', 'trim|required');
    $this->form_validation->set_rules('term_pay_ins', '', 'trim|required');
    $this->form_validation->set_rules('indp', '', 'trim|required');
    $this->form_validation->set_rules('inins', '', 'trim|required');
}else{  }

// $this->form_validation->set_rules('per_1', '', 'trim|required');

		if ($this->form_validation->run() === TRUE) {

		$userid = $this->session->userdata('id_admin');
		$oppstage = $this->input->post('id_oppstage');
		$id_customer = $this->input->post('id_customer_skp');

		$row_opp = $this->m->get_data_oppstage($oppstage)->row(); // Product 
		$id_product = $row_opp->id_product;
		$id_admin   = $row_opp->id;

		$row_product     = $this->m->get_data_product($id_product)->row();
		$id_typecatsv    = $row_product->id_typecatsv;

		$row_catproduct = $this->m->get_data_product_category($id_typecatsv)->row(); // For Get Cat_Sv
		$id_catsv       = $row_catproduct->id_catsv;
	    $code_catsv     = $row_catproduct->code_catsv;



		$row_member     = $this->m->get_data_member($id_customer)->row(); // Product 
		$id_member      = $row_member->id_member;

		$id_skp = $this->m->create_id_skp($code_catsv);
		$this->m->cek_skp($id_skp);$cek_skp = 

		$cek_skp_null = $this->m->cek_skp_null();
		$tskp = $cek_skp_null->Total_Skp;
		if($tskp == 0){  $nourutskp="1";   }else{   $nourutskp=$this->m->get_id_skp()->nourut_crm_skp+=1; }

		if ($cek_skp->num_rows() == 0){

			$data = array(

					'id_crm_skp' 			=> $id_skp,
					'id_oppstage'			=> $oppstage,
					'id_member'				=> $id_member,
					'date_crm_skp_create'	=> date('Y-m-d H:i:s'),
					'date_crm_skp_start'	=> $this->input->post('mbrcheckin'),
					'date_crm_skp_end'		=> $this->input->post('mbrcheckout'),
					'active_crm_skp'		=> 1,
					'nourut_crm_skp'		=> $nourutskp,
					'tahun_crm_skp'			=> date('Y')

			);

			$save_skp = $this->m->save_skp($data);

			if($save_skp){
            
           
            $idservice   = $this->input->post('checkservice');
            $noteservice = $this->input->post('noteservice');
            $nameservice  = $this->input->post('nmservice');
   
            $data = array();
            $index = 0;
            foreach($idservice  as $dataservice =>  $value ){ 
            	if(!empty($this->input->post('checkservice'))){ 
            		array_push($data, array(
            		'id_package_product' =>$value,
					'id_crm_skp' => $id_skp,
					'duration_detil_service' => $noteservice[$dataservice ],
					'name_detil_service' => $nameservice[$dataservice ],
            		));

            		$index++;
            	}
            }

		 $save_service = $this->m->save_service($data);

		 if($save_service){

		 	$data = array(

		 		'id_crm_skp' 			=> $id_skp,
		 		'room_id'				=> $this->input->post('id_room'),
		 		'membership_a'			=> $this->input->post('stsa'),
		 		'membership_b'			=> $this->input->post('stsb'),
		 		'membership_c'			=> $this->input->post('stsc'),
		 		'membership_d'			=> $this->input->post('stsd'),
		 		'membership_e'			=> $this->input->post('mbre')

		 	);

		 	$save_mbr = $this->m->save_mbr($data);

		 	if($save_mbr){


		 		$data = array(

		 			'id_crm_skp' 			=> $id_skp,
		 			'id'					=> $id_admin,
		 			'progress_skp_sign'		=> 1,
		 			'date_skp_sign'			=> date('Y-m-d'),
		 		);

		 		$save_sign = $this->m->save_sign($data);

		 	if($save_sign){

		 	$cek_skp_trans = $this->m->cek_skp_trans($id_skp); 

		 	if($cek_skp_trans->num_rows() == 0){

		 		$cek_term_1=$this->input->post('term_1');

		 		if($cek_term_1 == 2) {   $ststerm="Installment"; $paynumb=$this->input->post('term_pay_ins');   }else{  $ststerm="Cash";  $paynumb=0;  }

			  $data = array(
		 		'id_crm_skp'    	  =>$id_skp,
		 		'date_skp_trans'	  =>date('Y-m-d H:i:s'),
		 		'term_skp_trans'	  =>$ststerm,
		 		'term_skp_trans_numb' =>$paynumb,
		 		'sum_skp_price'       =>$this->input->post('inprice'),
		 		'sum_skp_vat'		  =>$this->input->post('invat'),
		 		'sum_skp_disc'		  =>$this->input->post('indisc'),
		 		'sum_skp_adm'		  =>$this->input->post('inadm'),
		 		'sum_skp_total'		  =>$this->input->post('incash'),
		 		'sum_skp_pax'		  =>$this->input->post('inpax')

		 	);

 			$save_trans= $this->m->save_trans($data);

 			if($save_trans){

 		    $get_id_trans= $this->m->get_id_trans($id_skp)->row();
 		    $id_trans = $get_id_trans->id_skp_trans;

 		    if($cek_term_1 == 2){

 		    	$data = array(

 		    		'id_skp_trans' => $id_trans,
 		    		'stats_skp_payment' =>'Down Payment',
 		    		'sum_skp_payment_get' =>'0',
 		    		'sum_skp_payment_post'=>$this->input->post('indp'),
 		    		'sum_skp_payment_pynalti'=>'0',
 		    		'duedate_skp_payment_get'=>$this->input->post('term_pay_due'),
 		    		'duedate_skp_payment_post'=>$this->input->post('term_pay_due'),
 		    		'id'=>$userid

 		    	);
 		    	$save_payment_dp = $this->m->save_payment_cash($data);
 		    	if($save_payment_dp){
 		    	if($paynumb<2){
 		    		$data = array(
 		    			'id_skp_trans' => $id_trans,
 		    			'stats_skp_payment' =>'On Installment',
 		    			'sum_skp_payment_get' =>'0',
 		    			'sum_skp_payment_post'=>$this->input->post('inins'),
 		    			'sum_skp_payment_pynalti'=>'0',
 		    			'duedate_skp_payment_get'=>$this->input->post('term_pay_end'), // Waktu Checkin
 		    			'duedate_skp_payment_post'=>$this->input->post('term_pay_end'), 
 		    			'id'=>$userid

 		    		);
 		    		$save_payment_ins= $this->m->save_payment_cash($data);
 		    	}else{


					$dtcipost=$this->input->post('term_pay_due');
					$dtci=date('Y-m-d',  strtotime(date($dtcipost)));
 		    		$pay=$this->input->post('term_pay_ins');
 		    		$selisih=$this->input->post('selisih');

 		    		$dayget=$selisih/$pay;
 		    		$daygetfix=round($dayget);

 		    		$data = array();
 		    		$x=0;
 		    		for($x=0;$x<$pay;$x++){

 		    			$payx=$x*$daygetfix;
 		    			$duedatepay[$x]=date('Y-m-d H:i:s', strtotime("+$payx days", strtotime(date($dtci))));
 		    			array_push($data, array(
 		    			'id_skp_trans' => $id_trans,
 		    			'stats_skp_payment' =>'On Installment',
 		    			'sum_skp_payment_get' =>'0',
 		    			'sum_skp_payment_post'=>$this->input->post('inins'),
 		    			'sum_skp_payment_pynalti'=>'0',
 		    			'duedate_skp_payment_get'=>$duedatepay[$x], // Waktu Checkin
 		    			'duedate_skp_payment_post'=>$duedatepay[$x], 
 		    			'id'=>$userid

 		    		));
 		    		}
 		    		$save_payment_ins= $this->m->save_payment_installment($data);
 		    	}


 		    	if($save_payment_ins){

 		    		$cek_pic = $this->input->post('pic_1');

   				if($cek_pic == 2){

   					$data = array(
   						'id_crm_skp'      =>$id_skp,
   						'id_customer_pic' =>$this->input->post('id_pic'),
   						'stats_curel'     =>$this->input->post('id_pic_stats'),
   					);

   				$save_curel = $this->m->save_curel($data);

   				if($save_curel){


   				 $cek_add = $this->input->post('add_1');

   				 if($cek_add == 2){
   				 	$data = array(
   				 		'id_crm_skp'        =>$id_skp,
   				 		'id_letter_address' =>$this->input->post('id_mailing'),
   				 	);

   				 	$save_add = $this->m->save_add($data);

   				 	if($save_add){
   				 		$output = array(
   				 			'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 			'pesanbox'  	=> '1',
   				 			'productbox'  	=> $id_skp,

   				 		);
   				 		echo json_encode($output);

   				 	}

   				 }else{

   				 	$output = array(
   				 		'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 		'pesanbox'  	=> '1',
   				 		'productbox'  	=> $id_skp,

   				 	);
   				 	echo json_encode($output);




   				 }


   				}




   				}else{

   			     $cek_add = $this->input->post('add_1');

   				 if($cek_add == 2){
   				 	$data = array(
   				 		'id_crm_skp'        =>$id_skp,
   				 		'id_letter_address' =>$this->input->post('id_mailing'),
   				 	);

   				 	$save_add = $this->m->save_add($data);

   				 	if($save_add){
   				 		$output = array(
   				 			'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 			'pesanbox'  	=> '1',
   				 			'productbox'  	=> $id_skp,

   				 		);
   				 		echo json_encode($output);

   				 	}

   				 }else{

   				 	$output = array(
   				 		'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 		'pesanbox'  	=> '1',
   				 		'productbox'  	=> $id_skp,

   				 	);
   				 	echo json_encode($output);




   				 }

   				}






 		    	} // Curel Input 




 		    	}

 		    }else{

 		    	$data = array(

 		    		'id_skp_trans' => $id_trans,
 		    		'stats_skp_payment' =>'On Cash',
 		    		'sum_skp_payment_get' =>'0',
 		    		'sum_skp_payment_post'=>$this->input->post('incash'),
 		    		'sum_skp_payment_pynalti'=>'0',
 		    		'duedate_skp_payment_get'=>$this->input->post('term_pay_due'),
 		    		'duedate_skp_payment_post'=>$this->input->post('term_pay_due'),
 		    		'id'=>$userid

 		    	);

 		    	$save_payment_cash = $this->m->save_payment_cash($data);
 		    	
 		    	if($save_payment_cash){

   				$cek_pic = $this->input->post('pic_1');

   				if($cek_pic == 2){

   					$data = array(
   						'id_crm_skp'      =>$id_skp,
   						'id_customer_pic' =>$this->input->post('id_pic'),
   						'stats_curel'     =>$this->input->post('id_pic_stats'),
   					);

   				$save_curel = $this->m->save_curel($data);

   				if($save_curel){



   				 $cek_add = $this->input->post('add_1');

   				 if($cek_add == 2){
   				 	$data = array(
   				 		'id_crm_skp'        =>$id_skp,
   				 		'id_letter_address' =>$this->input->post('id_mailing'),
   				 	);

   				 	$save_add = $this->m->save_add($data);

   				 	if($save_add){
   				 		$output = array(
   				 			'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 			'pesanbox'  	=> '1',
   				 			'productbox'  	=> $id_skp,

   				 		);
   				 		echo json_encode($output);

   				 	}

   				 }else{

   		   				 $cek_add = $this->input->post('add_1');

   				 if($cek_add == 2){
   				 	$data = array(
   				 		'id_crm_skp'        =>$id_skp,
   				 		'id_letter_address' =>$this->input->post('id_mailing'),
   				 	);

   				 	$save_add = $this->m->save_add($data);

   				 	if($save_add){
   				 		$output = array(
   				 			'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 			'pesanbox'  	=> '1',
   				 			'productbox'  	=> $id_skp,

   				 		);
   				 		echo json_encode($output);

   				 	}

   				 }else{

   				 	$output = array(
   				 		'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   				 		'pesanbox'  	=> '1',
   				 		'productbox'  	=> $id_skp,

   				 	);
   				 	echo json_encode($output);




   				 }




   				 }

   				}




   				}else{

   					$output = array(
   						'pesan' 		=> 'New CRM SKP Have Success Post On FAB',
   						'pesanbox'  	=> '1',
   						'productbox'  	=> $id_skp

   					);
   					echo json_encode($output);

   				}



 		    	} // Ini tambahan Terakhirnya






 		    }





 			}

		 	}else{
		 		$output = array(
		 			'pesan' 		=> 'Term Of Payment Already Exists',
		 			'pesanbox'  	=> '0',
		 			'productbox'  	=> '0'

		 		);
		 		echo json_encode($output);

		 	}


		 	}

}


		 } 


			}

		}else{

			$output = array(
				'pesan' 		=> 'Failed To Post, New Id Is Already Exists',
				'pesanbox'  	=> '0',
				'productbox'  	=> ''

			);
			echo json_encode($output);

		}
}else{ // Validation If Else

	if( (empty($this->input->post('cn_1'))) || (empty($this->input->post('cn_2'))) || (empty($this->input->post('cn_3'))) ) {
		$output = array(
			'pesan' 		=> 'Customer Account Data Not Completed',
			'pesanbox'  	=> '0',
			'productbox'  	=> ''

		);
		echo json_encode($output);
	} else{

		$output = array(
			'pesan' 		=> 'TEST FALSE',
			'pesanbox'  	=> '0',
			'productbox'  	=> ''

		);
		echo json_encode($output);

	}


} // Else Validation



}

public function selectroom() {
$id_room=$this->input->post('id_room');
$options = $this->m->selectroom($id_room);
echo json_encode($options);

}


public function selectaddr() {
$id_cust=$this->input->post('id_customer');
$options = $this->m->selectaddr($id_cust);
echo json_encode($options);

}






public function savemailing() {
	$this->form_validation->set_rules('id_customer_mail', '', 'trim|required');
	if ($this->form_validation->run() === TRUE) {
		$data = array(

			'id_customer'       			 => $this->input->post('id_customer_mail'),
			'name_letter_address'    		 => $this->input->post('nama_mailing'),
			'phone_letter_address'           => $this->input->post('phone_mailing'),
			'whatsapp_letter_address'    	 => $this->input->post('mobile_mailing'),
			'email_letter_address'    	  	 => $this->input->post('email_mailing'),
			'description_letter_address'     => $this->input->post('address_mailing'),

		);

		$this->m->save_mailing($data);

		$output = array(
			'pesan' 	=> 'New Mailing Address Data Succes Been Added',
			'pesanbox'  => '1',
		);
		echo json_encode($output);

	} else {
		$output = array(
			'pesan' 	=> 'New Mailing Address Data Failed To Save',
			'pesanbox'  => '0',
		);
		echo json_encode($output);
	}
}


public function printskp() {

$this->form_validation->set_rules('id_skp', '', 'trim|required');
if ($this->form_validation->run() === TRUE) {

$id_skp=$this->input->post('id_skp');

// $data['service'] = $this->m->get_data_service($id_skp); 


$row_skp     = $this->m->get_data_skp($id_skp)->row();

$id_member       = $row_skp->id_member;
$date_create     = $row_skp->date_crm_skp_create;

$row_member	 = $this->m->get_data_customer_member($id_member)->row();
$full_name = $row_member->salutation_name.' '.$row_member->first_name.' '.$row_member->last_name;

$id_customer 	 = $row_member->id_customer;
$cek_letter  	 = $this->m->check_letter_address($id_skp);

if($cek_letter->num_rows() == 0) {
$letter_trigger  = 0;
$letter_name     = $full_name;
$letter_address  = $row_member->address_street;
$letter_phone    = $row_member->phone_customer;
$letter_whatsapp = $row_member->whatsapp_customer;
$letter_email 	 = $row_member->email_customer;

}else{

$row_letter	 = $this->m->get_data_letter_address($id_skp)->row();
$letter_trigger       = 1;
$letter_name          = $row_letter->name_letter_address;
$letter_address  	  = $row_letter->description_letter_address;
$letter_phone    	  = $row_letter->phone_letter_address;
$letter_whatsapp 	  = $row_letter->whatsapp_letter_address;
$letter_email 		  = $row_letter->email_letter_address;

}

$cek_curel 	         = $this->m->check_pic($id_skp);
if($cek_curel->num_rows() == 0) {
$curel_trigger  = 0;
$curel_fullname = '';
$curel_office 	= '';

$curel_address   = '';
$curel_phone     = '';
$curel_whatsapp  = '';
$curel_email 	 = '';
$curel_relation = '' ;

}else{

$row_curel	 = $this->m->get_data_curel($id_skp)->row();
$id_pic	 	 = $row_curel->id_customer_pic;
$row_pic	 = $this->m->get_data_pic($id_pic)->row();
$curel_trigger   = 1;
$curel_fullname  = $row_pic->salutation_name.' '.$row_pic->first_name.' '.$row_pic->last_name;
$curel_office 	 = $row_pic->office_customer;

$curel_address   = $row_pic->address_street;
$curel_address   = $row_pic->address_street;
$curel_phone     = $row_pic->phone_customer;
$curel_whatsapp  = $row_pic->whatsapp_customer;
$curel_email 	 = $row_pic->email_customer;

$curel_relation  = $row_curel->stats_curel;

}



$row_mbr	 = $this->m->get_data_mbr($id_skp)->row();

$mbr_type	 = $row_mbr->membership_e; // nama periode
$mbr_unit_a	 = $row_mbr->membership_c;
$mbr_unit_b  = $row_mbr->membership_b;
$mbr_unit_no = $row_mbr->location_name.' '.$row_mbr->room_name;
$mbr_unit_lt = ' M2';
$mbr_unit_lb = ' M2';



// //service

$crm_checkin     = $row_skp->date_crm_skp_start;
$crm_checkout    = $row_skp->date_crm_skp_end;


// Trans

$row_trans		 = $this->m->get_data_trans($id_skp)->row();

$name_trans		 = $mbr_type.' Membership';
$rule_trans_a	 = $row_trans->term_skp_trans;

if($rule_trans_a == 'Cash'){
$rule_trans	 	 = 'On '. $row_trans->term_skp_trans;
}else{
$rule_trans	 	 = 'On '. $row_trans->term_skp_trans.' '.$row_trans->term_skp_trans_numb.' X' ;
}


$price_transsl	 = ($row_trans->sum_skp_price + $row_trans->sum_skp_adm)*$row_trans->sum_skp_pax;
$discount    	 = $row_trans->sum_skp_disc;
$subtotal    	 = $price_transsl - $discount;
$ppn   			 = $row_trans->sum_skp_vat;
$total   		 = $row_trans->sum_skp_total;




$row_sign	 = $this->m->get_data_sign($id_skp)->row();
$consultant  = $row_sign->name;


//Cek Banyaknya Service

$cek_detil_service = $this->m->cek_detil_service($id_skp);

if($cek_detil_service->num_rows() > 12) {
$service_trigger = 1;
}else{
$service_trigger = 0;
}

$id_trans   	   = $row_trans->id_skp_trans;
$cek_detil_payment = $this->m->cek_detil_payment($id_trans);
$payment_trigger   = $cek_detil_payment->num_rows();

// Mencari Cat Product Untuk Print SKP

$oppstage = $row_skp->id_oppstage;
$row_oppstage = $this->m->get_data_oppstage($oppstage)->row();
$id_product = $row_oppstage->id_product;


$row_product = $this->m->get_data_product($id_product)->row();
$id_typecatsv = $row_product->id_typecatsv;

$row_catsv = $this->m->get_data_product_category($id_typecatsv)->row();
$cat_trigger = $row_catsv ->id_catsv;



$data = array(
	'id_skp'        		=> $id_skp,
	'date_create'        	=> date('d F Y', strtotime($date_create)),
	'member_name'        	=> $full_name,
	'member_idcard'        	=> $row_member->id_cardcustomer,
	'member_address'        => $row_member->address_street,
	'member_telp'			=> $row_member->phone_customer,
	'member_wa'				=> $row_member->whatsapp_customer,
	'email_customer'		=> $row_member->email_customer,
	'office_customer'		=> $row_member->office_customer,
	'letter_name'			=> $letter_name,
	'letter_address'		=> $letter_address,
	'letter_phone'			=> $letter_phone,
	'letter_whatsapp'		=> $letter_whatsapp,
	'letter_email'			=> $letter_email,
	'letter_trigger'		=> $letter_trigger,
	'curel_trigger'			=> $curel_trigger,
	'curel_fullname'		=> $curel_fullname,
	'curel_office'			=> $curel_office,
	'curel_address'			=> $curel_address,
	'curel_phone'			=> $curel_phone,
	'curel_whatsapp'		=> $curel_whatsapp,
	'curel_email'			=> $curel_email,
	'curel_relation'		=> $curel_relation,
	'mbr_type'				=> $mbr_type,
	'mbr_unit_a'			=> $mbr_unit_a,
	'mbr_unit_b'			=> $mbr_unit_b,
	'mbr_unit_no'			=> $mbr_unit_no,
	'mbr_unit_lt'			=> $mbr_unit_lt,
	'mbr_unit_lb'			=> $mbr_unit_lb,
	'crm_checkin'			=> date('d F Y', strtotime($crm_checkin)),
	'crm_checkout' 			=> date('d F Y', strtotime($crm_checkout)),
	'name_trans	' 			=> $name_trans,			
	'rule_trans' 			=> $rule_trans,	
	'price_transsl' 		=> "Rp. ".number_format($price_transsl),
	'discount'  			=> "Rp. ".number_format($discount),
	'subtotal'  			=> "Rp. ".number_format($subtotal),
	'ppn'  					=> "Rp. ".number_format($ppn),
	'total'   				=> "Rp. ".number_format($total),
	'consultant' 			=> $consultant,
	'service_trigger' 		=> $service_trigger,
	'payment_trigger' 		=> $payment_trigger ,
	'discount_trigger' 		=> $discount,
	'cat_trigger' 			=> $cat_trigger,
);

echo json_encode($data);

// $dataarryay['all_service'] =  $this->m->get_all_service($id_skp);
// $this->load->view('master', $dataarryay);


}else{

	$data = array(
		'pesan' 		=> 'Empty Id Skp To Printed',
		'pesanbox'  	=> '0',

	);
	echo json_encode($data);

}








}

public function dataservice() {
$id_skp=$this->input->post('id_skp');

	$list=$this->m->get_data_service($id_skp);
    $data = array();
    $no   = 1;
    foreach($list as $dt){

    	 $datanoteb= $dt->duration_detil_service;

    	 if($datanoteb == ""){   $datanote= " "; }else{  $datanote= ' ( '. $dt->duration_detil_service. ' ) ';  }

 array_push($data,array(
             'nameservice' => $dt->name_detil_service,
             'noteservice' => $datanote
         )
    );
}
	$json = json_encode($data); 
    echo $json;
}

public function dataterm() {

	$id_skp = $this->input->post('id_skp');
	$get_id_trans= $this->m->get_id_trans($id_skp)->row();
	$id_trans = $get_id_trans->id_skp_trans;

	$list = $this->m->get_data_term($id_trans);
	$no   = 1;
	$data = array();
	foreach($list as $dt){
		array_push($data,array(
			'id'        => $dt->id_skp_payment,
			'stats'     => $dt->stats_skp_payment,
			'due'       => date('d M Y', strtotime($dt->duedate_skp_payment_post)),  
			'sumpost'   => number_format($dt->sum_skp_payment_post)      
		)
	);
	}
	$json = json_encode($data); 
    echo $json;
}







}

/* End of file Opportunities.php */
/* Location: ./application/modules/dcrm/controllers/Opportunities.php */