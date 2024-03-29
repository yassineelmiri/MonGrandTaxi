<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassagerRequest extends FormRequest
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
            'name' => 'required',
            'telephone' => 'required',
            'historique' => 'required',
            'date' => 'required|date|after:now',
            'email' => 'required|email',
            'password' => 'required|min:9|max:10|confirmed',
            'bio' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg'

        ];
    }
}
