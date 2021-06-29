<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'name'           => 'required',
            'category_id'    => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'description_am' => 'required',
            'price'          => 'regex:/^(\d+(,\d{1,2})?)?$/',
            'old_price'      => 'nullable|regex:/^(\d+(,\d{1,2})?)?$/',
            'images.*'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
