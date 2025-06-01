@props([
    'name',
    'id' => null,
    'label' => null,
    'placeholder' => 'Select an option',
    'multiple' => false,
    'options' => [],
    'selected' => null,
    'allowClear' => true,
    'minInputLength' => 2,
    'maxItems' => null,
    'disabled' => false,
    'required' => false,
    'help' => null,
    'customClasses' => '',
    'templateResult' => null,
    'templateSelection' => null,
])

@php
    $id = $id ?? $name;
    $isAjax = is_string($options) && filter_var($options, FILTER_VALIDATE_URL);
    $hasError = $errors->has($name);
    $classes = 'form-control select2-hidden-accessible ' . ($hasError ? 'is-invalid' : '') . ' ' . $customClasses;

    // Format selected for multiple or single
    $selectedValues = [];

    if (old($name)) {
        $selectedValues = $multiple ? (array) old($name) : old($name);
    } elseif ($selected !== null) {
        $selectedValues = $multiple ? (array) $selected : $selected;
    }

    // Generate a unique identifier for this instance
    $instanceId = 'select2_' . uniqid();
@endphp

{{-- Select2 CSS from CDN --}}
@once
@push('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<style>
    .select2-container--bootstrap-5 .select2-selection {
        width: 100%;
        min-height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .select2-container--bootstrap-5.select2-container--focus .select2-selection,
    .select2-container--bootstrap-5.select2-container--open .select2-selection {
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .select2-container--bootstrap-5 .select2-dropdown {
        border-color: #ced4da;
        border-radius: 0.25rem;
    }

    .select2-container--bootstrap-5 .select2-dropdown.select2-dropdown--below {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .select2-container--bootstrap-5 .select2-dropdown.select2-dropdown--above {
        border-bottom: none;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    /* Fixed multiple selection height adjustment */
    .select2-container--bootstrap-5 .select2-selection--multiple,
    .select2-container--bootstrap-5 .select2-selection--single {
        padding: 0.375rem 0.75rem;
        min-height: calc(1.5em + 0.75rem + 2px);
        height: auto !important; /* Force auto height */
        overflow: hidden; /* Prevent content overflow */
    }

    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__rendered {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin: 0;
        list-style: none;
    }

    /* Improve the layout of selection items */
    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice {
        display: flex;
        align-items: center;
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        margin-right: 0.5rem;
        margin-bottom: 0.25rem;
        white-space: normal; /* Allow text wrapping */
        word-break: break-word; /* Break long words */
    }

    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice__remove {
        margin-right: 0.25rem;
        cursor: pointer;
        color: #6c757d;
    }

    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #343a40;
    }

    /* Fix the search input in multiple selection mode */
    .select2-container--bootstrap-5 .select2-selection--multiple .select2-search {
        flex: 1;
        margin-bottom: 0.25rem;
        width: 100%; /* Take full width when needed */
    }

    .select2-container--bootstrap-5 .select2-selection--multiple .select2-search .select2-search__field {
        border: 0;
        margin: 0;
        padding: 0;
        width: 100%;
        outline: 0;
        min-width: 4em; /* Ensure minimum width for typing */
    }

    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        padding-left: 0;
        line-height: 1.5;
        color: #212529;
    }

    .is-invalid + .select2-container--bootstrap-5 .select2-selection {
        border-color: #dc3545;
    }

    .form-floating .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3.5rem + 2px);
        padding: 1.625rem 0.75rem 0.625rem;
    }

    .form-floating .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        height: 100%;
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }
</style>
@endpush
@endonce


{{-- Select2 JS from CDN --}}
@once
@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
@endonce

<div @if($label) class="form-floating mb-3" @else class="mb-3" @endif>
    <select
        name="{{ $name }}{{ $multiple ? '[]' : '' }}"
        id="{{ $id }}"
        class="{{ $classes }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $multiple ? 'multiple' : '' }}
        {{ $attributes }}
        aria-describedby="{{ $id }}_help"
    >
        @if (!$isAjax)
            @foreach($options as $optionValue => $optionLabel)
                <option
                    value="{{ $optionValue }}"
                    {{ $multiple
                        ? (in_array($optionValue, $selectedValues) ? 'selected' : '')
                        : ($selectedValues == $optionValue ? 'selected' : '')
                    }}
                >
                    {{ $optionLabel }}
                </option>
            @endforeach
        @endif
    </select>

    @if($label)
        <label for="{{ $id }}">{{ $label }}</label>
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    @if ($help)
        <div class="form-text" id="{{ $id }}_help">{{ $help }}</div>
    @endif
