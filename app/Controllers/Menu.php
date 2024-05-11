<?php
namespace App\Controllers;
use App\Models\Activity_model;
use App\Models\Menu_model;

class Menu extends MYController{

	public $page_data;
	public $activity_model;
	public $menu_model;

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Menus';
		$this->page_data['page']->menu = 'menus';
		$this->page_data['titulo'] = "Menus";
  		$this->page_data['subTitulo'] = "Administrar";
		//Helpers
		helper('basic');
		//Models
		$this->activity_model = new Activity_model();
		$this->menu_model = new Menu_model();		
		//Libraries
		$this->request = \Config\Services::request();
		$this->session = \Config\Services::session();
		//Variables Menu		
		$_SESSION["menu_active"] = 'Menu';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		ifPermissions('menu_list');
  		$this->page_data['tablaTitulo'] = "Lista de Menus";
		$this->page_data['data_menus'] = $this->menu_model->getActive();
		return view('menu/menu_l',$this->page_data);
	}

	public function add()
	{
		ifPermissions('menu_add');
		$this->page_data['tablaTitulo'] = "Nuevo menu";
		$this->page_data['accion'] = "Nuevo menu";
		$this->page_data['return_url'] = "menu";
		$this->page_data['postAction'] = "menu/save";
		$this->page_data['data_menus'] = $this->menu_model->getActive();
		$data = array(
					'id' => "0",
					'txtName' => "",
					'txtIcon' => "",
					'txtTitulo' => "",
					'txtTypeObject' => "",
					'txtObject' => "",
					'txtOrder' => "",
					'txtMenuPadreID' => "",
					'data_padres'=>$this->menu_model->getMenusPadres(),
					'data_tipo_objeto'=>array(array('id' => 'Action','tipo' => 'Action'),array('id' => 'Menu','tipo' => 'Menu')),
				);
		return view('menu/menu_f',$this->page_data + $data);
	}

	public function save()
	{
		ifPermissions('menu_add');
		postAllowed();
		$color = $this->menu_model->create([
			'name' => $this->request->getPost('txtName'),
			'title' => $this->request->getPost('txtTitulo'),
			'icon' => $this->request->getPost('txtIcon'),
			'type_object' => $this->request->getPost('txtTypeObject'),
			'object' => $this->request->getPost('txtObject'),
			'order' => $this->request->getPost('txtOrder'),
			'menu_padre_id' => $this->request->getPost('txtMenuPadreID'),
			'created_at' => date("Y-m-d H:i:s"),
			'estado' => '1'
		]);
		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'Nuevo registro creado');
		$this->activity_model->action_create("Menu");
        return redirect()->route('menu');
	}

	public function edit($id)
	{
		ifPermissions('menu_edit');
		$this->page_data['accion'] = "Editar menu";
		$this->page_data['return_url'] = "menu";
		$this->page_data['postAction'] = "menu/update";
		$registro = $this->menu_model->getById($id);
		$data = array(
					'id' => $registro->id,
					'txtName' => $registro->name,
					'txtTitulo' => $registro->title,
					'txtIcon' => $registro->icon,
					'txtTypeObject' => $registro->type_object,
					'txtObject' => $registro->object,
					'txtOrder' => $registro->order,
					'txtMenuPadreID' => $registro->menu_padre_id,
					'data_padres'=>$this->menu_model->getMenusPadres(),
					'data_tipo_objeto'=>array(array('id' => 'Action','tipo' => 'Action'),array('id' => 'Menu','tipo' => 'Menu')),
				);
		return view('menu/menu_f',$this->page_data + $data);
	}

	public function update()
	{
		ifPermissions('menu_edit');
		postAllowed();
		$id = $this->request->getPost('id');
		$data = [
			'name' => $this->request->getPost('txtName'),
			'title' => $this->request->getPost('txtTitulo'),
			'icon' => $this->request->getPost('txtIcon'),
			'type_object' => $this->request->getPost('txtTypeObject'),
			'object' => $this->request->getPost('txtObject'),
			'order' => $this->request->getPost('txtOrder'),
			'menu_padre_id' => $this->request->getPost('txtMenuPadreID'),
			'updated_at' => date("Y-m-d H:i:s"),
		];
		$registro = $this->menu_model->updateMenu($id, $data);
		$this->activity_model->action_edit("Menu", $id);
		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'Registro actualizado satisfactoriamente');		
		return redirect()->route('menu');
	}

	public function deleteAction($id)
	{
		ifPermissions('menu_delete');
		if($id!==1){ }else{
			redirect('/','refresh');
			return;
		}
		$id = $this->menu_model->deleteLogic($id);
		$this->activity_model->action_delete("Menu", $id);
		$status = array(
						"STATUS"=>"true",
						"mensaje"=>"Registo eliminado satisfactoriamente",
						"redirect_url"=>site_url('menu')
						);
		echo json_encode($status);
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */