<?php
namespace App\Controllers;
use App\Models\Activity_model;
use App\Models\Permissions_model;

class Permissions extends MYController {

	public $page_data;
	public $activity_model;
	public $permissions_model;
	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Permissions Management';
		$this->page_data['page']->menu = 'permissions';
		//Helpers
		helper('basic');
		//Models
		$this->activity_model = new Activity_model();
		$this->permissions_model = new Permissions_model();		
		//Libraries
		$this->request = \Config\Services::request();
		$this->session = \Config\Services::session();
		//Variables Menu
		$_SESSION["menu_active"] = 'Manage Permissions';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		
		ifPermissions('permissions_list');
		$this->page_data['tablaTitulo'] = "Lista de Permisos";
		$this->page_data['permissions'] = $this->permissions_model->getAllPermissions();
        return view('permissions/list',$this->page_data);
		
	}

	public function add()
	{

		ifPermissions('permissions_add');
		$this->page_data['return_url'] = "permissions";
		$this->page_data['accion'] = "Editar Permiso";
        return view('permissions/add',$this->page_data);
	}

	public function edit($id)
	{

		ifPermissions('permissions_edit');
		$this->page_data['return_url'] = "permissions";
		$this->page_data['accion'] = "Editar Permiso";
		$this->page_data['permission'] = $this->permissions_model->getById($id);
        return view('permissions/edit',$this->page_data);
	}

	public function save()
	{
		
		postAllowed();

		ifPermissions('permissions_add');
		$permission = $this->permissions_model->create([
			'title' => $this->request->getPost('name'),
			'code' => $this->request->getPost('code'),
		]);

		$this->activity_model->add("New Permission #$permission Created by User: #".logged('id')->id);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'New Permission Created Successfully');
        return redirect()->route('permissions');

	}

	public function update($id)
	{
		
		postAllowed();

		ifPermissions('permissions_edit');

		$data = [
			'title' => $this->request->getPost('name'),
			'code' => $this->request->getPost('code'),
		];

		$permission = $this->permissions_model->updatePermission($id, $data);

		$this->activity_model->add("Permission #$id Updated by User: #".logged('id')->id);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'Permission has been Updated Successfully');
		
		return redirect()->route('permissions');

	}

	public function delete($id)
	{

		ifPermissions('permissions_delete');

		$this->permissions_model->deletePermission($id);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'Permission has been Deleted Successfully');

		$this->activity_model->add("Permission #$id Deleted by User: #".logged('id')->id);

		return redirect()->route('permissions');

	}

	public function checkIfUnique()
	{
		
		$code = get('code');

		if(!$code)
			die('Invalid Request');

		$arg = [ 'code' => $code ];

		if(!empty(get('notId')))
			$arg['id !='] = get('notId');

		$query = $this->permissions_model->getByWhere($arg);

		if(!empty($query))
			die('false');
		else
			die('true');
		

	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */