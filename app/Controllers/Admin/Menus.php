<?php namespace App\Controllers\Admin;

class Menus extends BaseController
{
	public function index()
	{

		return(view('admin/views/menus/index'));
	}
	public function new()
	{
		return(view('admin/views/menus/new'));
	}

	//--------------------------------------------------------------------
}
