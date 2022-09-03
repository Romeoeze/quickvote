<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContestantRequest_PS extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'contest_id' => 'required',
        'contestant_name.*' => 'required',
        'bio.*' => 'required|min:40',
       'contestant_image.*' => 'required|image|mimes:jpeg,jpg,png|max:2000'
        ];
    }
}
