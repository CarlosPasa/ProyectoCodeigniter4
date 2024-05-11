<?php
namespace App\Models;
use CodeIgniter\Model;

class Roles_model extends Model{

	public $db;

	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
		$this->db = $db_conexion->table('roles');
	}
	public function getByWhere($whereArg, $args = [])
	{
		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		return $this->db->getWhere($whereArg)->getResult();
	}
	public function getAllRoles()
	{
		$query = $this->db->get();
		return $query->getResult();
	}
	public function getById($id)
	{
		return $this->db->getWhere([ 'id' => $id ])->getRow();
	}
	public function updateRole($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update($data);
	}
	public function getActive()
	{
		return $this->db->getWhere(['estado' => '1'])->getResult();
	}
}

/* End of file Roles_model.php */
/* Location: ./application/models/Roles_model.php */