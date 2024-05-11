<?php
namespace App\Controllers;
use App\Models\Menu_model;
use App\Models\Users_model;
use App\Models\Activity_model;

class Activity_logs extends MYController {

	public $menu_model;
	public $activity_model;
	public $page_data;

	public function __construct()
	{
		parent::__construct();
		helper('basic');
		$this->page_data['page']->title = 'Activity Logs';
		$this->page_data['page']->menu = 'activity_logs';
		//Models
		$this->menu_model = new Menu_model();
		$this->users_model = new Users_model();
		$this->activity_model = new Activity_model();
		$_SESSION["menu_active"] = 'Activity Logs';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		ifPermissions('activity_log_list');
		$this->page_data['tablaTitulo'] = "Lista de Actividades";
		$ip = !empty(get('ip')) ? urldecode(get('ip')) : false;
		$user = !empty(get('user')) ? urldecode(get('user')) : false;

		$arg = [];

		if($ip)
			$arg['ip_address'] = $ip;

		if($user)
			$arg['user'] = $user;

		$this->page_data['activity_logs'] = $this->activity_model->getByWhere($arg, [
			'order' => [ 'id', 'desc' ]
		]);
		$this->page_data['filter_ip'] = $ip;
		$this->page_data['filter_user'] = $user;
		$this->page_data['users_model'] = $this->users_model->getAllUsers();
        return view('activity_logs/list',$this->page_data);
	}

	public function view($id)
	{
		ifPermissions('activity_log_view');
		$this->page_data['return_url'] = "activity_logs";
		$this->page_data['accion'] = "Vista de la actividad";
		$this->page_data['activity'] = $this->activity_model->getById($id);
		$this->page_data['users_model'] = $this->users_model;
        return view('activity_logs/view',$this->page_data);
	}

}

/* End of file Activity_logs.php */
/* Location: ./application/controllers/Activity_logs.php */