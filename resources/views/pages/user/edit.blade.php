@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Edit User: {{ $user->full_name }}</h2>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div id="table-simple-pagination-replace-element">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-falcon-default btn-sm"
                                type="button">
                                <span class="fas fa-arrow-left" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">User List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body bg-body-tertiary">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data"
                    class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <fieldset class="mb-3 border rounded-3 p-3">
                        <legend class="float-none w-auto px-3 fs-5">Contact Information</legend>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <x-forms.text-input name="first_name" label="First Name" :value="old('first_name', $user->first_name)" required />
                            </div>
                            <div class="col-lg-6">
                                <x-forms.text-input name="last_name" label="Last Name" :value="old('last_name', $user->last_name)" required />
                            </div>
                            <div class="col-lg-6">
                                <x-forms.email-input name="email" label="Email Address" :value="old('email', $user->email)"
                                    required />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <x-forms.phone name="phone" label="Primary Phone" :value="old('phone', $user->full_phone)" required :skip="$user->id" />
                            </div>
                            <div class="col-lg-6">
                                <x-forms.phone name="secondary_phone" label="Secondary Phone (Optional)"
                                    :value="old('secondary_phone', $user->secondary_phone)" :skip="$user->id" />
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3 border rounded-3 p-3">
                        <legend class="float-none w-auto px-3 fs-5">Access Information</legend>

                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <x-forms.password-input name="password" label="Password (leave blank to keep current)"
                                    autocomplete="new-password" />
                            </div>
                            <div class="col-lg-6">
                                <x-forms.password-input name="password_confirmation" label="Confirm Password"
                                    autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <x-forms.select-two name="role" id="roles-select" label="User Roles"
                                    :options="route('api.select2.roles')" placeholder="Search for roles..."
                                    :minInputLength="1" :selected="old('role', $user->roles->first()->id ?? '')" required />
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3 border rounded-3 p-3">
                        <legend class="float-none w-auto px-3 fs-5">Address Information</legend>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <x-forms.text-input name="address" label="Street Address" :value="old('address', $user->address)" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <x-forms.text-input name="city" label="City" :value="old('city', $user->city)" />
                            </div>
                            <div class="col-lg-6">
                                <x-forms.text-input name="state" label="State/Province" :value="old('state', $user->state)" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <x-forms.select-two name="country_id" id="countries-select" label="Country"
                                    :options="route('api.select2.countries')" placeholder="Search for countries..."
                                    :selected="old('country_id', $user->country_id)" :minInputLength="1" required />
                            </div>
                            <div class="col-lg-6">
                                <x-forms.text-input name="zip" label="Postal/Zip Code" :value="old('zip', $user->zip)" />
                            </div>
                        </div>
                    </fieldset>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                @if($user->avatar)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->full_name }}"
                                         class="img-thumbnail" style="max-height: 100px;">
                                </div>
                                @endif
                            </div>
                            <x-forms.file-input name="avatar" label="Profile Picture (Upload to change)" accept="image/*"
                                help="Recommended: square image, 200x200px or larger" />
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                @if($user->cover_photo)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $user->cover_photo) }}" alt="Cover photo"
                                         class="img-thumbnail" style="max-height: 100px;">
                                </div>
                                @endif
                            </div>
                            <x-forms.file-input name="cover_photo" label="Cover Photo (Upload to change)" accept="image/*"
                                help="Recommended: 1200x300px" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <x-forms.checkbox name="status" label="Active Account"
                                :checked="old('status', $user->is_active)" value="1" switch />
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('.needs-validation');

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            // Password match validation (only if password field is not empty)
            const password = document.querySelector('input[name="password"]');
            const confirmation = document.querySelector('input[name="password_confirmation"]');

            if (password.value && password.value !== confirmation.value) {
                event.preventDefault();
                event.stopPropagation();
                confirmation.setCustomValidity('Passwords do not match');
            } else {
                confirmation.setCustomValidity('');
            }

            form.classList.add('was-validated');
        });

        // Reset custom validity when typing
        const confirmation = document.querySelector('input[name="password_confirmation"]');
        confirmation.addEventListener('input', function() {
            this.setCustomValidity('');
        });
    });
</script>
@endpush
