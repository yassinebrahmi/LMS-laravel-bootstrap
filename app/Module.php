<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected  $table="modules";


    protected $fillable = ['catalogue_id','name','image','description','isactive','created_by'];


    public function catalogue()
    {
        return $this->belongsTo('App\Catalogue','catalogue_id','id');
    }
}
