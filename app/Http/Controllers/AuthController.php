<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;

class AuthController extends Controller
{

	public function getLogin(Request $request) {
		return 'Dit is een test';
	}
    
	public function postLogin(Request $request) {
		$uname = $request->input('email');
		$pass = $request->input('password');
      
		$retval = Auth::attempt(['email' => $uname, 'password' => $pass]);
      
		if($retval) {
			return response()->json(['success' => TRUE]);
		} else {
			return response()->json(['success' => FALSE]);
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
