<?php
namespace App\Models;
use CodeIgniter\Model;

class Activity_model extends Model{

	public $db;
	public function __construct()
	{
		parent::__construct();
		$this->setTable('activity_logs');
		$db_conexion = \Config\Database::connect();
		$this->db = $db_conexion->table('activity_logs');
	}

	public function add($message, $user_id = 0, $ip_address = false)
	{
		return $this->doInsert([
			'title' => $message,
			'user' => ($user_id==0) ? logged('id')->id : $user_id,
			'ip_address' => !empty($ip_address) ? $ip_address : ip_address()
		]);
	}

	public function action_create($entidad)
	{
		return $this->add("Nuevo #$entidad creado por el usuario:".logged('name')->name,0,false);
	}

	public function action_edit($entidad, $id)
	{
		return $this->add("#$entidad #$id creada por el usuario:".logged('name')->name,0,false);
	}

	public function action_delete($entidad, $id)
	{
		return $this->add("#$entidad #$id creada por el usuario:".logged('name')->name,0,false);
	}
	public function getByWhere($whereArg, $args = [])
	{

		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		return $this->db->getWhere($whereArg)->getResult();
	}
	public function getById($id)
	{
		return $this->db->getWhere([ 'id' => $id ])->getRow();
	}
}

/* End of file Activity_model.php */
/* Location: ./application/models/Activity_model.php */