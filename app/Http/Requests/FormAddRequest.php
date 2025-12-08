<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAddRequest extends FormRequest
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
            //
            "name"=>"required|min:3|max:25",
            "lastName"=>"required|min:5|max:30",
            "age"=>"required|integer|min:18|max:50",
            "gender"=>"required|in:m,f"
        ];
    }
    public function messages(){
        return [
            "name.required" => "Enter the name ?",
            "name.min" => "What is your name 😯"
        ];
    }
}
