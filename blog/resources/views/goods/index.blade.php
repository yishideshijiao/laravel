@extends("layouts.main")

@section("title","商品列表")

@section("content")



    <table class="table">

        <tr>
            <th>id</th>
            <th>name</th>
            <th>价格</th>
            <th>分类</th>
            <th>上架</th>
            <th>浏览次数</th>
            <th>操作</th>
        </tr>
        @foreach($goods as $good)
            <tr>
                <td>{{$good->id}}</td>
                <td>{{$good->name}}</td>
                <td>{{$good->price}}</td>
{{--                <td>{{$good->cate->name}}</td>--}}
                <td>

                    @if($good->is_on_sale)
                        <i class="glyphicon glyphicon-ok" style="color: green"></i>
                    @else
                        <i class="glyphicon glyphicon-remove" style="color: red"></i>
                    @endif
                </td>
                <td>{{$good->nums}}</td>
                <td>
                    {{--<a href="{{route('goods.detail',$good->id)}}" class="btn btn-primary">查看</a>--}}
                    {{--<a href="{{route('goods.edit',$good->id)}}" class="btn btn-success">编辑</a>--}}
                    {{--<a href="{{route('goods.del',$good->id)}}" class="btn btn-danger">删除</a>--}}


                </td>
            </tr>
        @endforeach


    </table>


@endsection
