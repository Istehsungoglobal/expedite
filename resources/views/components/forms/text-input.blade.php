@props([
    'name',
    'type' => 'text',
    'id' => null,
    'label',
    'value' => null,
    'placeholder' => null,
    'required' => false,
    'autofocus' => false,
    'disabled' => false,
    'readonly' => false,
    'autocomplete' => 'off',
    'help' => null,
])

@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? $label;
    $hasError = $errors->has($name);
    $classes = 'form-control ' . ($hasError ? 'is-invalid' : '');
@endphp

<div class="form-floating mb-3">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $autofocus ? 'autofocus' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $readonly ? 'readonly' : '' }}
        autocomplete="{{ $autocomplete }}"
        class="{{ $classes }}"
        {{ $attributes }}
        @if ($type === 'number')
        step="any"
        inputmode="decimal"
        @endif
    >
    <label for="{{ $id }}">{{ $label }}</label>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    @if ($help)
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
