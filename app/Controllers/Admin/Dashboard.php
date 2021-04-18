<?php namespace App\Controllers\Admin;

class Dashboard extends BaseController
{
	public function index()
	{
//		exit();
		return(view('admin/views/dashboard/index'));
	}

	//--------------------------------------------------------------------
}
