<?php

namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request;

use App\Materi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class MateriController extends Controller
{
	public function upload(Request $request){
		$materi = Materi::create();
		$materi->nama_materi = $request->input('name');
		$exFile = $request->file('upload_file')->getClientOriginalExtension();
		$materi->alamat_materi = $request->input('name').'.'.$exFile;
        $request->file('upload_file')->move(public_path('file_materi'),$request->input('name').'.'.$exFile);
        $materi->save();
        // dd(public_path('file_materi/') . $uniqueFileName);
        return redirect()->back();
	}
	public function delete($id){
		$materi = Materi::find($id);
		unlink(public_path('file_materi/'.$materi->alamat_materi)); //delete file
		$materi->delete();
		return redirect()->back();
	}
    public function index(){
        $share = array();
    	$share['materis'] = Materi::get();
        return view('pages.materi.index', $share);
    }
}
