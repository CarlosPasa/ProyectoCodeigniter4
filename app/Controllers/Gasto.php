<?php
namespace App\Controllers;
use App\Models\Activity_model;
use App\Models\Categoria_model;
use App\Models\Gasto_model;
use App\Models\Menu_model;

class Gasto extends MYController{

	public $activity_model;
	public $categoria_model;
	public $gasto_model;
	public $menu_model;
	public $request;
	public $session;
	public $validation;
	protected $helpers = ['form'];
	public function __construct()
	{
		parent::__construct();
		//Textos
		$this->page_data['page']->title = 'Gastos';
		$this->page_data['page']->menu = 'gasto';
		$this->page_data['titulo'] = "Gastos";
  		$this->page_data['subTitulo'] = "Administrar";
		//Helpers
		helper('basic');
		helper('vdisenio2');
		//Models
		$this->activity_model = new Activity_model();
		$this->gasto_model = new Gasto_model();
		$this->categoria_model = new Categoria_model();
		$this->menu_model = new Menu_model();		
		//Libraries
		$this->validation =  \Config\Services::validation();
		$this->request = \Config\Services::request();
		$this->session = \Config\Services::session();
		//Variables Menu
		$_SESSION["menu_active"] = 'Gasto';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		ifPermissions('gasto_list');		
  		$this->page_data['tablaTitulo'] = "Lista de Gastos";
		$this->page_data['gastos'] = $this->gasto_model->getRecordsByMonthYear();
		$this->gasto_model->getAmountByMonth()[0]->gasto_mes ? $this->page_data['gasto_mes'] = $this->gasto_model->getAmountByMonth()[0]->gasto_mes:$this->page_data['gasto_mes']=0;
		return view('gasto/gasto_l',$this->page_data);
	}
	public function oneMonth($month)
	{
		ifPermissions('gasto_list');		
  		$this->page_data['tablaTitulo'] = "Lista de Gastos";
		$this->page_data['month'] = $month;
		$month == 0 ? $this->page_data['gastos'] = $this->gasto_model->getRecordsByYear() : $this->page_data['gastos'] = $this->gasto_model->getRecordsByOneMonthYear($month);
		$this->gasto_model->getAmountByOneMonth($month)[0]->gasto_mes ? $this->page_data['gasto_mes'] = $this->gasto_model->getAmountByOneMonth($month)[0]->gasto_mes:$this->page_data['gasto_mes']=0;
		$this->gasto_model->getAmountByOneMonth($month)[0]->gasto_mes ? $this->page_data['saldo'] = 2750-round($this->gasto_model->getAmountByOneMonth($month)[0]->gasto_mes):$this->page_data['saldo']=0;
		$this->gasto_model->getAmountSavingByOneMonth($month)[0]->ahorro_mes ? $this->page_data['ahorro'] = $this->gasto_model->getAmountSavingByOneMonth($month)[0]->ahorro_mes:$this->page_data['ahorro']=0;
		$this->page_data['month_data'] = array_merge(array(array('mes'=>0,'nombre_mes'=>'Todos')), stdToArray($this->gasto_model->getAmountsSavingByYear()));
		return view('gasto/gasto_l2',$this->page_data);
	}

	public function edit($id)
	{
		ifPermissions('gasto_edit');
		$this->page_data['accion'] = "Editar gasto";
		$this->page_data['return_url'] = "gasto";
		$this->page_data['postAction'] = "gasto/editAction";
		$registro = $this->gasto_model->getById($id);
		$data = array(
					'id' => $registro->id,
					'txtDetalleGasto'		=> $registro->description,
					'cbCategoryGasto'		=> $registro->id_category,
					'txtMontoGasto'		=> $registro->amount,
					'checkAhorro'		=> $registro->save,
					'categoria_data' => $this->categoria_model->getActive(),
					'txtFecha'=>$this->format_date_interface($registro->date),
		);
		$dataAdicional = array(			
		);
		return view('gasto/gasto_f',$this->page_data + $data + $dataAdicional);
	}

	public function editAction()
	{
		$id = $this->request->getPost('id');
		$data = array(
					'description' => $this->request->getPost('txtDetalleGasto'),
					'amount' => $this->request->getPost('txtMontoGasto'),
					'date' => $this->format_date($this->request->getPost('txtFecha')),
					'id_category' => $this->request->getPost('cbCategoryGasto'),
					'save' => $this->request->getPost('checkAhorro')? 1 : 0,
					'updated_at' => date("Y-m-d H:i:s"),
		);
		$registro = $this->gasto_model->updateGasto($id, $data);
		$status = array(
						"STATUS"      =>"true",
						"mensaje"     =>"El registro se ha actualizado satisfactoriamente"
						);
		echo json_encode ($status);
	}

	public function deleteAction($id)
	{
		ifPermissions('gasto_delete');
		$this->gasto_model->deleteLogic($id);
		$this->activity_model->action_delete("Gasto", $id);
		$status = array(
						"STATUS"=>"true",
						"mensaje"=>"Registo eliminado satisfactoriamente",
						"redirect_url"=>site_url('gasto')
						);
		echo json_encode($status);
	}

	public function nuevoModal()
    {
		ifPermissions('gasto_add');
		$this->page_data['return_url'] = "gasto";
		$this->page_data['postAction'] = "gasto/nuevoModalAction";
        $data = array(
            'id'			=> "0",
			'txtDetalleGasto'		=> "",
			'cbCategoryGasto'		=> "",
			'txtMontoGasto'		=> "",
			'categoria_data' => $this->categoria_model->getActive(),
			'txtFecha'=>date('d/m/Y'),			
        );
		$dataAdicional = array(
        );
		return view('gasto/gasto_f_modal',$this->page_data + $data + $dataAdicional);
    }
	
	public function nuevoModalAction()
    {
		$data = array(
					'description' => $this->request->getPost('txtDetalleGasto'),
					'amount' => $this->request->getPost('txtMontoGasto'),
					'save' => $this->request->getPost('checkAhorro')? 1 : 0,
					'id_category' => $this->request->getPost('cbCategoryGasto'),
					'date' => $this->format_date($this->request->getPost('txtFecha')),
					'created_at' => date("Y-m-d H:i:s"),
					'estado' => '1'
 		);
		$rules = [
			'description' => [
				'field' => 'txtDetalleGasto',
				'label' => 'Detalle del Gasto',
				'rules' => 'required'
			],
			'amount' => [
				'field' => 'txtMontoGasto',
				'label' => 'Monto del Gasto',
				'rules' => 'required|numeric'
			],
			'date' => [
				'field' => 'txtFecha',
				'label' => 'Fecha del Gasto',
				'rules' => 'required|valid_date'
			]
		];
		$this->validation->setRules($rules);
		if($this->validation->run($data) == FALSE){
			$status = array(
				"STATUS"  =>"false",
				"mensaje" => validation_errors(),//muestra los mensaje de la validacion
				);
			echo json_encode ($status);
		}else{
			$gasto = $this->gasto_model->create($data);
			$this->activity_model->action_create("Gastos");
			$status = array(
							"STATUS"      =>"true",
							"mensaje"     =>"",
							"redirect_url" =>site_url('gasto')
							// "redirect_url" => 'gasto/edit/'.$gasto
							);
			echo json_encode ($status);
		}
	}
}

/* End of file Gasto.php */
/* Location: ./application/controllers/Gasto.php */