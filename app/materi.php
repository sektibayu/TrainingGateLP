<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $primaryKey='id_materi';
    public $timestamps=false;
    protected $fillable =[
    'nama_file'
    ];
}
