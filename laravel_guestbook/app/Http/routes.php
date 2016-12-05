<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\GuestBook;
use Illuminate\Http\Request;

/**
 * 留言列表
 */
Route::get('/',['as'=>'index',function () {
    return view('list', [
        'lists' => GuestBook::orderBy('created_at', 'asc')->get()
    ]);
}]);

/**
 * 添加留言
 */
Route::get('add', function () {
    return view('add');
});

//RESTful 资源控制器
Route::resource('meg', 'MegController');
//提交与接收数据，如用GET提交可以用RESTful 的 resource 如果POST就得用下面的了
//Route::post('meg/create', 'MegController@create');

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/','ListController@index');
////留言列表
//Route::get('list','ListController@index');

//Route::post('add', 'AddController@index');
////管理员登陆
//Route::get('login',function(){
//    return '管理员登陆';
//});
////路由闭包
//Route::get('helloworld', function () {
//    return 'Hello World';
//});
////传参
//Route::get('hello/{str}',function($str){
//    return 'Hello '.$str;
//});
////可选参数可以为空NULL
//Route::get('user/{name?}', function ($name = null) {
//    return $name;
//});
////可选参数也可以指定默认值John
//Route::get('user/{name?}', function ($name = 'John') {
//    return $name;
//});
////命名路由
//Route::get('user/profile', ['as' => 'profile', function () {
//    $url = route('profile');
//    return $url;
//}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
