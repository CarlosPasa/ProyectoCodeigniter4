<?php

use App\Models\Settings_model;
use App\Models\Role_menus_model;
use App\Models\Role_permissions_model;
use App\Models\Users_model;
use Config\Paths;

$session = \Config\Services::session();


$request= \Config\Services::request();

$settings_model = new Settings_model();

/**
  * Function to get site url
  * uses site_url() function
  *
  * @param string $url any slug
  *
  * @return string site_url
  * 
  */
if (!function_exists('url')) {

	function url($url='')
	{
		return site_url($url);
	}

}

/**
  * Function to get url of assets folder
  *
  * @param string $url any slug 
  *
  * @return string url
  * 
  */
if (!function_exists('assets_url')) {

	function assets_url($url='')
	{
		return base_url('assets/'.$url);
	}

}

/**
  * Function to get url of upload folder
  *
  * @param string $url any slug 
  *
  * @return string url
  * 
  */
if (!function_exists('urlUpload')) {

	function urlUpload($url='')
	{
		return base_url('uploads/'.$url);
	}

}

/**
  * Function for user profile url
  *
  * @param string $id - user id of the user
  *
  * @return string profile url
  * 
  */
if (!function_exists('userProfile')) {

	function userProfile($id)
	{	
		$url = urlUpload('users/'.$id.'.png?'.time());		
		return $url;
	}

}




/**
  * Function to check and get 'post' request
  *
  * @param string $key - key to check in 'post' request
  *
  * @return string value - uses codeigniter Input library 
  * 
  */
if (!function_exists('post')) {

	function post($key)
	{
		$request= \Config\Services::request();
		return !empty($request->getPost($key)) ? $request->getPost($key) : false;
	}

}

/**
  * Function to check and get 'get' request
  *
  * @param string $key - key to check in 'get' request
  *
  * @return string value - uses codeigniter Input library 
  * 
  */
if (!function_exists('get')) {

	function get($key)
	{
		$request= \Config\Services::request();
		return !empty($request->getPost($key)) ? $request->getPost($key) : false;
	}


}

/**
  * Die/Stops the request if its not a 'post' requetst type
  *
  * @return boolean
  * 
  */
if (!function_exists('postAllowed')) {

	function postAllowed()
	{
		$request= \Config\Services::request();
		if(count($request->getPost()) <= 0)
			die('Invalid Request');

		return true;

	}


}


/**
  * Function to dump the passed data
  * Die & Dumps the whole data passed
  *
  * uses - var_dump & die together
  *
  * @param all $key - All Accepted - string,int,boolean,etc
  *
  * @return boolean
  * 
  */
if (!function_exists('dd')) {

	function dd($key)
	{
		die(var_dump($key));
		return true;
	}


}


/**
  * Function to check if the user is loggedIn
  *
  * @return boolean
  * 
  */
if (!function_exists('is_logged')) {

	function is_logged()
	{
		$session = \Config\Services::session();
		helper('cookie');
		$isLogged = !empty($session->get('login')) ? $session->get('login') : false;

		if(!$isLogged)
			$isLogged = get_cookie('login') ? true: false;

		return $isLogged;
	}


}


/**
  * Function that returns the data of loggedIn user
  *
  * @param string $key Any key/Column name that exists in users table
  *
  * @return boolean
  * 
  */
if (!function_exists('logged')) {

	function logged($key = false)
	{
		$session = \Config\Services::session();
		$users_model = new Users_model();
		$logged = !empty($session->get('login')) ? $users_model->getById($session->get('logged')['id']) : false;
		helper('cookie');
		if(!$logged)
			$logged = $users_model->getById(get_cookie('loginId'));
		return (!$key || $key!==null)?$logged:$logged->{$key};

	}


}

/**
  * Returns Path of view
  *
  * @param string $path - path/file info
  *
  * @return boolean
  * 
  */
if (!function_exists('viewPath')) {

	function viewPath($path)
	{
		$paths= new Paths();
		return $paths->viewDirectory.'/'.$path.'.php';
	}


}

