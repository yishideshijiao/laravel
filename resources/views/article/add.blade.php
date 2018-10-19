@extends("layouts.main")
@section("content")
<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="标题"><br>
    <input type="text" name="author" placeholder="作者"><br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="内容"></textarea><br>
    <input type="submit" value="提交">
</form>
    @endsection