@props([
    'name',
    'id' => null,
    'label',
    'value' => '1',
    'checked' => false,
    'disabled' => false,
    'help' => null,
    'inline' => false,
    'switch' => false,
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    $isChecked = old($name, $checked);
    $containerClass = 'form-check ' . ($inline ? 'form-check-inline ' : '') . ($switch ? 'form-switch ' : '');
    $inputClass = 'form-check-input ' . ($hasError ? 'is-invalid' : '');
@endphp

<div class="{{ $containerClass }} mb-3">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ $value }}"
        class="{{ $inputClass }}"
        {{ $isChecked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes }}
    >
    <label class="form-check-label" for="{{ $id }}">
        {{ $label }}
    </label>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    @if ($help)
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
