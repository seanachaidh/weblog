<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;

class AuthController extends Controller
{
    /*
     * Hier moet ik nog een view weergeven
     */
    public function getLogin(Request $request) {
      return 'Dit is een test';
    }
    
    public function postLogin(Request $request) {
      $uname = $request->input('email');
      $pass = $request->input('password');
      
      $retval = Auth::attempt(['email' => $uname, 'password' => $pass]);
      
      if($retval) {
	return redirect('/');
      } else {
	return redirect('auth/failed');
      }
    }
    
    public function getFailed(Request $request) {
      return view('failedlogin');
    }
}
