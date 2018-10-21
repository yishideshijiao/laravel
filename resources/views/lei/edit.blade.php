@extends("layouts.main")

@section("content")

<form action="" method="post">
    {{csrf_field()}}
    类名：<input type="text" name="name" value="{{$lei->name}}">

    <input type="submit" value="提交">
</form>
    @endsection