@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    留言本->添加留言
                </div>
                <div class="panel-body">
                    <form action="{{ url('/save') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="title">标题</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label for="author">昵称</label>
                            <input type="text" class="form-control" name="author" id="author" placeholder="author">
                        </div>
                        <div class="form-group">
                            <label for="body">留言</label>
                            <textarea type="text" class="form-control" name="body" id="body" placeholder="body"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">提交</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
