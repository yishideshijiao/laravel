@extends("layouts.main")
@section("content")
<form  action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    商品名称:<input type="text" name="name" value="{{old("name")}}"><br>

    商品分类ID:<select name="lei_id" id="" >

        <option value="1">食物</option>
        <option value="2">用品</option>

    </select><br>


           头像： <input type="file" name="img"  ><br>



            验证码：<input id="captcha"  name="captcha" >
            <img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码"><br>



    价格:<input type="number" name="price" value="{{old("price")}}"><br>

    商品详情:<br>
    <textarea name="details" id="" cols="30" rows="10" >{{old("details")}}</textarea><br>


    是否上架：<input type="radio" name="shelf" value="1" {{old("price")==1?'checked':''}}>是
    <input type="radio" name="shelf" value="0" {{old("price")==0?'checked':''}}>否<br>


    <input type="submit" value="提交">
</form>
    @endsection