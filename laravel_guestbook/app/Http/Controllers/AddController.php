<?php

namespace App\Http\Controllers;

use App\GuestBook;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    /**
     * 添加留言
     */

    public function index(Request $request){

        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        return $request->title;
//        $guestbook = new GuestBook;
//        $guestbook->title = $request->title;
//        $guestbook->body = $request->body;
//        $guestbook->writer = $request->writer;
//        if ($guestbook->save()) {
//            return Redirect::to('/');
//        } else {
//            return Redirect::back()->withInput()->withErrors('保存失败！');
//        }

    }

}
