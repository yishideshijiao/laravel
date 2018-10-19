<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //首页
    public function index(){

        $students=Student::all();
        return view('student/index',compact("students"));

    }
    //添加
    public function add(Request $request){
        if($request->isMethod("post")){
//            dd($_POST);
            if(Student::create($request->post())){
                return redirect('student/index');
            }
        }else{
            return view('student/add');
        }
    }

    //编辑
    public function edit(Request $request,$id){
        //取到是哪条
        $student=Student::find($id);
//        dd($student);
       //判断post
        if($request->isMethod("post")){
            $data=$request->post();
//            dd($data);
            if($student->update($data)){
                return redirect()->route("student.index");
            }else{
                return redirect()->back();
            }
        }

        //回显
        return view('/student/edit',compact("student"));
    }

    //删除
    public function del($id){
        //找到这数据
        $student=Student::find($id);
//        dd($student);
        //自杀
        if($student->delete()){
            return redirect('/student/index');
        }
    }
}
