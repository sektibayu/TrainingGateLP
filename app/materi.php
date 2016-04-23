<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $primaryKey='materi_id';
    public $timestamps=false;
    protected $fillable =[
    'alamat_materi'
    ];
    public function section(){
    	return $this->hasMany('App\Section','materi_materi_id','materi_id');
    }
}
