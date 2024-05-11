<?php
namespace App\Models;
use CodeIgniter\Model;
use App\Models\Activity_model;

class Users_model extends Model{

	public $db;
	public $session;
	public $activity_model;
	public $email;
	public $table;
	public function __construct()
	{
		helper('cookie');
		parent::__construct();
		$this->db = \Config\Database::connect();
		$this->session = \Config\Services::session();
		$db_conexion = \Config\Database::connect();
		$this->db = $db_conexion->table('users');
		$this->activity_model = new Activity_model();
		$this->email = \Config\Services::email();
		$this->table='users';
	}

	public function login($data)
	{
		$data['password'] = md5($data['password']);
		$this->db->groupStart();
			$this->db->where('username', $data['username']);
			$this->db->orWhere('email', $data['username']);
		$this->db->groupEnd();

		$this->db->where('password', $data['password']);

		$query = $this->db->getWhere()->getRow();

		if(!empty($query)){
			return $query;
		}

		return false;

	}

	public function login_attempt($row, $remember = false)
	{

		if($remember===false){
			$array = [
				'login' => true,
				'logged' => [
					'id' => $row->id,
					'name' => $row->name,
					'email' => $row->email,
					'mode' => $row->mode,
					'role' => $row->role,
					'phone' => $row->phone
				]
			];
			$this->session->set( $array );
		}else{

			$data = [
				'id' => $row->id,
				'name' => $row->name,
				'email' => $row->email,
				'mode' => $row->mode,
				'role' => $row->role,
				'phone' => $row->phone
			];
			set_cookie( 'login', true, ($expiry = strtotime('+30 days')) );
			set_cookie( 'logged', json_encode($data), $expiry );

		}
		$this->db->where('id', $row->id)->set([
			'last_login' => date('Y-m-d H:m:i')
		])->update();
		

		$this->activity_model->add($row->name.' Logged in', $row->id);

	}

	public function logout()
	{
		// Deleting Sessions
		$this->session->remove('login');
		$this->session->remove('logged');
		// Deleting Cookie
		delete_cookie('login');
		delete_cookie('logged');
	}
	

	public function resetPassword($data)
	{

		$this->db->where('username', $data['username']);
		$this->db->orWhere('email', $data['username']);

		$user = $this->db->getWhere($this->table)->getRow();

		if(!empty($user)){ }else{
			return 'invalid';
		}

		$password = $reset_token	=	password_hash((time().$user->id), PASSWORD_BCRYPT);

		$this->db->where('id', $user->id);
		$this->db->update($this->table, compact('reset_token', 'password'));

		$this->email->setFrom(setting('company_email'), setting('company_name') );
		$this->email->setTo($user->email);

		$this->email->setSubject('Reset Your Account Password | ' . setting('company_name') );

		$reset_link = url('login/new_password?token='.$reset_token);

		$data = getEmailShortCodes();
		$data['user_id'] = $user->id;
		$data['user_name'] = $user->name;
		$data['user_email'] = $user->email;
		$data['user_username'] = $user->username;
		$data['reset_link'] = $reset_link;

		$html = $this->parser->parse('templates/email/reset', $data, true);

		$this->email->setMessage( $html );

		$this->email->send();

		return true;

	}
	public function getById($id)
	{
		return $this->db->getWhere([ 'id' => $id ])->getRow();
	}
	public function getByWhere($whereArg, $args = [])
	{

		if(isset($args['order']))
			$this->db->orderBy($args['order'][0], $args['order'][1]);
		
		return $this->db->getWhere($this->table, $whereArg)->getResult();
	}
	public function getAllUsers()
	{
		$query = $this->db->get();
		return $query->getResult();
	}
	public function updateUser($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update($data);
	}
	public function create($data)
	{
		return $this->db->insert($data);
	}

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */