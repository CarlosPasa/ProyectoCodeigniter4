<?php
namespace App\Models;

use App\Core\MYModel;

class Categoria_model extends MYModel {

	public $table = 'categoria';
	public $db;

	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
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
	public function create($data)
	{
		return $this->db->insert($data);
	}
	function deleteLogic($id)
	{
		$this->db->set("`estado`=b'0'");
		$this->db->where('id', $id);
		$this->db->update();
		return true;
	}
}

/* End of file Categoria_model.php */
/* Location: ./application/models/Categoria_model.php */