<?php
use App\Meg;
use Illuminate\Http\Request;
Route::get('/', function () {
    $lists = Meg::orderBy('created_at', 'desc')->paginate(15);
    return view('list', ['data' => $lists]);
});
Route::get('/create', function(){
    return view('create');
});
Route::post('/save',function(Request $request){
    //1.获取数据
    $meg = new Meg();
    $meg->title = $request->title;
    $meg->author = $request->author;
    $meg->body = $request->body;
    //2.插入数据
    $meg -> save();
    //3.重定向
    return redirect('/');
});
/*
|--------------------------------------------------------------------------
| 管理员留言列表
|--------------------------------------------------------------------------
|比访客多了一些操作，是在controller里定义了个auth='true'实现的，目前访客留言列表和管理员
|的用的是同一个模板list.blade.php
*/
Route::group(['middleware' => ['web']], function () {
    Route::get('/index', 'MegController@index');
	Route::get('/show/{id}', 'MegController@show');
	Route::post('/store', 'MegController@store');
	Route::get('/edit/{id}', 'MegController@edit');
	Route::post('/update/{id}', 'MegController@update');
	Route::get('/destroy/{id}', 'MegController@destroy');
    Route::auth();
});
