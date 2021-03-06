<?php
class C_t_ipmbl extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('m_t_ipmbl');
	}
	
	function index(){
		$this->load->view('main/v_t_ipmbl');
	}
	
	function switchAction(){
		$action = $this->input->post('action');
		switch($action){
			case 'GETLIST':
				$this->getList();
			break;
			case 'CREATE':
				$this->create();
			break;
			case 'UPDATE':
				$this->update();
			break;
			case 'DELETE':
				$this->delete();
			break;
			case 'SEARCH':
				$this->search();
			break;
			case 'PRINT':
				$this->printExcel();
			break;
			case 'EXCEL':
				$this->printExcel();
			break;
			default :
				echo '{ failure : true }';
			break;
		}
	}
	
	function getList(){
		$searchText = $this->input->post('query');
		$limit_start = (integer)$this->input->post('start');
		$limit_end = (integer)$this->input->post('limit');
		$params = array(
			'searchText' => $searchText,
			'limit_start' => $limit_start,
			'limit_end' => $limit_end
		);
		$result = $this->m_t_ipmbl->getList($params);
		echo $result;
	}
	
	function create(){
		$ipmbl_id = htmlentities($this->input->post('ipmbl_id'),ENT_QUOTES);
		$ipmbl_id = is_numeric($ipmbl_id) ? $ipmbl_id : 0;
		$ipmbl_luas = htmlentities($this->input->post('ipmbl_luas'),ENT_QUOTES);
		$ipmbl_luas = is_numeric($ipmbl_luas) ? $ipmbl_luas : 0;
		$ipmbl_volume = htmlentities($this->input->post('ipmbl_volume'),ENT_QUOTES);
		$ipmbl_volume = is_numeric($ipmbl_volume) ? $ipmbl_volume : 0;
		$ipmbl_keperluan = htmlentities($this->input->post('ipmbl_keperluan'),ENT_QUOTES);
		$ipmbl_alamat = htmlentities($this->input->post('ipmbl_alamat'),ENT_QUOTES);
		$ipmbl_kelurahan = htmlentities($this->input->post('ipmbl_kelurahan'),ENT_QUOTES);
		$ipmbl_kelurahan = is_numeric($ipmbl_kelurahan) ? $ipmbl_kelurahan : 0;
		$ipmbl_kecamatan = htmlentities($this->input->post('ipmbl_kecamatan'),ENT_QUOTES);
		$ipmbl_kecamatan = is_numeric($ipmbl_kecamatan) ? $ipmbl_kecamatan : 0;
		$ipmbl_status = htmlentities($this->input->post('ipmbl_status'),ENT_QUOTES);
		$ipmbl_status = is_numeric($ipmbl_status) ? $ipmbl_status : 0;
		$ipmbl_tanggalsurvey = htmlentities($this->input->post('ipmbl_tanggalsurvey'),ENT_QUOTES);
		$ipmbl_usaha = htmlentities($this->input->post('ipmbl_usaha'),ENT_QUOTES);
		$ipmbl_alamatusaha = htmlentities($this->input->post('ipmbl_alamatusaha'),ENT_QUOTES);
				
		$ipmbl_author = $this->m_t_ipmbl->__checkSession();
		$ipmbl_created_date = date('Y-m-d H:i:s');
		
		if($ipmbl_author != ''){
			$result = 'sessionExpired';
		}else{
			$data = array(
				'ipmbl_id'=>$ipmbl_id,
				'ipmbl_luas'=>$ipmbl_luas,
				'ipmbl_volume'=>$ipmbl_volume,
				'ipmbl_keperluan'=>$ipmbl_keperluan,
				'ipmbl_alamat'=>$ipmbl_alamat,
				'ipmbl_kelurahan'=>$ipmbl_kelurahan,
				'ipmbl_kecamatan'=>$ipmbl_kecamatan,
				'ipmbl_status'=>$ipmbl_status,
				'ipmbl_tanggalsurvey'=>$ipmbl_tanggalsurvey,
				'ipmbl_usaha'=>$ipmbl_usaha,
				'ipmbl_alamatusaha'=>$ipmbl_alamatusaha,
				);
			$result = $this->m_t_ipmbl->__insert($data, '', '');
		}
		echo $result;
	}
	
	function update(){
		$ipmbl_id = htmlentities($this->input->post('ipmbl_id'),ENT_QUOTES);
		$ipmbl_id = is_numeric($ipmbl_id) ? $ipmbl_id : 0;
		$ipmbl_luas = htmlentities($this->input->post('ipmbl_luas'),ENT_QUOTES);
		$ipmbl_luas = is_numeric($ipmbl_luas) ? $ipmbl_luas : 0;
		$ipmbl_volume = htmlentities($this->input->post('ipmbl_volume'),ENT_QUOTES);
		$ipmbl_volume = is_numeric($ipmbl_volume) ? $ipmbl_volume : 0;
		$ipmbl_keperluan = htmlentities($this->input->post('ipmbl_keperluan'),ENT_QUOTES);
		$ipmbl_alamat = htmlentities($this->input->post('ipmbl_alamat'),ENT_QUOTES);
		$ipmbl_kelurahan = htmlentities($this->input->post('ipmbl_kelurahan'),ENT_QUOTES);
		$ipmbl_kelurahan = is_numeric($ipmbl_kelurahan) ? $ipmbl_kelurahan : 0;
		$ipmbl_kecamatan = htmlentities($this->input->post('ipmbl_kecamatan'),ENT_QUOTES);
		$ipmbl_kecamatan = is_numeric($ipmbl_kecamatan) ? $ipmbl_kecamatan : 0;
		$ipmbl_status = htmlentities($this->input->post('ipmbl_status'),ENT_QUOTES);
		$ipmbl_status = is_numeric($ipmbl_status) ? $ipmbl_status : 0;
		$ipmbl_tanggalsurvey = htmlentities($this->input->post('ipmbl_tanggalsurvey'),ENT_QUOTES);
		$ipmbl_usaha = htmlentities($this->input->post('ipmbl_usaha'),ENT_QUOTES);
		$ipmbl_alamatusaha = htmlentities($this->input->post('ipmbl_alamatusaha'),ENT_QUOTES);
				
		$ipmbl_updated_by = $this->m_t_ipmbl->__checkSession();
		$ipmbl_updated_date = date('Y-m-d H:i:s');
		
		if($ipmbl_updated_by != ''){
			$result = 'sessionExpired';
		}else{
			$data = array(
				'ipmbl_luas'=>$ipmbl_luas,
				'ipmbl_volume'=>$ipmbl_volume,
				'ipmbl_keperluan'=>$ipmbl_keperluan,
				'ipmbl_alamat'=>$ipmbl_alamat,
				'ipmbl_kelurahan'=>$ipmbl_kelurahan,
				'ipmbl_kecamatan'=>$ipmbl_kecamatan,
				'ipmbl_status'=>$ipmbl_status,
				'ipmbl_tanggalsurvey'=>$ipmbl_tanggalsurvey,
				'ipmbl_usaha'=>$ipmbl_usaha,
				'ipmbl_alamatusaha'=>$ipmbl_alamatusaha,
				);
			$result = $this->m_t_ipmbl->__update($data, $ipmbl_id, '', '');
		}
		echo $result;
	}
	
	function delete(){
		$ids = $this->input->post('ids');
		$arrayId = json_decode($ids);
		$result = $this->m_t_ipmbl->__delete($arrayId,'');
		echo $result;
	}
	
	function search(){
		$limit_start = (integer)$this->input->post('start');
		$limit_end = (integer)$this->input->post('limit');
		$ipmbl_luas = htmlentities($this->input->post('ipmbl_luas'),ENT_QUOTES);
		$ipmbl_luas = is_numeric($ipmbl_luas) ? $ipmbl_luas : 0;
		$ipmbl_volume = htmlentities($this->input->post('ipmbl_volume'),ENT_QUOTES);
		$ipmbl_volume = is_numeric($ipmbl_volume) ? $ipmbl_volume : 0;
		$ipmbl_keperluan = htmlentities($this->input->post('ipmbl_keperluan'),ENT_QUOTES);
		$ipmbl_alamat = htmlentities($this->input->post('ipmbl_alamat'),ENT_QUOTES);
		$ipmbl_kelurahan = htmlentities($this->input->post('ipmbl_kelurahan'),ENT_QUOTES);
		$ipmbl_kelurahan = is_numeric($ipmbl_kelurahan) ? $ipmbl_kelurahan : 0;
		$ipmbl_kecamatan = htmlentities($this->input->post('ipmbl_kecamatan'),ENT_QUOTES);
		$ipmbl_kecamatan = is_numeric($ipmbl_kecamatan) ? $ipmbl_kecamatan : 0;
		$ipmbl_status = htmlentities($this->input->post('ipmbl_status'),ENT_QUOTES);
		$ipmbl_status = is_numeric($ipmbl_status) ? $ipmbl_status : 0;
		$ipmbl_tanggalsurvey = htmlentities($this->input->post('ipmbl_tanggalsurvey'),ENT_QUOTES);
		$ipmbl_usaha = htmlentities($this->input->post('ipmbl_usaha'),ENT_QUOTES);
		$ipmbl_alamatusaha = htmlentities($this->input->post('ipmbl_alamatusaha'),ENT_QUOTES);
				
		$params = array(
			'ipmbl_luas'=>$ipmbl_luas,
			'ipmbl_volume'=>$ipmbl_volume,
			'ipmbl_keperluan'=>$ipmbl_keperluan,
			'ipmbl_alamat'=>$ipmbl_alamat,
			'ipmbl_kelurahan'=>$ipmbl_kelurahan,
			'ipmbl_kecamatan'=>$ipmbl_kecamatan,
			'ipmbl_status'=>$ipmbl_status,
			'ipmbl_tanggalsurvey'=>$ipmbl_tanggalsurvey,
			'ipmbl_usaha'=>$ipmbl_usaha,
			'ipmbl_alamatusaha'=>$ipmbl_alamatusaha,
			'limit_start' => $limit_start,
			'limit_end' => $limit_end
		);
		
		$result = $this->m_t_ipmbl->search($params);
		echo $result;
	}
	
	function printExcel(){
		$outputType = $this->input->post('action');
		
		$searchText = $this->input->post('query');
		$currentAction = $this->input->post('currentAction');
		$ipmbl_luas = htmlentities($this->input->post('ipmbl_luas'),ENT_QUOTES);
		$ipmbl_luas = is_numeric($ipmbl_luas) ? $ipmbl_luas : 0;
		$ipmbl_volume = htmlentities($this->input->post('ipmbl_volume'),ENT_QUOTES);
		$ipmbl_volume = is_numeric($ipmbl_volume) ? $ipmbl_volume : 0;
		$ipmbl_keperluan = htmlentities($this->input->post('ipmbl_keperluan'),ENT_QUOTES);
		$ipmbl_alamat = htmlentities($this->input->post('ipmbl_alamat'),ENT_QUOTES);
		$ipmbl_kelurahan = htmlentities($this->input->post('ipmbl_kelurahan'),ENT_QUOTES);
		$ipmbl_kelurahan = is_numeric($ipmbl_kelurahan) ? $ipmbl_kelurahan : 0;
		$ipmbl_kecamatan = htmlentities($this->input->post('ipmbl_kecamatan'),ENT_QUOTES);
		$ipmbl_kecamatan = is_numeric($ipmbl_kecamatan) ? $ipmbl_kecamatan : 0;
		$ipmbl_status = htmlentities($this->input->post('ipmbl_status'),ENT_QUOTES);
		$ipmbl_status = is_numeric($ipmbl_status) ? $ipmbl_status : 0;
		$ipmbl_tanggalsurvey = htmlentities($this->input->post('ipmbl_tanggalsurvey'),ENT_QUOTES);
		$ipmbl_usaha = htmlentities($this->input->post('ipmbl_usaha'),ENT_QUOTES);
		$ipmbl_alamatusaha = htmlentities($this->input->post('ipmbl_alamatusaha'),ENT_QUOTES);
				
		$params = array(
			'searchText' => $searchText,
			'ipmbl_luas'=>$ipmbl_luas,
			'ipmbl_volume'=>$ipmbl_volume,
			'ipmbl_keperluan'=>$ipmbl_keperluan,
			'ipmbl_alamat'=>$ipmbl_alamat,
			'ipmbl_kelurahan'=>$ipmbl_kelurahan,
			'ipmbl_kecamatan'=>$ipmbl_kecamatan,
			'ipmbl_status'=>$ipmbl_status,
			'ipmbl_tanggalsurvey'=>$ipmbl_tanggalsurvey,
			'ipmbl_usaha'=>$ipmbl_usaha,
			'ipmbl_alamatusaha'=>$ipmbl_alamatusaha,
			'currentAction' => $currentAction,
			'return_type' => 'array',
			'limit_start' => 0,
			'limit_end' => 0
		);
		
		$record = $this->m_t_ipmbl->printExcel($params);
		$data['records'] = $record[1];
		$data['type']=$outputType;
		
		$print_view=$this->load->view('template/p_t_ipmbl.php',$data,TRUE);
		
		if(!file_exists('print')){ mkdir('print'); }
		if($outputType == 'PRINT'){
			$print_file=fopen('print/t_ipmbl_list.html','w+');
		}elseif($outputType == 'EXCEL'){
			$print_file=fopen('print/t_ipmbl_list.xls','w+');
		}
		fwrite($print_file, $print_view);
		echo 'success';
	}
	
}