/**
  * Returns Path of view
  *
  * @param string $date any format
  *
  * @return string date format Y-m-d that most mysql db supports
  * 
  */
if (!function_exists('DateFomatDb')) {

	function DateFomatDb($date)
	{
		return date( 'Y-m-d', strtotime($date));
	}


}

/**
  * Currency formating
  *
  * @param int/float/string $amount
  *
  * @return string $amount formated amount with currency symbol
  * 
  */
if (!function_exists('currency')) {

	function currency($amount)
	{
		return '$ '. $amount;
	}


}

/**
  * Find & returns the vlaue if exists in db
  *
  * @param string $key key which is used to check in db - Refrence: settings table - key column
  *
  * @return string/boolean $value if exists value else false
  * 
  */
if (!function_exists('setting')) {

	function setting($key = '')
	{
		$settings_model = new Settings_model();
		return !empty($value = $settings_model->getValueByKey($key)) ? $value : false;
	}


}


/**
  * Generates teh html for breadcrumb - Supports AdminLte
  *
  * @param array $args Array of values
  * 
  */
if (!function_exists('breadcrumb')) {

	function breadcrumb($args)
	{
		$html = '<ol class="breadcrumb">';
		$i = 0;
		foreach ($args as $key => $value) {
			if(count($args) < $i)
				$html .= '<li><a href="'.url($key).'">'.$value.'</a></li>';
			else
				$html .= '<li class="active">'.$value.'</li>';
			$i++;
		}
		    
		    
		$html .= '</ol>';
		echo $html;
	}


}


/**
  * Finds and return the ipaddres of client user
  *
  * @param array $ipaddress IpAddress
  * 
  */
if (!function_exists('ip_address')) {

	function ip_address() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

}

/**
  * Provides the shortcodes which are available in any email template
  *
  * @return array $data Array of shortcodes
  * 
  */
if (!function_exists('getEmailShortCodes')) {

	function getEmailShortCodes() {

		$data = [
			'site_url' => site_url(),
			'company_name' => setting('company_name'),
		];

		return $data;
	}

}




/**
  * Redirects with error if user doesnt have the permission to passed key/module
  *
  * @param string $code Code permissions
  * 
  * @return boolean true/false
  * 
  */
if (!function_exists('ifPermissions')) {

	function ifPermissions($code = '') {
		
		if ( hasPermissions($code) ) {
			return true;
		}
		$session = \Config\Services::session();
		$session->setFlashdata('alert-type', 'danger');
		$session->setFlashdata('alert', 'No tienes permisos para esta acción');
		redirect('/', 'refresh');
		return false;
	}

}

/**
  * Check and return boolean if user have the permission to passed key or not
  *
  * @param string $code Code permissions
  * 
  * @return boolean true/false
  * 
  */
if (!function_exists('hasPermissions')) {

	function hasPermissions($code = '') {
		$session = \Config\Services::session();
		$permission = $session->get('permission');		
		foreach($permission as $row){
			if($row->permission == $code){
				return true;
			}			
		}
		return false;
	}

}

if (!function_exists('loadPermissions')) {
	function loadPermissions() {
		$role_permissions_model = new Role_permissions_model();
		$permission = $role_permissions_model->getByWhere([ 'role' =>  logged('role')->role ]);
		$session = \Config\Services::session();
		$session->set('permission', $permission);
	}
}

if (!function_exists('loadMenus')){
	function loadMenus(){
		$role_menus_model = new Role_menus_model();
		$menus = $role_menus_model->getMenus([ 'id' =>  logged('role')->id ]);
		$session = \Config\Services::session();
		$session->set('menus', $menus);
	}
}

/**
  * Redirects with error if user doesnt have the permission to passed key/module
  *
  * @param string $code Code permissions
  * 
  * @return boolean true/false
  * 
  */
if (!function_exists('notAllowedDemo')) {

	function notAllowedDemo($url = '') {
		$session = \Config\Services::session();
		$session->setFlashdata('alert-type', 'danger');
		$session->setFlashdata('alert', 'This action is disabled in <strong>Demo</strong> !');
		redirect($url);
		return false;
	}

}
