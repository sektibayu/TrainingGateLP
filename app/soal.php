<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $primaryKey='user_id';
    public $timestamps=false;
    protected $fillable =[
    'judul_soal',
    'deskripsi_soal'
    ];
    public function Section(){
    	return $this->hasMany('App\Section','soal_soal_id','soal_id');
    }
}
