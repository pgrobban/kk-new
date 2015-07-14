<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class CourseController extends Controller {

   
    public function showLesson($courseName, $lessonNr = 1) {
        $courseName = str_replace("-", " ", $courseName);
        $lessonNr = str_replace("lektion-", "", $lessonNr);
        
        $lessonNames = $this->getLessonNamesForCourseByName($courseName);
        return view('course', [
            'courseName' => $courseName,
            'lessonNr' => $lessonNr,
            'lessonNames' => $lessonNames,
            'lessonName' => $lessonNames[$lessonNr - 1]
        ]);
    }

    public function getLessonNamesForCourseByName($name) {
        $courseID = DB::table('courses')->where('courseName', $name)->first()->courseID;
        $lessons = DB::table('lessons')->where('courseID', $courseID)->orderBy("lessonNr")->lists('lessonName');
        return $lessons;
    }

}
