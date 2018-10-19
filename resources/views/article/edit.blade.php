@extends("layouts.main")
@section("content")
<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="title" value="{{$article->title}}"><br>
    <input type="text" name="author" value="{{$article->author}}"><br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="内容">"{{$article->content}}"</textarea><br>
    <input type="submit" value="提交">
</form>
    @endsection