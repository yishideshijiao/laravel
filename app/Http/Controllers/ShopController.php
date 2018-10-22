<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        $shops = Shop::paginate(3);
//        dd($shops);exit;
        return view('shop/index', compact("shops"));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            //验证
            $this->validate($request, [
                "name" => "required|unique:users",
//                "password" => "required|min:3|confirmed",
                "img" => "required",
                "captcha" => "required|captcha"
            ], [
                "captcha.required" => '验证码不能为空',
                "captcha.captcha" => '验证码有误',
            ]);

            $data = $request->post();
            // 图片接收
            $file = $request->file('img');
//            dd($file->store("images","image"));
            $data['img'] = $file->store("images", "image");


//            dd($data);

            if (Shop::create($data)) {
                session()->flash("success", "添加成功");
                return redirect('shop/index');
            }
        } else {

            return view('shop/add');
        }

    }

    public function del($id)
    {
        $shop = Shop::find($id);
        if ($shop->delete()) {
            return redirect('shop/index');
        }
    }

    public function edit(Request $request, $id)
    {
        $shop = Shop::find($id);

        if ($request->isMethod('post')) {
            //验证
            $this->validate($request, [
                "name" => "required|unique:users",
                "img" => "required",
            ]);

            $data = $request->post();
            // 图片接收
            $file = $request->file('img');
//            dd($file->store("images","image"));
            $data['img'] = $file->store("images", "image");

            if ($shop->update($data)) {
                return redirect()->route("shop.index");
            } else {
                return redirect()->back();
            }
        } else {
            return view('shop/edit', compact("shop"));
        }
    }
}
