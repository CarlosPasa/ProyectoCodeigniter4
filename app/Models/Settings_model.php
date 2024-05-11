<?php
namespace App\Models;
use CodeIgniter\Model;

class Settings_model extends Model{

	public $db;
	public $db_conexion;
	public $table = 'settings';
	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
		$this->db = $db_conexion->table($this->table);
	}

	public function getValueByKey($key = '')
	{
		return ($query = $this->db->getWhere(['key' => $key], 1)) && $this->db->countAllResults() > 0 ? $query->getRow()->value : null;
	}

	public function getByKey($key = '')
	{
		return ($query = $this->db->getWhere(['key' => $key], 1)) && $this->db->countAllResults() > 0 ? $query->getRow() : null;
	}

	public function updateByKey($key, $value)
	{
		$this->db->set('value', $value);
		$this->db->where('key', $key);
		$this->db->update();
	}
	public function getById($id)
	{
		return $this->db->getWhere([ 'id' => $id ])->getRow();
	}
	public function getByWhere($whereArg, $args = [])
	{
		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		return $this->db->getWhere($whereArg)->getResult();
	}
}

/* End of file Settings_model.php */
/* Location: ./application/models/Settings_model.php */