<?php
namespace App\Core;
use CodeIgniter\Model;

class MYModel extends Model{

	public $table_key = 'id';
	public $db;
	public function __construct()
	{
		parent::__construct();
		$db_conexion = \Config\Database::connect();
		$this->db= $db_conexion->table($this->table);
	}

	public function get()
	{
		return $this->db->get($this->table)->getResult();
	}

	public function getActive()
	{
		return $this->db->getWhere(['estado' => '1'])->getResult();
	}

	public function getById($id)
	{
		return $this->db->getWhere([ $this->table_key => $id ])->getRow();
	}

	public function create($data)
	{
		return $this->db->insert($data);
	}

	function create_batch($data)
	{
		
		$this->db->insertBatch($this->table, $data);
		return  $data['id'];

	}

	function updateId($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
		return $id;
	}

	function deleteId($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
		return true;
	}

	function delete_logic($id)
	{
		$data =  array(
				'estado' => '0'
				);
		$this->db->where('id', $id);
		$this->db->update($data);
		return true;
	}

	public function getByWhere($whereArg, $args = [])
	{

		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		
		return $this->db->getWhere($whereArg)->getResult();
	}

	public function predictId()
	{
		$this->db->orderBy($this->table_key, 'desc');
		return ($query = $this->db->getWhere($this->table)) && $query->getNumRows() > 0 ? $query->getRow()->id + 1 : 1;
	}

	public function countAll()
	{
		return $this->db->countAll($this->table);
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */