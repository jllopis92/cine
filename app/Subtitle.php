<?php

namespace Cine;

use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    protected $table = "subtitle"
    protected $fillable = ['video_id','trailer_id','language','url'];
}
