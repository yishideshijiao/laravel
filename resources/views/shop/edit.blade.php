@extends("layouts.main")

@section("content")

<form action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    商品名称:<input type="text" name="name" value="{{$shop->name}}"><br>

    商品分类ID:<select name="lei_id" id="" >
        <option value="1">食物</option>
        <option value="2">用品</option>
    </select><br>

    商品图片：<input type="file" name="img"  >
    <td><img src="/{{$shop->img}}" alt="" height="80" ><br>

    价格:<input type="number" name="price" value="{{$shop->price}}"><br>

    商品详情:<br>
    <textarea name="details" id="" cols="30" rows="10" placeholder="">{{$shop->details}}</textarea><br>


    是否上架：<input type="radio" name="shelf" value="1"
    checked="checked"
     >是
    <input type="radio" name="shelf" value="0">否<br>


    <input type="submit" value="提交">
</form>
    @endsection