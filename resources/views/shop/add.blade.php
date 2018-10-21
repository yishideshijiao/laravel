@extends("layouts.main")
@section("content")
<form action="" method="post">
    {{csrf_field()}}

    商品名称:<input type="text" name="name" value="{{old("name")}}"><br>

    商品分类ID:<select name="lei_id" id="" >

        <option value="1">食物</option>
        <option value="2">用品</option>

    </select><br>

    价格:<input type="number" name="price" value="{{old("price")}}"><br>

    商品详情:<br>
    <textarea name="details" id="" cols="30" rows="10" >{{old("details")}}</textarea><br>


    是否上架：<input type="radio" name="shelf" value="1" {{old("price")==1?'checked':''}}>是
    <input type="radio" name="shelf" value="0" {{old("price")==0?'checked':''}}>否<br>


    <input type="submit" value="提交">
</form>
    @endsection