<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;
use App\Http\Requests;
use App\section;
use App\course;
use App\video;
use App\materi;
use App\soal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SectionController extends Controller
{
    public function index(){
        $share = array();
    	$share['sections'] = Section::get();
        return view('pages.section.index', $share);
    }

    public function create(){
        if(Request::isMethod('get')){
            $share = array();
            $share['courses'] = Course::get();
            $share['videos'] = Video::get();
            $share['materis'] = Materi::get();
            $share['soals'] = Soal::get();
            return view('pages.section.create', $share);
        }else if(Request::isMethod('post')){
            $section = Section::create(Input::all());
            $section->save();
            return redirect('section');

        }
    }

    public function delete($id){
        $section = Section::find($id);
        $section->delete();
        return redirect('section');
    }

    public function update($id){
        if(Request::isMethod('get')){
            $share = array();
            $share['section'] = Section::find($id);
            $share['courses'] = Course::get();
            $share['videos'] = Video::get();
            $share['materis'] = Materi::get();
            $share['soals'] = Soal::get();
            return view('pages.section.update',$share);
        }else if(Request::isMethod('post')){
            $section=Section::find($id);
            $section->update(Input::all());
            $section->save();
            return redirect('section');
        }
    }
}
