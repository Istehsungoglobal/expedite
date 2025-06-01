<?php

namespace App\Http\Requests\StateFee;

use Illuminate\Foundation\Http\FormRequest;

class StoreStateFeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->can('state-fees.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:state_fees,name'],
            'description' => ['nullable', 'string'],
            'amount' => ['required', 'numeric', 'min:0'],
            'renew_amount' => ['required', 'numeric', 'min:0'],
            'status' => ['sometimes', 'boolean'],
            'auto_renew' => ['sometimes', 'boolean'],
            'features' => ['nullable', 'array'],
            'features.*' => ['string'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The fee name is required.',
            'name.unique' => 'This fee name already exists.',
            'amount.required' => 'The fee amount is required.',
            'amount.numeric' => 'The fee amount must be a number.',
            'amount.min' => 'The fee amount must be at least 0.',
            'renew_amount.required' => 'The renewal amount is required.',
            'renew_amount.numeric' => 'The renewal amount must be a number.',
            'renew_amount.min' => 'The renewal amount must be at least 0.',
        ];
    }
}
