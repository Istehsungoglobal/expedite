@props([
    'name',
    'id' => null,
    'label',
    'required' => false,
    'disabled' => false,
    'help' => null,
    'accept' => null,
    'multiple' => false,
    'showPreview' => false,
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    $classes = 'form-control ' . ($hasError ? 'is-invalid' : '');
    $previewId = "preview-{$id}";
@endphp

<div class="form-group mb-3" x-data="{
    showPreview: {{ $showPreview ? 'true' : 'false' }},
    imageUrl: null,
    handleFileChange(event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            this.imageUrl = URL.createObjectURL(file);
            this.showPreview = true;
        } else if (file) {
            this.imageUrl = null;
            this.showPreview = false;
            alert('Please select a valid image file');
        }
    },
    clearPreview() {
        this.imageUrl = null;
        this.showPreview = {{ $showPreview ? 'true' : 'false' }};
        const input = document.getElementById('{{ $id }}');
        if (input) input.value = '';
    }
}">
    <label for="{{ $id }}">{{ $label }}</label>
    <input
        type="file"
        name="{{ $name }}{{ $multiple ? '[]' : '' }}"
        id="{{ $id }}"
        class="{{ $classes }}"
        {{ $required ? 'required' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $multiple ? 'multiple' : '' }}
        {{ $accept ? 'accept='.$accept : '' }}
        @change="handleFileChange($event)"
        {{ $attributes }}
    >

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    @if ($help)
        <div class="form-text">{{ $help }}</div>
    @endif

    <div x-show="showPreview" x-cloak class="mt-3 image-preview">
        <div class="card">
            <div class="card-body">
                <img x-bind:src="imageUrl" class="img-fluid mb-2" x-show="imageUrl">
                <div x-show="!imageUrl && showPreview" class="text-center py-3 bg-light">
                    <span class="text-muted">Select an image to preview</span>
                </div>
                <button type="button" class="btn btn-sm btn-danger mt-2" @click="clearPreview">
                    Clear Preview
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
</style>
