@props(['href' => '#', 'active' => false])

<li class="sidebar__item">
    <a href="{{ $href }}" class="sidebar__link {{ $active === 'true' ? 'active' : '' }}">
        <div class="sidebar__icon">
            {{ $icon }}
        </div>
        <h2>{{ $slot }}</h2>
    </a>
</li>
