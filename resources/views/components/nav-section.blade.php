@props(['title'])

<li class="nav-item">
    <!-- label -->
    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
        <div class="col-auto navbar-vertical-label">{{ $title }}</div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider" />
        </div>
    </div>
    {{ $slot }}
</li>
