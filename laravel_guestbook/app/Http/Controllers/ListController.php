<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ListController extends Controller{
    /**
     * 显示留言列表
     */
    public function index()
    {
        $lists = DB::table('message')->get();
        return view('list', ['lists' => $lists]);
    }
}
