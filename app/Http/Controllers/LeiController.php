<?php

namespace App\Http\Controllers;

use App\Models\Lei;
use Illuminate\Http\Request;

class LeiController extends Controller
{
    //所有数据
    public function index(){



        $leis=Lei::all();


        return view('lei/index',compact('leis'));
    }

    //添加
    public function add(Request $request)
    {
        if($request->isMethod('post')){
            if(Lei::create($request->post())){
                return redirect('lei/index');
            }

        }else{
            return view('lei/add');
        }
    }

    //编辑
    public function edit(Request $request,$id)
    {
        $lei=Lei::find($id);
        if($request->isMethod('post')){
            $data=$request->post();
            //修改
            if($lei->update($data)){
                return redirect()->route("lei.index");
            }else{
                return redirect()->back();
            }
        }
        return view('lei/edit',compact('lei'));

    }

    //删除
    public function del($id)
    {
        $lei=Lei::find($id);
        if($lei->delete()){
            return redirect('lei/index');
        }
    }
}
