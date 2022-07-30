<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RessourceCoworking extends Model
{
    protected  $table="ressources";

    protected $fillable = ['name','price'];
}
