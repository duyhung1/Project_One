<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'username' => 'bail|required|min:6',
            'password' => 'bail|nullable|min:8|max:32',
            'repassword' => 'bail|nullable|same:password',
        ];
    }
    public function messages() {
        return [
            'username.required' => 'Bạn chưa nhập Tên người dùng',
            'username.min' => ' Tên người dùng phải có ít nhất 6 ký tự',

            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password.max' => 'Mật khẩu không được vượt quá 32 ký tự',

            'repassword.same' => 'Mật khẩu nhập lại chưa đúng',
        ];
    }
}
