<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $primaryKey='video_id';
    public $timestamps=false;
    protected $fillable =[
    'video'
    ];
}
