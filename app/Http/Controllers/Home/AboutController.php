<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 15:15
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('home.about.index');
    }

}