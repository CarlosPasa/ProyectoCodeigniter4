<?php
namespace App\Controllers;

use App\Models\Activity_model;
use App\Models\Menu_model;
use App\Models\Permissions_model;
use App\Models\Roles_model;
use App\Models\Role_menus_model;
use App\Models\Role_permissions_model;
use App\Models\Settings_model;


class Roles extends MYController {

	public $activity_model;
	public $menu_model;
	public $permissions_model;
	public $roles_model;
	public $role_menus_model;
	public $role_permissions_model;
	public $settings_model;
	public $page_data;
	public $request;
	public $session;
	

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Roles Management';
		$this->page_data['page']->menu = 'roles';
		//Helpers
		helper('basic');
		//Models		
		$this->activity_model = new Activity_model();		
		$this->menu_model = new Menu_model();
		$this->permissions_model = new Permissions_model();
		$this->roles_model = new Roles_model();
		$this->role_menus_model = new Role_menus_model();
		$this->role_permissions_model = new Role_permissions_model();
		$this->settings_model = new Settings_model();
		//Libraries
		$this->request = \Config\Services::request();
		$this->session = \Config\Services::session();
		//Variables Menu
		$_SESSION["menu_active"] = 'Manage Roles';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		ifPermissions('roles_list');
		$this->page_data['tablaTitulo'] = "Lista de Roles";
		$this->page_data['roles'] = $this->roles_model->getAllRoles();
        return view('roles/list',$this->page_data);	
	}

	public function add()
	{
		ifPermissions('roles_add');
		$this->page_data['return_url'] = "roles";
		$this->page_data['accion'] = "Crear Rol";
		$this->page_data['permissions']=$this->permissions_model->getAllPermissions();
        return view('roles/add',$this->page_data);
	}

	public function save()
	{

		ifPermissions('roles_add');
		
		postAllowed();

		$role = $this->roles_model->create([
			'title' => $this->request->getPost('name'),
		]);

		$Data = [];
		foreach (post('permission') as $permission) {
			array_push($Data, [
				'role' => $role,
				'permission' => $permission,
			]);
		}

		$this->role_permissions_model->create_batch($Data);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'New Role Created Successfully');

		$this->activity_model->add("New Role #$role Created by User: #".logged('id')->id);
        return redirect()->route('roles');
	}

	public function edit($id)
	{
		ifPermissions('roles_edit');
		$this->page_data['return_url'] = "roles";
		$this->page_data['accion'] = "Editar Rol";
		$this->page_data['role'] = $this->roles_model->getById($id);
		$permissions = $this->role_permissions_model->getByWhere(['role' => $this->page_data['role']->id]);
		$permissions = array_map(function($data)
		{
			return $data->permission;
		}, $permissions);
		$menus = $this->role_menus_model->getMenus($this->page_data['role']->id);
		
		$menus = array_map(function($data)
		{
			return $data->name;
		}, $menus);
		$this->page_data['menus']=$this->menu_model->getMenusOrder();
		$this->page_data['permissions']=$this->permissions_model->getAllPermissions();
		$this->page_data['role_permissions'] = $permissions;
        $this->page_data['role_menus'] = $menus;
        //echo json_encode($this->page_data);
        return view('roles/edit',$this->page_data);
	}


	public function update($id)
	{

		ifPermissions('roles_edit');
		
		postAllowed();

		$data = [
			'title' => $this->request->getPost('name'),
		];

		if(!empty($password = post('password')))
			$data['password'] = md5($password);

		$role = $this->roles_model->updateRole($id, $data);

		// Data which will be added (Permissions)
		$Data = [];
		foreach (post('permission') as $permission) {
			if( !empty($this->role_permissions_model->getByWhere([ 'role' => $id, 'permission' => $permission ])) ){ }else{
				array_push($Data, [
					'role' => $role,
					'permission' => $permission,
				]);
			}
		}
		if(!empty($Data))
			$this->role_permissions_model->create_batch($Data);
		$all_permissions = $this->role_permissions_model->getByWhere(['role' =>  $role]);
		if(!empty($all_permissions)){
			// Permissions which will be deleted
			foreach ($all_permissions as $data) {
				if(!in_array($data->permission, post('permission'))){
					$this->role_permissions_model->delete($data->id);
				}
			}
		}

		// Data which will be added (Menus)
		$Data = [];
		foreach (post('menus') as $menu) {
			if( !empty($this->role_menus_model->getByWhere([ 'role' => $id, 'menu' => $menu ])) ){ }else{
				array_push($Data, [
					'role' => $role,
					'menu' => $menu,
				]);
			}
		}
		if(!empty($Data))
			$this->role_menus_model->create_batch($Data);
		$all_menus = $this->role_menus_model->getByWhere(['role' =>  $role]);
		if(!empty($all_menus)){
			// Permissions which will be deleted
			foreach ($all_menus as $data) {
				if(!in_array($data->menu, post('menus'))){
					$this->role_menus_model->deleteRole($data->id);
				}
			}
		}
		
		$this->activity_model->add("Role #$role Updated by User: #".logged('id')->id);
		
		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'User Role has been Updated Successfully');
		
		return redirect()->route('roles');
	}

}

/* End of file Roles.php */
/* Location: ./application/controllers/Roles.php */