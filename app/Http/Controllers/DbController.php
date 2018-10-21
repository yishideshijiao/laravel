<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index(){
//        获得所有数据
//        $articles=DB::select("select * from articles where id>?",[6]);
//        $articles=DB::table('articles')->get();
        //获取一条数据
        $articles=DB::table('articles')->where('title','民生')->first();
//echo $articles->content;
        //直接返回数值i
//        $shu=DB::table('articles')->where('title','民生')->value('author');
//        echo $shu;
        //取出一列集合
//        $ji=DB::table('students')->pluck('name','age');
//        foreach ($ji as $age=>$name){
//            echo $name;
//        }

//        连表查询
//        $he=DB::table('articles')
//            ->join('students','student_id',"=",'students.id')
//            ->select('articles.id','students.name','articles.title')
//            ->get();
        //添加数据
//        $id=DB::table('students')->insertGetId([
//            'name'=>'小花',
//            'age'=>'20'
//        ]);
        //修改
        DB::table('students')->where('id',6)->update([
            'name'=>'大图',
            'age'=>'10'
        ]);

//dd($id);


//        return view('db/index',compact("articles"));

    }

    public function del($id){

    }
}
