<?php 

namespace App\Http\Controllers;

// Controller for unit testing components

class Test extends Controller
{

	function drivertest()
	{
		$currentlocation = array(28.6828082,77.3121354);
		return view('drivertest',["location" => $currentlocation]);
	}

}