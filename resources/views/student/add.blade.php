@extends("layouts.main")
@section("content")
<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="名字">
    <input type="text" name="age" placeholder="年龄">
    <input type="submit" value="提交">
</form>
    @endsection