@props([
    'id',
    'title',
    'icon' => null,
    'badge' => null,
    'badgeClass' => 'badge-subtle-success',
    'expanded' => false
])

<li class="nav-item">
    <!-- parent pages -->
    <a class="nav-link dropdown-indicator" href="#{{ $id }}" role="button"
       data-bs-toggle="collapse" aria-expanded="{{ $expanded ? 'true' : 'false' }}"
       aria-controls="{{ $id }}">
        <div class="d-flex align-items-center">
            @if($icon)
                <span class="nav-link-icon"><span class="{{ $icon }}"></span></span>
            @endif
            <span class="nav-link-text ps-1">{{ $title }}</span>
            @if($badge)
                <span class="badge rounded-pill ms-2 {{ $badgeClass }}">{{ $badge }}</span>
            @endif
        </div>
    </a>
    <ul class="nav collapse {{ $expanded ? 'show' : '' }}" id="{{ $id }}">
        {{ $slot }}
    </ul>
</li>
