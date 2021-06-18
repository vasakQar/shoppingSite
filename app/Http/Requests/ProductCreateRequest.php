<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'description_en' => 'required',
            'description_ru' => 'required',
            'description_am' => 'required',
            'price'          => 'required',
            'price'          => 'required',
            'old_price'      => 'required',
            'images'         => 'required',
        ];
    }
}
