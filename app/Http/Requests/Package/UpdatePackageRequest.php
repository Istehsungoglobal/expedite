<?php

namespace App\Http\Requests\Package;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return user()->can('update-package');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:packages,name,' . $this->route('package')->id,
            'slug' => 'required|string|max:255|unique:packages,slug,' . $this->route('package')->id,
            'description' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'renew_price' => 'required|numeric|min:0',
            'interval' => 'required|in:monthly,weekly,fortnightly,yearly',
            'interval_count' => 'required|integer|min:1',
            'status' => 'nullable|boolean',
            'auto_renew' => 'nullable|boolean',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'status' => $this->status ? 1 : 0,
            'auto_renew' => $this->auto_renew ? 1 : 0,
            'slug' => str_slug($this->name)
        ]);
    }
}
