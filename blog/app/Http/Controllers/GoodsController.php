<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //
    public function index(){

        $goods=Goods::all();
//dd($goods);
        return view('goods/index',compact("goods"));
    }
}
