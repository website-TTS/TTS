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
            'Username'=>'required|min:10',
            'access'=>'required|min:10',
            'email'=>'required|email|min:8',
            'sdt'=>'required|min:10',
            'pass'=>'required|min:8',
            'enterpass'=>'required|min:8'
        ];
    }

     public function messages()
    {
        return [
            'Username.required'=>'Họ và tên không được bỏ trống !',
            'Username.min'=>'Họ và tên không được nhỏ hơn 10 ký tự !',

            'access.required'=>'Địa chỉ không được bỏ trống !',
            'access.min'=>'Địa chỉ không được nhỏ hơn 10 ký tự !',

            'email.required'=>'Email không được bỏ trống !',
            'email.email'=>'Email không đúng !',
            'email.min'=>'Email không được nhỏ hơn 8 ký tự !',

            'sdt.required'=>'Số điện thoại không được bỏ trống !',
            'sdt.min'=>'Số điện thoại không được nhỏ hơn 10 ký tự !',

            'pass.required'=>'PassWord không được để trống !',
            'pass.min'=>'PassWord không được nhỏ hơn 8 ký tự !',

            'enterpass.required'=>'PassWord không được để trống !',
            'enterpass.min'=>'PassWord không được nhỏ hơn 8 ký tự !'
        ];
    }
}
