<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 15:13
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        return view('home.message.index');
    }

}