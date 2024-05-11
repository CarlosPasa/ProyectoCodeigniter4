<?php
namespace App\Controllers;
use App\Models\Settings_model;
use App\Models\Activity_model;
use App\Models\Roles_model;
class Settings extends MYController {


	public $page_data;
	public $settings_model;
	public $activity_model;
	public $roles_model;
	public $session;
	public function __construct()
	{
		parent::__construct();
		$this->settings_model = new Settings_model();
		$this->activity_model = new Activity_model();
		$this->roles_model = new Roles_model();
		$this->session = \Config\Services::session();
		$this->page_data['page']->title = 'Settings';
		$this->page_data['page']->menu = 'settings';
	}

	public function index()
	{
		ifPermissions('company_settings');
		$this->page_data['settings'] =  $this->roles_model->getAllRoles();
		$this->page_data['page']->submenu = 'company';
		$this->page_data['accion'] = "Settings";
		return view('settings/company', $this->page_data);
	}

	public function company()
	{
		
	}

	public function companyUpdate()
	{

		ifPermissions('company_settings');

		postAllowed();
		
		$this->settings_model->updateByKey('company_name', post('company_name'));
		$this->settings_model->updateByKey('company_email', post('company_email'));
		$this->settings_model->updateByKey('timezone', post('timezone'));

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'Settings has been Updated Successfully');

		$this->activity_model->add("Company Settings Updated by User: #".logged('id')->id);
        return redirect()->route('settings/company');
	}

}

/* End of file Settings.php */
/* Location: ./application/controllers/Settings.php */