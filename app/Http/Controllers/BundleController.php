<?php

namespace App\Http\Controllers;

use Request;

use App\Soal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BundleController extends Controller
{
    public function index(){
        $share = array();
    	$share['soals'] = Soal::get();
        return view('pages.bundle_soal.index', $share);
    }
}
