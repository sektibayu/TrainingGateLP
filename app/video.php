<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $primaryKey='video_id';
    public $timestamps=false;
    protected $fillable =[
    'alamat_video'
    ];

    public function section(){
    	return $this->hasMany('App\section','video_video_id','video_id');
    }
}
