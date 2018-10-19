@extends("layouts.main")

@section("content")

<form action="" method="post">
    {{csrf_field()}}
    名字：<input type="text" name="name" value="{{$student->name}}">
    年龄：<input type="text" name="age" value="{{$student->age}}">
    <input type="submit" value="提交">
</form>
    @endsection