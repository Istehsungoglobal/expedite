@props([
    'href' => '#',
    'icon' => null,
    'badge' => null,
    'badgeClass' => 'badge-subtle-success',
    'active' => false,
])

<a {{ $attributes->merge(['class' => 'nav-link' . ($active ? ' active' : '')]) }} href="{{ $href }}" role="button">
    <div class="d-flex align-items-center">
        @if($icon)
            <span class="nav-link-icon">
                <span class="{{ $icon }}"></span>
            </span>
        @endif
        <span class="nav-link-text ps-1">{{ $slot }}</span>
        @if($badge)
            <span class="badge rounded-pill ms-2 {{ $badgeClass }}">{{ $badge }}</span>
        @endif
    </div>
</a>
