<?php
namespace App\Models;
use CodeIgniter\Model;

class Role_permissions_model extends Model{

	public $db;

	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
		$this->db = $db_conexion->table('role_permissions');
	}
	public function getByWhere($whereArg, $args = [])
	{

		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		return $this->db->getWhere($whereArg)->getResult();
	}
	function create_batch($data)
	{
		return $this->db->insertBatch($data);
	}
}

/* End of file Role_permissions_model.php */
/* Location: ./application/models/Role_permissions_model.php */