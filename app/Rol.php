<?php

namespace Cine;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "roles"
    protected $fillable = ['name'];
}
