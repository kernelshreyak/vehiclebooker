<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;


/**
 * Main API controller for Vehicle Booker. All driver apps interact with the backend via these APIs
 * API code is refactored into various modules
 *  Author: Shreyak Chakraborty (C) 2020
 */
class Api extends Controller
{
	
	public function index()
	{
		echo "CRON index";
	}

	public function vehicles()
	{
		echo "CRON index";
	}

	public function getAddressCoordinates(Request $request)
	{
		$returndata = array();
		$address = $request->input('address');
		if($address == ""){
			$returndata['status'] = "error";
			$returndata['message'] = "invalid address";
		}
		else{
			$returndata['status'] = "success";
			
			$googlekey = env('GOOGLE_API_KEY'); // API key for google Geocoding API
			$geocoderesponse = Http::get("https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=$googlekey");

			$geocoderesponse = json_decode($geocoderesponse);

			$returndata['data'] = $geocoderesponse->results[0]->geometry->location;
			
		} 
			
		return response()->json($returndata);
		
	}
}