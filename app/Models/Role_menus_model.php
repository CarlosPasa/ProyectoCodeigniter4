<?php
namespace App\Models;
use CodeIgniter\Model;

class Role_menus_model extends Model{

	public $db;
	public $db_conexion;

	public function __construct()
	{
		parent::__construct();
		$this->db_conexion = \Config\Database::connect();
		$this->db = $this->db_conexion->table('role_menus');
	}

	public function getMenus($role)
	{
		$this->db->select("menu.*");
		$this->db->join('menu', 'menu.name = role_menus.menu','left');
		$this->db->where('role_menus.role',$role);
		$this->db->orderBy("menu.order", "asc");
		
		$query = $this->db->get();
		return $query->getResultObject();
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
	function deleteRole($id)
	{
		$this->db->where('id', $id);
		$this->db->delete();
		return true;
	}

}

/* End of file Role_menus_model.php */
/* Location: ./application/models/Role_menus_model.php */