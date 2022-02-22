<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'department_name' => 'required|min:6'
        ];
    }

    public function messages(){
        return [
            'required' => ':attribute được bỏ trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
        ];
    }

    public function attributes(){
        return [
            'department_name' => 'Tên phòng ban',
        ];
    }
}
