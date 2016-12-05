<!DOCTYPE html>
<html>
    <head>
        <title>添加留言--Laravel留言本</title>
        <link href="http://cdn.bootcss.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
         <script src="http://cdn.bootcss.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
        <style>
            body{
                padding-top: 50px;
            }
            .addbox{
                width: 50%;
                margin: 0 auto;
            }
            .addbox textarea{
                height: 80px;
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
                            <a class="navbar-brand hidden-sm" href="/" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'navbar-首页'])">留言本</a>
                        </div>
                        <div class="navbar-collapse collapse" role="navigation">
                            <ul class="nav navbar-nav">
                                <li><a href="/add">我要留言</a></li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right hidden-sm">
                                <li><a href="/login">管理员登陆</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <form action="meg/create" method="GET" class="addbox form-horizontal">
                    
                    
                    <div class="form-group">
                        <label for="title">标题</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="writer">昵称</label>
                        <input type="text" class="form-control" name="writer" id="writer" placeholder="writer">
                    </div>
                    <div class="form-group">
                        <label for="content">留言</label>
                        <textarea type="text" class="form-control" name="content" id="content" placeholder="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">提交</button>
                </form>
            </div>
        </div>
    </body>
</html>
