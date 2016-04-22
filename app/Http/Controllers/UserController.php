<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facedes\Auth;

class UserController extends Controller
{
    public function login(Request $request){
    	if(Auth::attempt(['nrp' => $request['nrp'], 'password' => $request['password']])){
    		return redirect()->route('dashboard');
    	}
    	return redirect()->back();
    }
}
