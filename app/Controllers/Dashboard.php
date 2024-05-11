<?php
namespace App\Controllers;
use App\Models\Menu_model;
use App\Models\Gasto_model;


class Dashboard extends MYController {

	public $menu_model;
	public $gasto_model;
	public $validation;
	public function __construct()
	{
		//Helpers
		helper('url');
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
		$array_mes_gastos = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; //Array para almacenar los gastos del mes en cada uno de los meses.
		$array_ahorro_gastos = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; //Array para almacenar los ahorros del mes en cada uno de los meses.

		$gastos_mysql = $this->gasto_model->getAmountsByYear();
		$gastos_anuales = 0;
		foreach ($gastos_mysql as $gastos) {
			$array_mes_gastos[$gastos->mes - 1] = round($gastos->Total,2);
			$gastos_anuales += doubleval($gastos->Total);
		}
		$ahorros_mysql = $this->gasto_model->getAmountsSavingByYear();
		$ahorros_anuales = 0;
		foreach ($ahorros_mysql as $ahorros) {
			$array_ahorro_gastos[$ahorros->mes - 1] = $ahorros->Total;
			$ahorros_anuales += doubleval($ahorros->Total);
		}
		$dataChart = $this->gasto_model->getAmountByCategoryByMonth();
		$ahorros_monto = [];
		$ahorros_descripcion = [];
		$ahorros_color=[];
		foreach ($dataChart as $ahorros) {
			array_push($ahorros_monto, doubleval($ahorros->amount));  //agrega el monto a la lista de montos
			array_push($ahorros_descripcion, $ahorros->description);   //agrega la descripcion a la lista de descripciones
			array_push($ahorros_color, $this->randomColor());   //agrega la descripcion a la lista de descripciones

		}
		// var_dump($ahorros_color);exit;
		$this->page_data['nro_movimientos_mes'] = count($this->gasto_model->getRecordsByMonthYear());
		$this->page_data['array_mes_gastos'] = json_encode($array_mes_gastos);
		$this->page_data['array_ahorro_gastos'] = json_encode($array_ahorro_gastos);
		$this->page_data['ahorros_monto'] = json_encode($ahorros_monto);
		$this->page_data['ahorros_descripcion'] = json_encode($ahorros_descripcion);
		$this->page_data['ahorros_color'] = json_encode($ahorros_color);
		$this->page_data['gastos_anuales'] = $gastos_anuales;
		$this->gasto_model->getAmountByMonth()[0]->gasto_mes ? $this->page_data['gasto_mes'] = $this->gasto_model->getAmountByMonth()[0]->gasto_mes:$this->page_data['gasto_mes'] = 0;
		$this->gasto_model->getAmountSavingByMonth()[0]->gasto_mes ? $this->page_data['ahorro_mes'] = $this->gasto_model->getAmountSavingByMonth()[0]->gasto_mes : $this->page_data['ahorro_mes'] = 0;
        return view('dashboard/index',$this->page_data);
	}
	function randomColor(){
		$str = "#";
		for ($i = 0; $i < 6; $i++) {
			$randNum = rand(0, 15);
			switch ($randNum) {
				case 10:
					$randNum = "A";
					break;
				case 11:
					$randNum = "B";
					break;
				case 12:
					$randNum = "C";
					break;
				case 13:
					$randNum = "D";
					break;
				case 14:
					$randNum = "E";
					break;
				case 15:
					$randNum = "F";
					break;
			}
			$str .= $randNum;
		}
		return $str;
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */