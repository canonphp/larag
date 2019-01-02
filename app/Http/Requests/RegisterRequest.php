<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => 'required|string|max:8',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages()
    {
       return [
           'name.required'                  => '用户名不能为空',
           'email.required'                 => '邮箱不能为空',
           'email.email'                    => '邮箱格式不正确',
           'email.unique'                   => '邮箱已注册',
           'password.required'              => '密码不能为空',
           'password_confirmation.required' => '重复密码不能为空',
           'password.confirmed'             => '两次密码不一致'

       ];
    }
}
