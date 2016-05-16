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
    public function video($id,$sid){
        $share = array();
        $share['id'] = $id;
        $share['section'] = Section::find($sid);
        return view('pages.course_user.video',$share);
    }
    public function materi($id,$sid){
        $share = array();
        $share['id'] = $id;
        $share['section'] = Section::find($sid);
        return view('pages.course_user.materi',$share);
    }
    public function soal($id,$sid){
        $share = array();
        $share['id'] = $id;
        $share['section'] = Section::find($sid);
        return view('pages.course_user.soal',$share);
    }
}
