<?php 

namespace App\Libraries;

/**
* Class Adminhtmlbuilder
*
* @package App\Libraries
*/
class Adminhtmlbuilder
{
/**
* Class properties go here.
* -------------------------------------------------------------------
* public, private, protected, static and const.
*/
	public function generate_admin_sidebar(array $par = []){
		
		return( view('admin/partials/sidebar.php'));
	}

}   

// End of Name Library Class.

/**
* -----------------------------------------------------------------------
* Filename: Adminhtmlbuilder.php
* Location: ./app/Libraries/Adminhtmlbuilder.php
* -----------------------------------------------------------------------
*/
