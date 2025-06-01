@props([
    'name',
    'id' => null,
    'label',
    'value' => null,
    'placeholder' => null,
    'required' => false,
    'autofocus' => false,
    'disabled' => false,
    'readonly' => false,
    'rows' => 3,
    'help' => null,
])

@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? $label;
    $hasError = $errors->has($name);
    $classes = 'form-control ' . ($hasError ? 'is-invalid' : '');
@endphp

<div class="form-floating mb-3">
    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        rows="{{ $rows }}"
        {{ $required ? 'required' : '' }}
        {{ $autofocus ? 'autofocus' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $readonly ? 'readonly' : '' }}
        class="{{ $classes }}"
        style="min-height: {{ $rows * 2 }}rem"
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>
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