</div>

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const select2Config = {
            theme: 'bootstrap-5',
            placeholder: "{{ $placeholder }}",
            width: '100%',
            allowClear: {{ $allowClear ? 'true' : 'false' }},
            @if ($maxItems && $multiple)
            maximumSelectionLength: {{ $maxItems }},
            @endif
            @if ($templateResult)
            templateResult: {!! $templateResult !!},
            @endif
            @if ($templateSelection)
            templateSelection: {!! $templateSelection !!},
            @endif
        };

        @if ($isAjax)
        select2Config.ajax = {
            url: "{{ $options }}",
            type: 'POST',
            dataType: 'json',
            delay: 350, // debouncing
            cache: true,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data: function (params) {
                // Fix for undefined search parameter
                return {
                    search: params.term || '', // Use empty string instead of undefined
                    page: params.page || 1
                };
            },
            processResults: function (data, params) {
                params.page = params.page || 1;

                return {
                    results: data.results || [],
                    pagination: {
                        more: data.pagination ? data.pagination.more : false
                    }
                };
            },
            minimumInputLength: {{ $minInputLength }},
            transport: function (params, success, failure) {
                const request = new XMLHttpRequest();
                request.open('POST', params.url);

                // Apply headers
                if (params.headers) {
                    Object.keys(params.headers).forEach(function (key) {
                        request.setRequestHeader(key, params.headers[key]);
                    });
                }

                request.onload = function () {
                    if (request.status >= 200 && request.status < 300) {
                        try {
                            const response = JSON.parse(request.responseText);
                            success(response);
                        } catch (e) {
                            console.error('JSON parse error:', e);
                            failure({
                                status: 'error',
                                message: 'The server returned invalid JSON data'
                            });
                        }
                    } else {
                        failure({
                            status: 'error',
                            message: 'Server returned an error: ' + request.status
                        });
                    }
                };

                request.onerror = function () {
                    failure({
                        status: 'error',
                        message: 'Network error occurred'
                    });
                };

                // Convert data to JSON string for POST request
                let postData = null;
                if (params.data) {
                    postData = JSON.stringify({
                        search: params.data.search || '',
                        page: params.data.page || 1
                    });
                }

                request.send(postData);

                return {
                    abort: function () {
                        request.abort();
                    }
                };
            }
        };

        @if($selected)
        // Pre-load selected items for AJAX mode
        const selectedData = @json($multiple ? array_values((array)$selected) : [$selected]);
        const endpoint = "{{ $options }}";

        fetch(endpoint, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                preload: selectedData
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.results && data.results.length) {
                // Create the options and append to Select2
                const select2Instance = $('#{{ $id }}').select2(select2Config);

                data.results.forEach(item => {
                    // Create the option and append to Select2
                    const option = new Option(item.text, item.id, true, true);
                    select2Instance.append(option);
                });

                // Manually trigger change so Select2 can render the selected options
                select2Instance.trigger('change');
            } else {
                // Initialize without preloaded options
                $('#{{ $id }}').select2(select2Config);
            }
        })
        .catch(error => {
            console.error('Error loading preselected values:', error);
            // Initialize without preloaded options
            $('#{{ $id }}').select2(select2Config);
        });
        @else
        // Initialize Select2 without preloaded options
        $('#{{ $id }}').select2(select2Config);
        @endif
        @else
        // Initialize Select2 with local options
        $('#{{ $id }}').select2(select2Config);
        @endif

        // Reset validation classes on select2 change
        $('#{{ $id }}').on('change', function() {
            if ($(this).hasClass('is-invalid')) {
                $(this).removeClass('is-invalid');
            }
        });

        // Ensure Select2 doesn't get initialized twice on page reload
        $('#{{ $id }}').attr('data-select2-id', '{{ $instanceId }}');

        // Fix floating label behavior
        @if($label)
        $('#{{ $id }}').on('select2:open', function() {
            $(this).closest('.form-floating').find('label').addClass('form-floating-active');
        });
        @endif
    });
</script>
@endpush
