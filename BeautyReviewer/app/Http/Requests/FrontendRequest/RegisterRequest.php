<?php

namespace App\Http\Requests\FrontendRequest;

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
            'name'=>'required|max:20',
            'email'=>'required|max:25',
            'password'=>'required|max:20',
            //'country'=>'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ];  
    }
    public function messages()
    {
        return [
          'required'=>':attribute Không được để trống',
          'max'=>':attribute Không được quá ký tự',
          'avatar' => ':attribute : Hinh ảnh upload lên phải là hình ảnh',
          'mimes' => ':attribute : Hinh ảnh upload lên phải định dạng như sau:jpeg,png,jpg,gif',
          'avatar.max' => ':attribute : Hinh ảnh upload lên vượt quá kích thước cho phép :max'
          ];  
    }
}
