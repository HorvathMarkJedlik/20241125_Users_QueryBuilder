<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            'username' => 'required|string|min:4|max:255',
            'email' => 'required|email|string|unique:users,email',
            'password' => ['required','confirmed','string', Password::min(8)->mixedCase()->symbols()->numbers()],
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'A username mező kitöltése kötelező.',
            'email.required' => 'Az email mező kitöltése kötelező.',
            'username.min' => 'A username legalább 3 karakter hosszú legyen.',
        ];
    }
}
