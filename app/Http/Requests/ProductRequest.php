<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'bail|required|max:100',
            'price' => 'bail|required|numeric',
            'description' => 'bail|required',
            'photo' => 'bail|image|nullable|max:1000',
            // 'image' => 'bail|required|image|mimes:jpeg,png,jpg,gif|max:2048~'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.max' => 'Tên sản phẩm không quá 100 ký tự',

            'price.required' => 'Giá tiền không được để trống',
            'price.numeric' => 'Giá tiền phải là số',

            'description.required' => 'Mô tả sản phẩm không được để trống',

            'photo.image' => 'Ảnh phải đúng định dạng',
            // 'image.required' => ''
        ];
    }
}
