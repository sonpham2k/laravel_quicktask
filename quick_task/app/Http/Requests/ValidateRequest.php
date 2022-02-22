<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'staffname' => 'required|min:6',
            'address' => 'required|string',
            'department' => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => ':attribute không được bỏ trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'string' => ':attribute phải là dạng chữ'
        ];
    }

    public function attributes(){
        return [
            'staffname' => 'Tên nhân viên',
            'address' => 'Địa chỉ',
            'department' => 'Phòng ban'
        ];
    }
}
