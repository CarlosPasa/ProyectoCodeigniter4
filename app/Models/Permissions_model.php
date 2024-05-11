<?php
namespace App\Models;
use CodeIgniter\Model;


class Permissions_model extends Model{

	public $table = 'permissions';
	public $db;
	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
		$this->db= $db_conexion->table($this->table);
	}
	public function getById($id)
	{
		return $this->db->getWhere([ 'id' => $id ])->getRow();
	}
	public function getAllPermissions()
	{
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getByWhere($whereArg, $args = [])
	{
		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		return $this->db->getWhere($whereArg)->getResult();
	}
	public function create($data)
	{
		return $this->db->insert($data);
	}
	public function updatePermission($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update($data);
	}
	function deletePermission($id)
	{
		$this->db->where('id', $id);
		$this->db->delete();
		return true;
	}	
}

/* End of file Permissions_model.php */
/* Location: ./application/models/Permissions_model.php */