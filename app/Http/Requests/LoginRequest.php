<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email|min:8',
            'password'=>'required|min:4'
        ];
    }

     public function messages()
    {
        return [
            'email.required'=>'Tài khoản không được bỏ trống !',
            'email.email'=>'Tài khoản phải là email !',
            'email.min'=>'Tài khoản không được nhỏ hơn 8 ký tự !',
            'password.required'=>'PassWord không được để trống !',
            'password.min'=>'PassWord không được nhỏ hơn 8 ký tự !',
        ];
    }
}
