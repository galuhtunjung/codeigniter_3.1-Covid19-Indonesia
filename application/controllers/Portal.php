<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {
	 
	public function __construct() {
		parent::__construct();
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_Portal', 'm');
		
	}

	public function index() {
	    $prov =($this->curl->simple_get('https://api.kawalcorona.com/indonesia/provinsi'));
		// $data_prov = json_decode($prov, true);
		$pie_indo =($this->curl->simple_get('https://api.kawalcorona.com/indonesia'));
		$data['pie_indo'] =  json_decode($pie_indo);
		$data['provinsi'] =  json_decode($prov, true);
		$data['indonesia'] = $this->m->get_data_table()->result();
		$data['indonesia_rows'] = $this->m->get_data_table()->num_rows();
		$data['judul'] =  'MAX COVID19 - Realtime Data Covid 19';
		$data['konten'] =  'portal';
		$data['body_collapse'] =  'sidebar-collapse';
		$this->load->view('master', $data);
	}

	public function get_data_global() {
		$global_positif = json_decode($this->curl->simple_get('https://api.kawalcorona.com/positif'));
		$global_sembuh= json_decode($this->curl->simple_get('https://api.kawalcorona.com/sembuh'));
		$global_md= json_decode($this->curl->simple_get('https://api.kawalcorona.com/meninggal'));

		$data = array(
			'global_positif'    => $global_positif->value,
			'global_sembuh'     => $global_sembuh->value,
			'global_md'         => $global_md->value,

		);
		echo json_encode($data);
	}


	public function get_data_array_id() {

		$data_indonesia = json_decode($this->curl->simple_get('https://api.kawalcorona.com/indonesia'));
		$data = array();
		
		$row_min = $this->m->get_data_covid_last_min();
		$id_min=$row_min->id_covid_19_id;
		$row = $this->m->get_data_covid_last($id_min);

		$positif_row=$row_min->positif_covid_19_id-$row->positif_covid_19_id;
		$sembuh_row=$row_min->sembuh_covid_19_id-$row->sembuh_covid_19_id;
		$meninggal_row=$row_min->meninggal_covid_19_id-$row->meninggal_covid_19_id;

		foreach($data_indonesia as $dt){
			$positif  = $dt->positif.'<sup style="font-size : 14px;"> +'.$positif_row.' ORANG </sup>';
			$sembuh   = $dt->sembuh.'<sup style="font-size : 14px;"> +'.$sembuh_row.' ORANG</sup>';
			$meninggal= $dt->meninggal.'<sup style="font-size : 14px;"> +'.$meninggal_row.' ORANG</sup>';

			$positif_numb=str_replace(",","",$dt->positif);
			$sembuh_numb=str_replace(",","",$dt->sembuh);
			$meninggal_numb=str_replace(",","",$dt->meninggal);

			$dirawat=(($positif_numb-$sembuh_numb)-$meninggal_numb);

			array_push($data,array(
				'positif' => $positif,
				'sembuh' => $sembuh,
				'meninggal' => $meninggal,
				'dirawat' =>number_format($dirawat) ,
			)
		);

		}
		$json = json_encode($data); 
		echo $json;
	}




}

/* End of file Portal.php */
/* Location: ./application/controllers/Portal.php */