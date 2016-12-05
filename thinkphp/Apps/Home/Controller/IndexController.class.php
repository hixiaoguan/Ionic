<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // 实例化User模型
        $User = M('User');
        // 根据表单提交的POST数据创建数据对象
        $User->create();
    }
}