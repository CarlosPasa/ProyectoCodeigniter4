<?php
namespace App\Models;

namespace App\Models;
use CodeIgniter\Model;

class Menu_model extends Model{


	public $table = 'menu';
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

	public function getMenusOrder()
	{
		$this->db->orderBy("order", "asc");
		return $this->db->get()->getResult();
	}

	public function getIdFather($son)
	{
		$this->db->select("menu_padre_id");
		$this->db->where('title',$son);
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getMenusPadres()
	{
		$this->db->where('type_object','Menu');
		$this->db->orderBy("order", "asc");
		return $this->db->get()->getResult();
	}
	public function getById($id)
	{
		return $this->db->getWhere([ 'id' => $id ])->getRow();
	}
	public function getActive()
	{
		return $this->db->getWhere(['estado' => '1'])->getResult();
	}
	public function create($data)
	{
		return $this->db->insert($data);
	}
	function deleteLogic($id)
	{
		$data =  array(
				'estado' => '0'
				);
		$this->db->where('id', $id);
		$this->db->update($data);
		return true;
	}
	public function updateMenu($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update($data);
	}
}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */