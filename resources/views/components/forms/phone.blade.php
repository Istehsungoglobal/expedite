@props([
    'name' => 'phone',
    'label' => 'Phone Number',
    'required' => true,
    'value' => old('mobile'),
    'defaultCountry' => 'auto',
    'fallbackCountry' => 'bd',
    'customerId' => null,
    'skip' => null,
])

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
@endpush

<div class="d-flex flex-column form-group gap-1 mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }} @if($required)<span class="text-danger"> *</span>@endif
    </label>

    <input
        type="tel"
        class="form-control w-100 @error($name) is-invalid @enderror"
        name="{{ $name }}_display"
        value="{{ $value }}"
        id="{{ $name }}"
        @if($required) required @endif
    >

    <input type="hidden" name="c_code_{{ $name }}" id="country_code_{{ $name }}">
    <input type="hidden" name="full_{{ $name }}" id="full_number_{{ $name }}">
    <input type="hidden" name="{{ $name }}" id="number_only_{{ $name }}">

    <div class="text-danger" id="{{ $name }}-error"></div>

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInputEl = document.querySelector("#{{ $name }}");
        let {{ $name }}Valid = false;

        // Initialize intl-tel-input
        const iti = window.intlTelInput(phoneInputEl, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
            initialCountry: "{{ $defaultCountry }}",
            nationalMode: true,
            geoIpLookup: function(callback) {
                $.ajax({
                    url: "{{ url('api/ip-info') }}",
                    type: "POST",
                    dataType: "json"
                })
                    .done(function(data) {
                        callback(data.country_code?.toLowerCase() || "{{ $fallbackCountry }}");
                    })
                    .fail(function() {
                        callback("{{ $fallbackCountry }}");
                    });
            },
            separateDialCode: true,
            formatOnDisplay: true,
            autoPlaceholder: "polite"
        });

        // Validate phone number on blur
        $(phoneInputEl).on('blur', function() {
            if (!validatePhoneNumber()) {
                return;
            }

            // If phone format is valid, check if it's already in use
            const mobileNumber = $(`#number_only_{{ $name }}`).val().trim();
            if (mobileNumber) {
                checkMobileAvailability(mobileNumber);
            }
        });

        // Function to check if mobile is already in use
        function checkMobileAvailability(phone) {
            $.ajax({
                url: '{{ route('phone-checker') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    phone: phone,
                    skip: '{{ $skip }}'
                },
                beforeSend: function() {
                    $(`#{{ $name }}-error`).html(
                        '<small><i class="fas fa-spinner fa-spin"></i> Checking...</small>'
                    );
                },
                success: function(response) {
                    if (!response.exists) {
                        $(`#{{ $name }}-error`).html('');
                        $(`#{{ $name }}`).removeClass('is-invalid').addClass('is-valid');
                        {{ $name }}Valid = true;
                    } else {
                        $(`#{{ $name }}-error`).text('This mobile number is already in use');
                        $(`#{{ $name }}`).removeClass('is-valid').addClass('is-invalid');
                        {{ $name }}Valid = false;
                    }

                    // Trigger event for parent components to handle
                    document.dispatchEvent(new CustomEvent('phoneValidationChanged', {
                        detail: { field: '{{ $name }}', valid: {{ $name }}Valid }
                    }));
                },
                error: function(xhr) {
                    $(`#{{ $name }}-error`).text('Error checking availability');
                    {{ $name }}Valid = false;

                    document.dispatchEvent(new CustomEvent('phoneValidationChanged', {
                        detail: { field: '{{ $name }}', valid: false }
                    }));
                }
            });
        }

        // Function to validate phone number
        function validatePhoneNumber() {
            const isValid = iti.isValidNumber();

            if (!isValid) {
                const errorCode = iti.getValidationError();
                let errorText = "Invalid number";

                switch (errorCode) {
                    case intlTelInputUtils.validationError.TOO_SHORT:
                        errorText = "Number is too short";
                        break;
                    case intlTelInputUtils.validationError.TOO_LONG:
                        errorText = "Number is too long";
                        break;
                    case intlTelInputUtils.validationError.INVALID_COUNTRY_CODE:
                        errorText = "Invalid country code";
                        break;
                }

                $(`#{{ $name }}-error`).text(errorText);
                $(phoneInputEl).addClass('is-invalid');
                {{ $name }}Valid = false;

                document.dispatchEvent(new CustomEvent('phoneValidationChanged', {
                    detail: { field: '{{ $name }}', valid: false }
                }));

                return false;
            }

            // Get phone details and store in hidden fields
            const fullNumber = iti.getNumber();
            const countryCode = iti.getSelectedCountryData().dialCode;
            const numberWithoutCountryCode = fullNumber.replace('+' + countryCode, '');

            $(`#country_code_{{ $name }}`).val(countryCode);
            $(`#full_number_{{ $name }}`).val(fullNumber);
            $(`#number_only_{{ $name }}`).val(numberWithoutCountryCode);

            $(phoneInputEl).removeClass('is-invalid');
            return true;
        }

        // Validate on form submit
        $(phoneInputEl).closest('form').on('submit', function(e) {
            if (!validatePhoneNumber()) {
                e.preventDefault();
                return false;
            }

            // Additional validation can be added here or handled by parent components
        });

        // Expose the ITI instance for parent components if needed
        window.intlTelInputInstances = window.intlTelInputInstances || {};
        window.intlTelInputInstances['{{ $name }}'] = iti;
    });
</script>
@endpush
