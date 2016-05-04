<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;

class CourseUserController extends Controller
{
    public function index(){
    	$share = array();
    	$share['courses'] = Course::get();
        return view('pages.course_user.index', $share);
    }
}
