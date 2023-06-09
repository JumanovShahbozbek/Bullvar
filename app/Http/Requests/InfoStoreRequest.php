<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:40',
            'icon' => 'required|max:2048|mimes:png,jpg,',
            'description' => 'required|min:20|max:150',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Sarlavha bolishi shart !',
            'title.min'=> 'Sarlavha kamida 5 belgidan iborat bolishi kerak !',
            'title.max' => 'Sarlavha 40 belgidan oshmasligi kerak !',
            'icon.required' => 'Rasm joylanishi shart !',
            'description.required' => 'Malumot kiritilishi shart !',
        ];
    }
}
