<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('login','registers','logout');

    }


    public function login(LoginRequest $request)
    {
        $user = \request(['email','password']);
        $log  = new Logger('login');
        $log->pushHandler(new StreamHandler(storage_path().'/logs/login.log'),Logger::INFO);
        $log->addInfo('用户登录',$user);
        if (\Auth::attempt($user,true)){
            return redirect('/');
        }
        return \Redirect::back()->withErrors("用户名密码错误");
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
            $avatarArr = config('imgUrl.avatar');
            $avatar = $avatarArr[mt_rand(1,8)];
            $user = User::create(compact('name','email','password','avatar'));
            $to = $email;
            $subject = 'laraBlog注册';
            Mail::send(
                'home.login.email',
                ['name' => $name],
                function ($message) use($to, $subject) {
                    $message->to($to)->subject($subject);
                }
            );
            if ($user){
                $log  = new Logger('register');
                $log->pushHandler(new StreamHandler(storage_path().'/logs/register.log'),Logger::INFO);
                $log->addInfo('用户注册',$user->toArray());
                return redirect('/login');

            }

    }

    public function registerForm()
    {
        return view('home.login.register');


    }


    public function logout()
    {
        \Auth::logout();

        return redirect('/');

    }



}
