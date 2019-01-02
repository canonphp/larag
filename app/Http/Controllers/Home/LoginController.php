<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('user.auth')->except(['login','loginForm']);

    }*/


    public function login(LoginRequest $request)
    {
        dd($request->all());
    }


    public function loginForm()
    {


        return view('home.login.login');

    }


    public function register(RegisterRequest $request)
    {

        $name = $request->post('name');
        $email = $request->post('email');
        $password = bcrypt($request->post('password'));
        $user = User::create(compact('name','email','password'));
        if ($user){
            return redirect('/login');
        }


    }

    public function registerForm()
    {
        return view('home.login.register');


    }
}
