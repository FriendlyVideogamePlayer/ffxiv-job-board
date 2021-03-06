<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required|max:320',
            'discord_contact' => 'required|max:50',
            'current_classes' => 'max:70',
            'ad_type' => 'required|in:static,fc',
            'ad_tags' => 'in:healer,tank,dps,static,fc,casual,midcore,hardcore'
        ];
    }
}
