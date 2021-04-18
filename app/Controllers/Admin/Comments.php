<?php namespace App\Controllers\Admin;

class Comments extends BaseController
{
	public function index()
	{

		return(view('admin/views/comments/index'));
	}

	//--------------------------------------------------------------------
}
