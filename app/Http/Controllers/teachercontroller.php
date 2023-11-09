<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class teachercontroller extends Controller
{
    public function teacherform(){
        return view('teacher');
    }
    public function teacherInsert(Request $req){
        $name = $req->input('name');
        $position = $req->input('position');
        $qualification = $req->input('qualification');
        $email = $req->input('email');
        $exp = $req->input('exp');
        $mobile = $req->input('mobile');
    
        DB::insert("INSERT INTO teacher (name, position, qualification, email, exp, mobile) VALUES (?, ?, ?, ?, ?, ?)", [$name, $position, $qualification, $email, $exp, $mobile]);
        return "Teacher information inserted successfully";
    }
    public function teacherlist(){
        $teachers = DB::select("select * from teacher");
        return view('teacherlist',['teachers'=>$teachers]);

    }
    public function teacheredit($id){
        $teacher = DB::select("select * from teacher where id=?",[$id]);
        return view('teacheredit',['teacher'=>$teacher]);
    }
    public function teacherUpdate($id, Request $req) {
        $name = $req->input('name');
        $position = $req->input('position');
        $qualification = $req->input('qualification');
        $email = $req->input('email');
        $exp = $req->input('exp');
        $mobile = $req->input('mobile');
    
        DB::update("UPDATE teacher SET name=?, position=?, qualification=?, email=?, exp=?, mobile=? WHERE id=?", [$name, $position, $qualification, $email, $exp, $mobile, $id]);
        
        return 'Teacher information updated successfully';
    }
    public function removeteacher($id){
        DB::delete("delete from teacher where id=?",[$id]);
        return 'Removed successfully';
    
}


}
