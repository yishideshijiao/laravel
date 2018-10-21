<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        $shops=Shop::all();
//        dd($shops);exit;
        return view('shop/index',compact("shops"));
    }

    public function add(Request $request)
    {
        if($request->isMethod('post')){
//            dd($_POST);
            //验证，如果没有通过，自动回到上页
            $this->validate($request,[
                "name"=>"required|max:15|min:3",
                "price"=>"required",
//                "datails"=>"required",
                "shelf"=>"required"
            ]);


            $data=$request->post();

            if(Shop::create($data)){
                session()->flash("success","添加成功");
                return redirect('shop/index');
            }
        }else{

            return view('shop/add');
        }

    }

    public function del($id)
    {
        $shop=Shop::find($id);
        if($shop->delete()){
            return redirect('shop/index');
        }
    }

    public function edit(Request $request,$id)
    {
        $shop=Shop::find($id);

        if($request->isMethod('post')){
            $data=$request->post();
            if($shop->update($data)){
                return redirect()->route("shop.index");
            }else{
                return redirect()->back();
            }
        }else{
           return view('shop/edit',compact("shop"));
        }
    }
}
