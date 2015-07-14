<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model {

    protected $table = "lessons";
    protected $primaryKey = "lessonID";
    public $timestamps = false;

}
