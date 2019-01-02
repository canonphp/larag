<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/12
 * Time: 10:28
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {


    }

}