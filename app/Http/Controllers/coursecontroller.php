<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class coursecontroller extends Controller
{
    public function courseform(){
        return view("course");
    }
    public function courselist(){
        $courses = DB::select("select * from course");
        return view("courselist",['courses'=>$courses]);
    }
    public function addcourse(Request $req) {
        $cname = $req->input('cname');
        $language = $req->input('language');
        $fees = $req->input('fees');
        $duration = $req->input('duration');
        $description = $req->input('description');
    
        DB::insert("INSERT INTO course (cname, language, fees, duration, description) VALUES (?, ?, ?, ?, ?)", [$cname, $language, $fees, $duration, $description]);
        
        return "Course information inserted successfully";
    }
    public function course_edit($id){
        $course = DB::select("SELECT * FROM course WHERE id=?", [$id]);
        return view('courseEdit', ['course' => $course]);
    }
    
    public function course_update($id, Request $req) {
        $cname = $req->input('cname');
        $language = $req->input('language');
        $fees = $req->input('fees');
        $duration = $req->input('duration');
        $description = $req->input('description');
    
        DB::update("UPDATE course SET cname=?, language=?, fees=?, duration=?, description=? WHERE id=?", [$cname, $language, $fees, $duration, $description, $id]);
    
        return 'Course information updated successfully';
    }
    
    public function remove_course($id){
        DB::delete("DELETE FROM course WHERE id=?", [$id]);
        return 'Course removed successfully';
    }
    
}
