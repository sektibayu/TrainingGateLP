<?php

namespace App\Http\Controllers;

use Request;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
{
    public function index(){
        $share = array();
    	$share['courses'] = Course::get();
        return view('pages.course.index', $share);
    }

    public function create(){
        if(Request::isMethod('get')){
            return view('pages.course.create');
        }else if(Request::isMethod('post')){
            $course = course::create(Input::all());
            $course->save();
            return redirect('course');

        }
    }

    public function delete($id){
        $course = Course::find($id);
        $course->delete();
        return redirect('course');
    }

    public function update($id){
        if(Request::isMethod('get')){
        	$share = array();
            $share['course']=Course::find($id);
            return view('pages.course.update',$share);
        }else if(Request::isMethod('post')){
            $course=Course::find($id);
            $course->update(Input::all());
            $course->save();
            return redirect('course');
        }
    }

}

