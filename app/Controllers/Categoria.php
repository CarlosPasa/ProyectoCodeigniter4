<?php
namespace App\Controllers;
use App\Models\Activity_model;
use App\Models\Categoria_model;
use App\Models\Menu_model;


class Categoria extends MYController{

	public $activity_model;
	public $categoria_model;
	public $menu_model;
	public $request;
	public $session;
	public $validation;
	protected $helpers = ['form'];
	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Categorias';
		$this->page_data['page']->menu = 'categoria';
		$this->page_data['titulo'] = "Categorias";
  		$this->page_data['subTitulo'] = "Administrar";
		//Helpers
		helper('basic');
		helper('vdisenio2');
		//Models
		$this->activity_model = new Activity_model();
		$this->categoria_model = new Categoria_model();
		$this->menu_model = new Menu_model();		
		//Libraries
		$this->validation =  \Config\Services::validation();
		$this->request = \Config\Services::request();
		$this->session = \Config\Services::session();
		//Variables Menu
		$_SESSION["menu_active"] = 'Categoria';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		ifPermissions('categoria_list');		
  		$this->page_data['tablaTitulo'] = "Lista de Categorias";
		$this->page_data['categorias'] = $this->categoria_model->getActive();
		return view('categoria/categoria_l',$this->page_data);
	}

	public function edit($id)
	{
		ifPermissions('categoria_edit');
		$this->page_data['accion'] = "Editar categoria";
		$this->page_data['return_url'] = "categoria";
		$this->page_data['postAction'] = "categoria/editAction";
		$registro = $this->categoria_model->getById($id);
		$data = array(
					'id' => $registro->id,
					'txtNombreCategoria' => $registro->description
		);
		$dataAdicional = array(			
		);
		return view('categoria/categoria_f',$this->page_data + $data + $dataAdicional);
	}

	public function editAction()
	{
		$id = $this->request->getPost('id');
		$data = array(
					'description' => $this->request->getPost('txtNombreCategoria'),
					'updated_at' => date("Y-m-d H:i:s"),
		);
		$registro = $this->categoria_model->updateId($id, $data);
		$status = array(
						"STATUS"      =>"true",
						"mensaje"     =>"El registro se ha actualizado satisfactoriamente"
						);
		echo json_encode ($status);
	}

	public function deleteAction($id)
	{
		ifPermissions('categoria_delete');
		$this->categoria_model->deleteLogic($id);
		$this->activity_model->action_delete("Categoria", $id);
		$status = array(
						"STATUS"=>"true",
						"mensaje"=>"Registo eliminado satisfactoriamente",
						"redirect_url"=>site_url('categoria')
						);
		echo json_encode($status);
	}

	public function nuevoModal()
    {
		ifPermissions('categoria_add');
		$this->page_data['return_url'] = "categoria";
		$this->page_data['postAction'] = "categoria/nuevoModalAction";
        $data = array(
            'id'			=> "0",
			'txtNombreCategoria'		=> ""
        );
		$dataAdicional = array(
        );
		return view('categoria/categoria_f_modal',$this->page_data + $data + $dataAdicional);
    }
	
	public function nuevoModalAction()
    {
		$data = array(
					'description' => $this->request->getPost('txtNombreCategoria'),
					'estado' => '1'
 		);
		$rules = [
			'description' => [
				'field' => 'txtNombreCategoria',
				'label' => 'Nombre del Categoria',
				'rules' => 'required'
			]
		];
		$this->validation->setRules($rules);
		if($this->validation->run($data) == FALSE){
			$status = array(
				"STATUS"  =>"false",
				"mensaje" => "Error al crear registro"//validation_errors(),//muestra los mensaje de la validacion
				);
			echo json_encode ($status);
		}else{
			$this->categoria_model->create($data);
			$categoria = $this->categoria_model->insertID();
			$this->activity_model->action_create("Categorias");
			$status = array(
							"STATUS"      =>"true",
							"mensaje"     =>"",
							"redirect_url" => 'categoria/edit/'.$categoria
							);
			echo json_encode ($status);
		}
	}
}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */