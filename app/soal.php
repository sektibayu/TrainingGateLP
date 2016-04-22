<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $primaryKey='user_id';
    public $timestamps=false;
    protected $fillable =[
    'judul_soal',
    'deskripsi_soal'
    ];
    public function section(){
    	return $this->hasMany('App\section','soal_soal_id','soal_id');
    }
}
