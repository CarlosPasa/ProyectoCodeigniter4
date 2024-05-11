<?php
namespace App\Controllers;
use App\Models\Menu_model;
use App\Models\Roles_model;
use App\Models\Activity_model;
use CodeIgniter\Files\File;

class Users extends MYController {

	public $menu_model;
	public $roles_model;
	public $activity_model;
	public $page_data;
	public $request;
	public $session;
	protected $helpers = ['form'];

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Users Management';
		$this->page_data['page']->menu = 'users';
		//Helpers
		helper('basic');
		//Models
		$this->menu_model = new Menu_model();
		$this->roles_model = new Roles_model();
		$this->activity_model = new Activity_model();
		//Libraries
		$this->request = \Config\Services::request();
		$this->session = \Config\Services::session();
		//Variables Menu
		$_SESSION["menu_active"] = 'Users';
		$this->menu_padre($_SESSION["menu_active"]);
	}

	public function index()
	{
		ifPermissions('users_list');
		$this->page_data['tablaTitulo'] = "Lista de Usuarios";
		$this->page_data['users'] = $this->users_model->getAllUsers();
        return view('users/list',$this->page_data);
	}

	public function add()
	{
		ifPermissions('users_add');
		$this->page_data['return_url'] = "users";
		$this->page_data['accion'] = "Crear Usuario";
		$this->page_data['roles'] = $this->roles_model->getAllRoles();
		return view('users/add',$this->page_data);
	}

	public function save()
	{
		ifPermissions('users_add');
		postAllowed();

		$id = $this->users_model->create([
			'role' => $this->request->getPost('role'),
			'name' => $this->request->getPost('name'),
			'username' => $this->request->getPost('username'),
			'email' => $this->request->getPost('email'),
			'phone' => $this->request->getPost('phone'),
			'address' => $this->request->getPost('address'),
			'password' => md5(post('password'))
		]);
		$img = $this->request->getFile('image');		
        if (! $img->hasMoved()) {
            $path = FCPATH . 'uploads/users/' . $id.'.png';
			if (file_exists($path)) {
				unlink($path);
			}
			$img->move('uploads/users/', $id.'.png');
        }else{
		
			copy(FCPATH.'uploads/users/default.png', 'uploads/users/'.$id.'.png');

		}
		$this->activity_model->add('New User $'.$id.' Created by User:'.logged('name')->name, logged('id')->id);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'New User Created Successfully');
        return redirect()->route('users');
	}

	public function view($id)
	{

		ifPermissions('users_view');
		$this->page_data['return_url'] = "users";
		$this->page_data['User'] = $this->users_model->getById($id);
		$this->page_data['User']->role = $this->roles_model->getByWhere([
			'id'=> $this->page_data['User']->role
		])[0];
		$this->page_data['User']->activity = $this->activity_model->getByWhere([
			'user'=> $id
		], [ 'order' => ['id', 'desc'] ]);
        return view('users/view',$this->page_data);
	}

	public function edit($id)
	{

		ifPermissions('users_edit');
		$this->page_data['return_url'] = "users";
		$this->page_data['accion'] = "Editar Usuario";
		$this->page_data['User'] = $this->users_model->getById($id);
		$this->page_data['roles'] = $this->roles_model->getAllRoles();
        return view('users/edit',$this->page_data);
	}


	public function update($id)
	{

		ifPermissions('users_edit');
		
		postAllowed();		
		$data = [
			'role' => $this->request->getPost('role'),
			'name' => $this->request->getPost('name'),
			'username' => $this->request->getPost('username'),
			'email' => $this->request->getPost('email'),
			'phone' => $this->request->getPost('phone'),
			'address' => $this->request->getPost('address'),
		];

		$password = post('password');

		if(!empty($password))
			$data['password'] = md5($password);

		$id = $this->users_model->updateUser($id, $data);

		$img = $this->request->getFile('image');		
        if (! $img->hasMoved()) {
            $path = FCPATH . 'uploads/users/' . $id.'.png';
			if (file_exists($path)) {
				unlink($path);
			}
			$img->move('uploads/users/', $id.'.png');
        }
		// if (!empty($_FILES['image']['name'])) {

		// 	$this->uploadlib->initialize([
		// 		'file_name' => $id.'.png'
		// 	]);

		// 	$this->uploadlib->uploadImage('image', '/users');

		// }

		$this->activity_model->add("User #$id Updated by User:".logged('name')->name);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'Client Profile has been Updated Successfully');
        return redirect()->route('users');
	}

	public function check()
	{
		$email = !empty(get('email')) ? get('email') : false;
		$username = !empty(get('username')) ? get('username') : false;
		$notId = !empty($this->request->getPost('notId')) ? $this->request->getPost('notId') : 0;

		if($email)
			$exists = count($this->users_model->getByWhere([
					'email' => $email,
					'id !=' => $notId,
				])) > 0 ? true : false;

		if($username)
			$exists = count($this->users_model->getByWhere([
					'username' => $username,
					'id !=' => $notId,
				])) > 0 ? true : false;

		echo $exists ? 'false' : 'true';
	}

	public function delete($id)
	{

		ifPermissions('users_delete');

		if($id!==1){ }else{
			redirect('/','refresh');
			return;
		}

		$id = $this->users_model->delete($id);

		$this->activity_model->add("User #$id Deleted by User:".logged('name')->name);

		$this->session->setFlashdata('alert-type', 'success');
		$this->session->setFlashdata('alert', 'User has been Deleted Successfully');
		
		return redirect()->route('users');

	}
	public function updateMode()
	{
		$mode = 'light';
		if(logged('mode') === 'light'){
			$mode = 'dark';
		}
		$data = [
			'mode' => $mode,
		];
		$id = $this->users_model->update(logged('id'), $data);
		$this->activity_model->add("User #$id change mode of interface:".logged('name'));
		redirect('/','refresh');
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */