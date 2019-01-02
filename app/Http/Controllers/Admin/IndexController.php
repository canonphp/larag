<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/12
 * Time: 10:28
 */

namespace App\Http\Controllers\Admin;


class IndexController extends BaseController
{
    public function index()
    {
        return view('admin.index.index');

    }

    public function welcome()
    {
        return view('admin.welcome.index');
    }


    public function icon()
    {
        return view('admin.index.icon');
    }

}