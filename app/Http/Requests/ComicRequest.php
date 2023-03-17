<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'series' => 'required|max:255',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
            'price' => 'required|numeric|min:1',
            'sale_date' => 'required|date',
            'description' => 'nullable|max:4096'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio!',
            'series.required' => 'Il nome è obbligatorio!',
        ];
    }


}
