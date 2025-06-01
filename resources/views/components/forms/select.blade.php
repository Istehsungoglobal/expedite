@props([
    'name',
    'id' => null,
    'label',
    'value' => null,
    'options' => [],
    'required' => false,
    'disabled' => false,
    'help' => null,
    'placeholder' => '-- Select an option --',
    'showPlaceholder' => true,
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    $classes = 'form-select ' . ($hasError ? 'is-invalid' : '');
    $currentValue = old($name, $value);
@endphp

<div class="form-floating mb-3">
    <select
        name="{{ $name }}"
        id="{{ $id }}"
        class="{{ $classes }}"
        {{ $required ? 'required' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes }}
    >
        @if($showPlaceholder)
            <option value="">{{ $placeholder }}</option>
        @endif

        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ $currentValue == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
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
