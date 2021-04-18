<?php namespace App\Controllers\Admin;

class Auth extends BaseController
{

	function __construct(){
//		$this->auth = model/ion_auth();
	}
	
	public function login()
	{
		return(view('admin/views/dashboard/new'));
	}
	
	public function forgoten_password(){
		
	}

	//--------------------------------------------------------------------
}