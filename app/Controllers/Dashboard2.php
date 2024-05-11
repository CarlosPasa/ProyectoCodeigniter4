<?php

namespace App\Controllers;
use App\Models\Menu_model;
use App\Models\Gasto_model;

class Dashboard2 extends MYController
{
    public $menu_model;
	public $gasto_model;
	public $validation;
	public function __construct()
	{
		//Models
		$this->menu_model = new Menu_model();
		$this->gasto_model = new Gasto_model();
		$this->validation =  \Config\Services::validation();
		$session = \Config\Services::session();
		$_SESSION["menu_active"] = 'Dashboard';
		$this->menu_padre($_SESSION["menu_active"]);
	}
    public function index()
    {
        helper('url');
        return view('dashboard/index');
    }
}
