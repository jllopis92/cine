<?php

namespace Cine;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies"
    protected $fillable = ['usuario_id','asignatura_id','name','language','	creation_date','description','imageRef','url','state','production_year','direction','direction_assistant','casting','continuista','script','production','production_assistant','photografic_direction','camara','camara_assistant','art_direction','sonorous_register','mounting','image_postproduction','sound_postproduction','catering','music','actors'];
}
