<?php

namespace App\Http\Controllers;

use Request;

use App\Soal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SoalController extends Controller
{
    public function index(){
        $share = array();
    	$share['soals'] = Soal::get();
        return view('pages.soal.index', $share);
    }

    public function create(){
        if(Request::isMethod('get')){
            return view('pages.soal.create');
        }else if(Request::isMethod('post')){
            $user = User::create(Input::all());
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            return redirect('user');

        }
    }

}
