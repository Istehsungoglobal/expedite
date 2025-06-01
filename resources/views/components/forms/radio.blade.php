@props([
    'name',
    'id' => null,
    'label',
    'value',
    'checked' => false,
    'disabled' => false,
    'help' => null,
    'inline' => false,
])

@php
    $id = $id ?? "{$name}_{$value}";
    $hasError = $errors->has($name);
    $isChecked = old($name) == $value || $checked;
    $containerClass = 'form-check ' . ($inline ? 'form-check-inline ' : '');
    $inputClass = 'form-check-input ' . ($hasError ? 'is-invalid' : '');
@endphp

<div class="{{ $containerClass }} mb-3">
    <input
        type="radio"
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
