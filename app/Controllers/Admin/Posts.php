<?php namespace App\Controllers\Admin;

class Posts extends BaseController
{
	public function index()
	{

		return(view('admin/views/posts/index'));
	}
	public function new()
	{
		return(view('admin/views/posts/new'));
	}

	public function categories($category_id = NULL)
	{
		//check also if the category exists in our db
		if($category_id!==NULL){
			
		return(view('admin/views/posts/edit_category'));
			
		}
		return(view('admin/views/posts/categories'));
	}
	

	//--------------------------------------------------------------------
}
