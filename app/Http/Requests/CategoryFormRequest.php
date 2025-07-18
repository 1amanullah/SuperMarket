<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string'
            ],

            'status' => [
               'nullable',
               'in:Active,Inactive'
            ],

            'action' => [

                'nullable',
                'in:Active,Inactive,Delete'
            ],

            'image' => [
                'mimes:png,jpg,svg',
            ],

            'description' => [
               'nullable',
            ],
        ];
    }

}
