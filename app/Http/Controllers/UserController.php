<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users=User::all();

        return view('user/index',compact('users'));

    }

    //添加
    public function reg(Request $request)
    {
        //判断是否post提交
        if($request->isMethod("post")){


            //验证
            $this->validate($request, [
                "name" => "required|unique:users",
                "password" => "required|min:3|confirmed",
                "img" => "required",
                "captcha" => "required|captcha"
            ], [
                "captcha.required" => '验证码不能为空',
                "captcha.captcha" => '验证码有误',
            ]);

            $data=$request->post();
            // 图片接收
            $file=$request->file('img');
//            dd($file->store("images","image"));
            $data['login']=$file->store("images","image");


//           var_dump($data);exit;
            User::create($data);
            return redirect()->route("user.index")->with('success','注册成功');

        }


        return view('user.reg');
    }

    public function edit(Request $request,$id)
    {
        $user=User::find($id);
//        dd($user);
        if($request->isMethod('post')){
            //验证
            $this->validate($request, [
                "name" => "required|unique:users",
                "password" => "required|min:3|confirmed",
                "img" => "required",
//                "captcha" => "required|captcha"
            ], [
//                "captcha.required" => '验证码不能为空',
//                "captcha.captcha" => '验证码有误',
            ]);


            $data=$request->post();

            // 图片接收
            $file=$request->file('img');
//            dd($file->store("images","image"));
            $data['login']=$file->store("images","image");

            if($user->update($data)){
                return redirect()->route('user.index');
            }else{
                return redirect()->back();
            }

        }
        return view('user/edit',compact("user"));
    }

    public function del($id)
    {
        $user=User::find($id);
        if($user->delete()){
            return redirect('user/index');
        }

    }


}
