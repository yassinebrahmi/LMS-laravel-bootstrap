<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected  $table="catalogues";


    protected $fillable = ['nomtheme','description','isactive','created_by'];


    public function modules()
    {
        return $this->hasMany('App\Module','catalogue','id');
    }

}
