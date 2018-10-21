@extends("layouts.main")

@section("content")

    {{--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">--}}

        {{--{{ csrf_field() }}--}}

        {{--<div class="form-group">--}}
            {{--<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control"  placeholder="用户名" name="name" value="{{$user->name}}">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="inputPassword3" class="col-sm-2 control-label" >密码</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" name="password" class="form-control" placeholder="密码" value="{{$user->password}}">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<label for="inputPassword3" class="col-sm-2 control-label" >确认密码</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" name="password_confirmation" class="form-control" placeholder="确认密码" value="{{$user->password}}">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label  class="col-sm-2 control-label">验证码</label>--}}
        {{--<div class="col-sm-10">--}}
        {{--<input id="captcha" class="form-control" name="captcha" >--}}
        {{--<img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<div class="col-sm-offset-2 col-sm-10">--}}
                {{--<button type="submit" class="btn btn-default">修改</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}

    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="用户名" name="name" value="{{$user->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label" >密码</label>
            <div class="col-sm-10">
                <input type="text" name="password" class="form-control" placeholder="密码" value="{{$user->password}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label" >确认密码</label>
            <div class="col-sm-10">
                <input type="text" name="password_confirmation" class="form-control" placeholder="确认密码" value="{{$user->password}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label" >头像</label>
            <div class="col-sm-10">
                <input type="file" name="img" class="col-sm-3 control-label" >
                <td><img src="/{{$user->login}}" alt="" height="80" ></td>
            </div>
        </div>

        {{--<div class="form-group">--}}
            {{--<label  class="col-sm-2 control-label">验证码</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input id="captcha" class="form-control" name="captcha" >--}}
                {{--<img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">修改</button>
            </div>
        </div>
    </form>
    @endsection