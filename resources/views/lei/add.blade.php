@extends("layouts.main")
@section("content")
<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="类名">

    <input type="submit" value="提交">
</form>
    @endsection