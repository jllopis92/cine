<?php

namespace Cine;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $table = "trailer"
    protected $fillable = ['video_id','url'];
}
