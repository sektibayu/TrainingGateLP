<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function login(){
        // dd(Input::all());
    	if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])){
    		return redirect('courseuser');
    	}
    	return redirect()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function index(){
        $share = array();
    	$share['users'] = User::get();
        // return view('pages.user.index');
        return view('pages.user.index', $share);
    }

    public function create(){
        if(Request::isMethod('get')){
            $share = array();
            $share['roles'] = Role::get();
            // dd($share['roles']);
            return view('pages.user.create', $share);
        }else if(Request::isMethod('post')){
            $user = User::create(Input::all());
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            return redirect('user');

        }
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('user');
    }

    public function update($id){
        if(Request::isMethod('get')){
            $share = array();
            $share['user']=User::find($id);
            $share['roles'] = Role::get();
            return view('pages.user.update',$share);
        }else if(Request::isMethod('post')){
            $user=User::find($id);
            $user->update(Input::all());
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            return redirect('user');
        }
    }
}
