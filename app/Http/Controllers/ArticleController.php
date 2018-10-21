<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
//        $articles=Article::paginate(3);
        $articles=Article::all();

        return view('article/index',compact('articles'));
    }

    public function add(Request $request){
        if($request->isMethod("post")){

//            //验证，没通过则去上一页
//            $this->validate($request,[
//                "title"=>"required|max:15|min:3",
//                "author"=>"required"
//            ]);

            $data=$request->post();
            if(Article::create($data)){
                session()->flash("success","添加成功");
                return redirect('article/index');
            }

        }else{
            return view('article/add');
        }
    }

    public function edit(Request $request,$id){
        $article=Article::find($id);
        if($request->isMethod("post")){
            $data=$request->post();
            if($article->update($data)){
                return redirect('article/index');
            }

        }else{
            return view('article/edit',compact('article'));
        }
    }

    public function del($id){
        $article=Article::find($id);
        if($article->delete()){
            return redirect('article/index');
        }
    }
}
