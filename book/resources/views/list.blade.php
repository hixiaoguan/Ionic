@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                留言本
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        @if (count($data) > 0)
                            @foreach ($data as $list)
                                <table class="table table-bordered table-hover">
                                    <tr class="active">
                                        <th width="8%">标题:</th><th>{{$list->title}}</th>
                                    </tr>
                                    <tr>
                                        <td>留言:</td><td>{{$list->body}}</td>
                                    </tr>
                                    @if($list->reply)
                                    <tr class="">
                                        <td>回复:</td><td>{{$list->reply}}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td colspan="2">
                                            <span class="pull-left">
                                                姓名：{{$list->author}} |
                                                时间：{{$list->created_at}}
                                            </span>
                                            @if(Auth::check())
                                            <span class="pull-right">
                                                操作：<a href="{{ url('/show/') }}/{{$list->id}}">查看</a> | <a href="{{ url('/edit/') }}/{{$list->id}}">编辑</a> | <a href="{{ url('/destroy/') }}/{{$list->id}}">删除</a>
                                            </span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            @endforeach
                            <div class="text-center">
                                {!! $data->links() !!}
                            </div>
                        @endif
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
