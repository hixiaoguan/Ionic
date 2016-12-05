@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    留言本->查看留言
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        @if (count($data) > 0)
                                <table class="table table-bordered table-hover">
                                    <tr class="active">
                                        <th width="8%">标题:</th><th>{{$data->title}}</th>
                                    </tr>
                                    <tr>
                                        <td>留言:</td><td>{{$data->body}}</td>
                                    </tr>
                                    <tr>
                                        <td>回复:</td><td>{{$data->reply}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="pull-left">
                                                姓名：{{$data->author}} |
                                                时间：{{$data->created_at}}
                                            </span>
                                            <span class="pull-right">
                                                操作：<a href="{{ url('/') }}">返回</a> | <a href="{{ url('/edit/') }}/{{$data->id}}">编辑</a> | <a href="{{ url('/destroy/') }}/{{$data->id}}">删除</a>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
