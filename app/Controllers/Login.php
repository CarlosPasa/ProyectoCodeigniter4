<?php
namespace App\Controllers;
use App\Models\Users_model;
class Login extends MYController {

	public $data;
	public $users_model;
	public $validation;
	public $session;
	protected $helpers = ['form'];
	public function __construct()
	{
		
		$db = \Config\Database::connect();
		helper('basic');
		date_default_timezone_set( setting('timezone') );
		if( !empty($db->username) && !empty($db->hostname) && !empty($db->database)){ }else{
			die('Database is not configured');
		}
		if(is_logged()){
			return redirect()->route('/');
		}
		$this->validation =  \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->users_model = new Users_model();

		$this->data = [
			'validation' => $this->validation,
			'assets' => assets_url(),
			'body_classes'	=> 'login-page-side login-background'
		];

	}

	public function index()
	{
		return view('account/login',$this->data);
	}


	public function check()
	{
		$rules = [
			'username' => 'required|max_length[30]',
			'password' => 'required|max_length[255]|min_length[4]',
			// 'passconf' => 'required|max_length[255]|matches[password]',
			// 'email'    => 'required|max_length[254]|valid_email',
		];
		$data = $this->request->getPost(array_keys($rules));
		// $this->validation->setRule('username', 'Username', 'required|max_length[30]|min_length[3]');
		// $this->validation->setRule('password', 'Password', ['required', 'max_length[255]', 'min_length[8]', 'alpha_numeric_punct']);
        // $this->validation->set_rules('username', 'Email', 'required');
        // $this->validation->set_rules('password', 'Password', 'required');

        if (! $this->validateData($data, $rules))
        {
            $this->index();
            return;
        }

        $username = post('username');
        $password = post('password');
		
        if( $username && $password && $attempt = $this->users_model->login( compact('username', 'password') )){

        	$this->users_model->login_attempt( $attempt, post('remember_me') );
			loadPermissions();
			loadMenus();
        }else{

            $this->data['message'] = 'Invalid Email/Password';
            $this->data['message_type'] = 'danger';

			return view('account/login', $this->data);
        }
        return redirect()->route('home');
	}

	public function forget()
	{
		return view('account/forget', $this->data);
	}

	public function reset_password()
	{
		
		postAllowed();

		$this->validation->setRule('username', 'Username', 'required|max_length[30]|min_length[3]');

		if($this->validation->run() == FALSE){
			$this->forget();
			return;
		}

		$reset = $this->users_model->resetPassword( [ 'username' => post('username') ] );

		$this->data['message']	=	'Email Sent to your registered email address ! Please check your email';
		$this->data['message_type']	=	'info';

		if($reset==='invalid'){
			$this->data['message']	=	'Invalid Email/Username';
			$this->data['message_type']	=	'danger';
		}

		$this->forget();

	}

	public function new_password()
	{
		$reset_token = !empty(get('token')) ? get('token') : false;

		$user = $this->users_model->getByWhere(['reset_token' => $reset_token]);

		if(!$reset_token || !$user || empty($user)){
			echo 'Invalid Request';
			redirect('login/forget', 'refresh'); return;
		}

		$user = $user[0];

		$this->data['user']	=	$user;

		return view('account/reset_password', $this->data);

	}

	public function set_new_password()
	{

		postAllowed();

		$this->validation->setRule('resettoken', 'Token', 'required');
		$this->validation->setRule('password', 'Password', 'required');
		$this->validation->setRule('password_confirm', 'Password Confirm', 'required|matches[password]');

		if($this->validation->run() == FALSE){
			$this->data['user']	=	$this->users_model->getByWhere(['reset_token' => post('resettoken')])[0];
			return view('account/reset_password', $this->data);
			return;
		}

		$reset_token = post('resettoken');

		$user	=	$this->users_model->getByWhere(compact('reset_token'))[0];

		$this->users_model->update($user->id, [
			'password'	=>	md5(post('password')),
			'reset_token'	=>	'',
		]);

		$this->session->setFlashdata('message', 'New Password has been Updated, You can login now');
		$this->session->setFlashdata('message_type', 'success');
		redirect('login', 'refresh');

	}

public function new_pass()
	{
		$reset_token = !empty(get('token')) ? get('token') : false;

		$user = $this->users_model->getByWhere(['reset_token' => $reset_token]);

		if(!$reset_token || !$user || empty($user)){
			echo 'Invalid Request';
			redirect('login/forget', 'refresh'); return;
		}

		$user = $user[0];

		$this->data['user']	=	$user;

		return view('account/reset_pass', $this->data);

	}

	public function set_new_pass()
	{

		postAllowed();

		$this->validation->setRule('resettoken', 'Token', 'required');
		$this->validation->setRule('password', 'Password', 'required');
		$this->validation->setRule('password_confirm', 'Password Confirm', 'required|matches[password]');

		if($this->validation->run() == FALSE){
			$this->data['user']	=	$this->users_model->getByWhere(['reset_token' => post('resettoken')])[0];
			return view('account/reset_pass', $this->data);
			return;
		}

		$reset_token = post('resettoken');

		$user	=	$this->users_model->getByWhere(compact('reset_token'))[0];

		$this->users_model->update($user->id, [
			'password'	=>	md5(post('password')),
			'reset_token'	=>	'',
		]);

		$this->session->setFlashdata('message', 'Se ha actualizado la nueva contrase�a, puede iniciar sesi�n ahora');
		$this->session->setFlashdata('message_type', 'success');
		redirect('login', 'refresh');

	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Admin/Login.php */