<div class="filter__left">
    <div class="filter__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-list-filter-icon lucide-list-filter">
            <path d="M3 6h18" />
            <path d="M7 12h10" />
            <path d="M10 18h4" />
        </svg>
    </div>
    <div class="filter__title">
        <h2>Filter By</h2>
    </div>
    <ul class="filter__list">
        <li class="filter__item">
            {{ $slot }}
        </li>
    </ul>
</div>
