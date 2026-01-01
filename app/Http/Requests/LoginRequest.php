<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'bail|required|string|email',
            'password' => 'bail|required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'mandatory field.',
            'email.required' => 'mandatory field.',
            'password.required' => 'mandatory field.',
            'password.confirmed' => 'Passwords do not match.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
    }
}
