<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected  $table='demandes';

    protected $fillable = ['nomprenom','email','date_debut','nbjours','nbpersonnes','salle','tel','message','ressources','created_at','updated_at'];





}
