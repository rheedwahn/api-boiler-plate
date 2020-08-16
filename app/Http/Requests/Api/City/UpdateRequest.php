<?php

namespace App\Http\Requests\Api\City;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'name' => [
                'sometimes',
                'required',
                'max:50',
                Rule::unique('cities', 'name')->where('state_id', $this->state)->ignore($this->city, 'id')
            ]
        ];
    }
}
