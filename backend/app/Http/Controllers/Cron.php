<?php 

namespace App\Http\Controllers;


/**
 * Main API controller for Vehicle Booker. All driver apps interact with the backend via these APIs
   API code is refactored into various modules

   Author: Shreyak Chakraborty (C) 2020
 */
class Api extends Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
	}

	public function index()
	{
		echo "CRON index";
	}
}