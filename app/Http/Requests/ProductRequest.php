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
            'photo' => 'bail|required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'name.max' => 'Name không quá 100 ký tự',
            'price.required' => 'Price không được để trống',
            'price.numeric' => 'Price phải là số',
            'description.required' => 'Description không được để trống',
            'photo.required' => 'Photo không được để trống',
        ];
    }
}
