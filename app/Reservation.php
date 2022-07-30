<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected  $table="reservations";

    protected $fillable = ['client','email_client','tel_client','date_debut','date_fin' ,'nbjours','nbpersonnes','statut'];
}
