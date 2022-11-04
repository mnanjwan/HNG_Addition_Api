<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
// use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Addtion extends FormRequest
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
            'x' => 'required|integer',
            'y' => 'required|integer',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([

            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'x.required' => 'This field cannot be empty',
            'y.required' => 'This field cannot be empty',
            'x.integer' => 'This must be a number',
            'y.integer' => 'This must be a number',
        ];

    }


}
