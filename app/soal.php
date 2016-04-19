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
}
