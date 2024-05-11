<?php
namespace App\Controllers;
use App\Models\Users_model;
use App\Models\Activity_model;

class Logout extends MYController {
	
	public $activity_model;
	public $users_model;

	public function __construct()
	{
		helper('basic');
		if(!is_logged()){
			redirect('login','refresh');
		}
		$this->users_model = new Users_model();
		$this->activity_model = new Activity_model();
	}

	public function index()
	{
		
		$this->activity_model->add("User: ".logged('name')->name.' Logged Out');
		
		$this->users_model->logout();

		return redirect()->route('/');

	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Admin/Logout.php */