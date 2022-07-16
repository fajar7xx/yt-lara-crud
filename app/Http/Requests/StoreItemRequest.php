<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name'        => ['required', 'string', 'min:3'],
            'categories'  => ['required', 'string', 'min:3'],
            'weight'      => ['required', 'numeric', 'min:1'],
            'price'       => ['required', 'numeric', 'min:1'],
            'description' => ['required', 'string'],

        ];
    }
}
