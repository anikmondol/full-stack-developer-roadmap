<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:8',
            'age' => 'required|numeric|min:18',
            'city' => 'required',
        ];
    }

    // public function messages()
    // {

    //     return [
    //         'name.required' => 'User Name is required!',
    //         'email.required' => 'User Email is required!',
    //         'email.email' => 'Please enter a valid email address.',
    //         'password.required' => 'Password is required!',
    //         'password.min' => 'Password must be at least 8 characters long.',
    //         'age.required' => 'Age is required!',
    //         'age.numeric' => 'Age must be a number.',
    //         'age.min' => 'You must be at least 21 years old.',
    //         'city.required' => 'city selection is required.',
    //     ];
    // }


    public function attributes()
    {
        return [
            'name' => 'User Name',
            'email' => 'User Email',
            'password' => 'User Password',
            'age' => 'User Age',
            'city' => 'User City',
        ];
    }

    protected function prepareForValidation(): void
    {

        $this->merge([
            // 'name' => strtoupper($this->name)
            'name' => Str::slug($this->name)
        ]);

    }

    protected $stopOnFirstFailure = true;


}
