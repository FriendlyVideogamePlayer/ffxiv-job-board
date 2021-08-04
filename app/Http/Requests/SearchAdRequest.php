<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchAdRequest extends FormRequest
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
            'title' => 'max:50',
            'description' => 'max:320',
            'discord_contact' => 'max:50',
            'ad_type' => 'in:static_rec,fc_rec,all',
            'ad_tags' => 'in:healer,tank,dps,static,fc',
        ];
    }
}
