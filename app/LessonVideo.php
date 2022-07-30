<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonVideo extends Model
{
    protected  $table='lesson_videos';
    protected $fillable = ['titre','duree','created_by'];

}
