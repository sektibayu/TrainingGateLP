<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class VideoController extends Controller
{
    public function upload(Request $request){
		$video = Video::create();
		$video->nama_video = $request->input('name');
		$exFile = $request->file('upload_file')->getClientOriginalExtension();
		$video->alamat_video = $request->input('name').'.'.$exFile;
        $request->file('upload_file')->move(public_path('file_video'),$request->input('name').'.'.$exFile);
        $video->save();
        // dd(public_path('file_video/') . $uniqueFileName);
        return redirect()->back();
	}
	public function delete($id){
		$video = Video::find($id);
		unlink(public_path('file_video/'.$video->alamat_video)); //delete file
		$video->delete();
		return redirect()->back();
	}
    public function index(){
        $share = array();
    	$share['videos'] = Video::get();
        return view('pages.video.index', $share);
    }
}
