<?php
namespace App\Controllers;
use App\Models\Menu_model;
use App\Models\Users_model;

class MYController extends BaseController {

	public $page_data;
	public $db;
	public $users_model;
	public $menu_model;

	public function __construct()
	{
		//Helpers
		helper('url');
		helper('basic');
		date_default_timezone_set( setting('timezone') );
		$this->users_model = new Users_model();
		$this->menu_model = new Menu_model();
		$session = \Config\Services::session();

		if(!is_logged()){
			return redirect()->route('/');
		}
		$this->db = \Config\Database::connect();
		if( !empty($this->db->username) && !empty($this->db->hostname) && !empty($this->db->database) ){ }else{
			$this->users_model->logout();
			die('Database is not configured');
		}

		$this->page_data['url'] = (object) [
			'assets' => assets_url().'/'
		];

		$this->page_data['app'] = (object) [
			'site_title' => setting('company_name')
		];

		$this->page_data['page'] = (object) [
			'title' => 'Dashboard',
			'menu' => 'dashboard',
			'submenu' => '',
		];

	}

	public function format_date($fecha){
        $fecha2 = explode("/", $fecha);
        $fecha_old=$fecha2[1]."/".$fecha2[0]."/".$fecha2[2];
		$fecha_new = strtotime($fecha_old);
		$fecha = date('Y-m-d',$fecha_new);
		return $fecha;
	}

	public function format_date_interface($fecha){
		$fecha_new = strtotime($fecha);
		$fecha = date('d/m/Y',$fecha_new);
		return $fecha;
	}
	
	public function menu_padre(){
		$id_padre=$this->menu_model->getIdFather($_SESSION["menu_active"]);
		$padre=$this->menu_model->getById($id_padre[0]->menu_padre_id);
		if($padre!==NULL){
			$_SESSION['menu_padre_active']=$padre->title;
		}else{
			$_SESSION['menu_padre_active']='';
		}
	}
}

/* End of file My_Controller.php */
/* Location: ./application/core/My_Controller.php */