<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected  $table='stats';

    protected $fillable = ['Visit_IP','Visit_Referer','Visit_date','Visit_page'];


    public static function AddVisiteur()
    {
        $CurrentPage = $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'].$_SERVER['REQUEST_URI'];
        $Refferrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

        if($Refferrer !== $CurrentPage)
        {
            $AddView = new Dashboard();
            $AddView->Visit_IP=$_SERVER['REMOTE_ADDR'];
            $AddView->Visit_Referer=$Refferrer;
            $AddView->Visit_date=now();
            $AddView->Visit_page=$CurrentPage;
            $AddView->save();

        }
    }
}
