<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('home');
});

Route::get('hem', function () {
    return view('home');
});

Route::get('kurs/{kursNr}/{lektionsNr?}', function($kursNr, $lektionsNr = 1) {
    $courseName = DB::table('courses')->where('courseNr', $kursNr)->first()->courseName;
    $courseName = str_replace(" ", "-", $courseName);
    
    $lektionsNr = "lektion-".$lektionsNr;
    
    return redirect("kurs/{$courseName}/{$lektionsNr}");
})->where(['kursNr' => '[0-9]+', 'lektionsNr' => '[0-9]+']);


Route::get('kurs/{kursNamn}/{lektionsNr?}', 'CourseController@showLesson');

