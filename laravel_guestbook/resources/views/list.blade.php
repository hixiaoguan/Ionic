<!DOCTYPE html>
<html>
    <head>
        <title>Laravel留言本</title>
        <link href="http://cdn.bootcss.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
         <script src="http://cdn.bootcss.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
        <style>
            body{
                padding-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand hidden-sm" href="http://guestbook.loc/list" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'navbar-首页'])">留言本</a>
                        </div>
                        <div class="navbar-collapse collapse" role="navigation">
                            <ul class="nav navbar-nav">
                                <li><a href="http://guestbook.loc/add">我要留言</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right hidden-sm">
                                <li><a href="http://guestbook.loc/login">管理员登陆</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @if (count($lists) > 0)
                    @foreach ($lists as $list)
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td width="5%">标题:</td><td>{{$list->title}}</td>
                            </tr>
                            <tr>
                                <td>留言:</td><td>{{$list->content}}</td>
                            </tr>
                            <tr>
                                <td>回复:</td><td>{{$list->reply}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="pull-left">
                                        姓名：{{$list->writer}} |
                                        时间：{{$list->created_at}}
                                    </span>
                                    <span class="pull-right">
                                        操作：<a href="#">编辑</a> | <a href="">删除</a>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    @endforeach
                @endif
            </div>
        </div>
    </body>
</html>
