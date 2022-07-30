<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected  $table='formations';
    protected $fillable = ['titre','module','description','image','formateur','nbheurs','niveau','langue','prix','image','video','prerequis','isactive','created_by'];

}
