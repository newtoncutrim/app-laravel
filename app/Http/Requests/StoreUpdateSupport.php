<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;

class StoreUpdateSupport extends FormRequest
{
    protected $redirect = '/support/create';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'subject' => [
            'required',
            'unique:supports',
            'min:3',
            'max:255',
        ],
            'body' => [
                'required',
                'max:10000',
                'min:3'
            ]

        ];
    }

    
}
