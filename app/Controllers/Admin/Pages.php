<?php namespace App\Controllers\Admin;

class pages extends BaseController
{
	public function index()
	{

		return(view('admin/views/pages/index'));
	}
	public function new()
	{
		return(view('admin/views/pages/new'));
	}

	//--------------------------------------------------------------------
}
