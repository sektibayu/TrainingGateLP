<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Section;
use App\Http\Requests;
use DB;
class CourseUserController extends Controller
{
    public function index(){
    	$share = array();
    	$share['courses'] = Course::get();
        return view('pages.course_user.index', $share);
    }

    public function detail($id){
    	$share = array();
    	$share['course'] = Course::find($id);
    	$share['sections'] = DB::table('sections')->select('section_id')->where('course_course_id','=',$id)->get();
    	return view('pages.course_user.detail',$share);
    }
}
