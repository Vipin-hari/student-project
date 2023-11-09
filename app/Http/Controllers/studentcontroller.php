<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class studentcontroller extends Controller  
{
    public function stulist(){
        $stu = DB::select("select * from student");
        return view('stulist',['stu'=>$stu]);
    }
    public function stuform(){
        return view('student');
    }
    public function stuinsert(Request $req){
        $name = $req->input('name');
        $dob = $req->input('dob');
        $age = $req->input('age');
        $address = $req->input('address');
        $course = $req->input('course');
        $email = $req->input('email');
        $mobile = $req->input('mobile');

        DB::insert("insert into student (name,dob,age,address,course,email,mobile)values(?,?,?,?,?,?,?)",[$name,$dob,$age,$address,$course,$email,$mobile]);
        return "inserted successfully";
    }
    public function stuedit($id){
        $student = DB::select("select * from student where id=?",[$id]);
        return view('stuedit',['student'=>$student]);
    }
    public function stupdate($id,Request $req){
        $name = $req->input('name');
        $dob = $req->input('dob');
        $age = $req->input('age');
        $address = $req->input('address');
        $course = $req->input('course');
        $email = $req->input('email');
        $mobile = $req->input('mobile');

        DB::update("update student set name=?,dob=?,age=?,address=?,course=?,email=?,mobile=? where id=?",[$name,$dob,$age,$address,$course,$email,$mobile,$id]);
        return 'Updated successfully';
    }
    public function remove($id){
        DB::delete("delete from student where id=?",[$id]);
        return 'Removed successfully';
    }
}
