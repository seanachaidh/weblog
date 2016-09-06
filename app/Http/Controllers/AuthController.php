<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use Log;
use Illuminate\Support\Facades\Input;

//TODO: Betere documentatie maken.

class AuthController extends Controller
{

	public function getLogin(Request $request) {
		Log::info('het verkrijgen van een user');
		if(Auth::check()) {
			$user = Auth::user();
			return response()->json($user); //Klopt dit?
		} else {
			return response()->json(['success' => 'false']);
		}
	}
	
	public function getLogout(Request $request) {
		Auth::logout();
		return response()->json(['success' => 'true']);
	}
    
	public function postLogin(Request $request) {
		Log::info('Het inloggen van een gebruiker');
		
		Log::info('var dump');
		//var_dump($request);
		
		$uname = $request->input('email');
		$pass = $request->input('password');
		
		Log::info('email: ' . $uname);
		Log::info('pass: ' . $pass); 
		
		$retval = Auth::attempt(['email' => $uname, 'password' => $pass]);
      
		if($retval) {
			return response()->json(['success' => 'true']);
		} else {
			return response()->json(['success' => 'false']);
		}
	}
    
	public function postCreate(Request $request) {
		//De code voor het maken van een gebruiker
	}
    
	//TODO Ik moet eens kijken of deze functie wel ergens voor nodig is.
	public function getFailed(Request $request) {
		return view('failedlogin');
	}
}
