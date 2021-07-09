<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialSitesCreateRequest extends FormRequest
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
            'facebook'   => 'required',
            'twitter'    => 'required',
            'googleplus' => 'required',
            'rss'        => 'required',
            'pintrest'   => 'required',
            'linkedin'   => 'required',
            'youtube'    => 'required',
        ];
    }
}
