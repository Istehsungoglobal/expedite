@props([
    'name',
    'id' => null,
    'label',
    'placeholder' => null,
    'required' => false,
    'autofocus' => false,
    'disabled' => false,
    'readonly' => false,
    'autocomplete' => 'new-password',
    'help' => null,
    'toggleable' => true,
])

@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? $label;
    $hasError = $errors->has($name);
    $classes = 'form-control ' . ($hasError ? 'is-invalid' : '');
    $toggleId = 'toggle-' . $id;
@endphp

<div class="form-floating mb-3 position-relative">
    <input
        type="password"
        name="{{ $name }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $autofocus ? 'autofocus' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $readonly ? 'readonly' : '' }}
        autocomplete="{{ $autocomplete }}"
        class="{{ $classes }}"
        {{ $attributes }}
    >
    <label for="{{ $id }}">{{ $label }}</label>

    @if ($toggleable)
        <button
            type="button"
            class="btn btn-sm position-absolute end-0 top-50 translate-middle-y me-2 text-body-secondary border-0 bg-transparent"
            id="{{ $toggleId }}"
            aria-label="Toggle password visibility"
        >
            <i class="fas fa-eye"></i>
        </button>
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    @if ($help)
        <div class="form-text">{{ $help }}</div>
    @endif
</div>

@if ($toggleable)
    @push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('{{ $toggleId }}');
            const passwordInput = document.getElementById('{{ $id }}');

            if (toggleButton && passwordInput) {
                toggleButton.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // Toggle icon
                    const icon = toggleButton.querySelector('i');
                    icon.classList.toggle('fa-eye');
                    icon.classList.toggle('fa-eye-slash');
                });
            }
        });
    </script>
    @endpush
@endif
