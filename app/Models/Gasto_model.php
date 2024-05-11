<?php
namespace App\Models;

use App\Core\MYModel;
use CodeIgniter\Model;

class Gasto_model extends MYModel {

	public $table = 'gasto ga';
	public $db;
	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
		$db_conexion->query("SET lc_time_names = 'es_ES'");
		$this->db= $db_conexion->table($this->table);
	}

	public function getValueByKey($key = '')
	{
		return ($query = $this->db->getWhere(['key' => $key], 1)) && $query->getNumRows() > 0 ? $query->getRow()->value : null;
	}

	public function getByKey($key = '')
	{
		return ($query = $this->db->getWhere(['key' => $key], 1)) && $query->getNumRows() > 0 ? $query->getRow() : null;
	}

	public function updateByKey($key, $value)
	{
		$this->db->where('key', $key);
		return $this->db->update($this->table, [
			'value' => $value
		]);
	}
	public function getAmountByMonth()
	{
		$this->db->select('SUM(amount) as gasto_mes');
		$this->db->where('MONTH(date)=MONTH(CURDATE())');
		$this->db->where('estado', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getAmountByOneMonth($month)
	{
		$this->db->select('SUM(amount) as gasto_mes');
		$this->db->where('MONTH(date)',$month);
		$this->db->where('estado', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getAmountsByYear()
	{
		$this->db->select('MONTH(date) AS mes');
		$this->db->select('SUM(amount) AS Total');
		$this->db->where('YEAR(date)=YEAR(CURDATE())');
		$this->db->where('estado', '1');
		$this->db->groupBy('mes');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getAmountSavingByMonth()
	{
		$this->db->select('SUM(amount) as gasto_mes');
		$this->db->where('MONTH(date)=MONTH(CURDATE())');
		$this->db->where('estado', '1');
		$this->db->where('save', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getAmountSavingByOneMonth($month)
	{
		$this->db->select('SUM(amount) as ahorro_mes');
		$this->db->where('MONTH(date)',$month);
		$this->db->where('estado', '1');
		$this->db->where('save', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getAmountsSavingByYear()
	{
		$this->db->select('MONTH(date) AS mes');
		$this->db->select('MONTHNAME(ga.date) AS nombre_mes');
		$this->db->select('SUM(amount) AS Total');
		$this->db->where('YEAR(date)=YEAR(CURDATE())');
		$this->db->where('estado', '1');
		$this->db->where('save', '1');
		$this->db->groupBy('mes,nombre_mes');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getAmountByCategoryByMonth()
	{
		$this->db->select('ga.id_category, ca.description , SUM(ga.amount) AS amount');
		$this->db->join('categoria ca', 'ca.id=ga.id_category','inner');
		$this->db->where('MONTH(ga.date)=MONTH(CURDATE())');
		$this->db->where('ga.estado', '1');
		$this->db->groupBy('ga.id_Category');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getRecordsByYear()
	{
		$this->db->select('ga.*, ca.description as category');
		$this->db->join('categoria ca', 'ca.id=ga.id_category','inner');
		$this->db->where('YEAR(ga.date)=YEAR(CURDATE())');
		$this->db->where('ga.estado', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getRecordsByMonthYear()
	{
		$this->db->select('ga.*, ca.description as category');
		$this->db->join('categoria ca', 'ca.id=ga.id_category','inner');
		$this->db->where('MONTH(ga.date)=MONTH(CURDATE())');
		$this->db->where('YEAR(ga.date)=YEAR(CURDATE())');
		$this->db->where('ga.estado', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getRecordsByOneMonthYear($month)
	{
		$this->db->select('ga.*, ca.description as category');
		$this->db->join('categoria ca', 'ca.id=ga.id_category','inner');
		$this->db->where('MONTH(ga.date)',$month);
		$this->db->where('YEAR(ga.date)=YEAR(CURDATE())');
		$this->db->where('ga.estado', '1');
		$query = $this->db->get();
		return $query->getResult();
	}
	public function updateGasto($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update($data);
	}
	function deleteLogic($id)
	{
		$this->db->set("`estado`=b'0'");
		$this->db->where('id', $id);
		$this->db->update();
		return true;
	}
}

/* End of file Gasto_model.php */
/* Location: ./application/models/Gasto_model.php */