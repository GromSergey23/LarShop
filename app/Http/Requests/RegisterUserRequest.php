<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RegisterUserRequest extends FormRequest
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
//        dd($request->all());
        return [
            'reg_name' => 'required|string|max:255',
            'reg_login' => 'required|string|max:255|unique:users,login',
            'reg_email' => 'required|string|email|max:255|unique:users,email',
            'reg_password' => 'required|string|min:4|same:reg_confirm_password',
        ];
    }
}
