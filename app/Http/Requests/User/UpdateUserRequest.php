<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->can('edit-user') || auth()->user()->hasRole('super-admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'string',
                'email:dns',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],
            'c_code_phone' => ['nullable', 'string', 'max:5'],
            'full_phone' => ['nullable', 'string', 'max:25'],
            'phone' => [
                'required',
                'string',
                'max:20',
                Rule::unique('users', 'phone')->ignore($this->user->id),
            ],
            'secondary_phone' => ['nullable', 'string', 'max:20'],
            'password' => ['nullable', Password::defaults(), 'confirmed'],
            'role' => ['required', 'exists:roles,id'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
            'country_id' => ['required', 'exists:countries,id'],
            'zip' => ['nullable', 'string', 'max:20'],
            'status' => ['nullable', 'boolean'],
            'avatar' => ['nullable', 'file', 'image', 'max:1024', 'mimes:jpg,jpeg,png'],
            'cover_photo' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'secondary_phone' => $this->full_secondary_phone,
        ]);
    }
}
