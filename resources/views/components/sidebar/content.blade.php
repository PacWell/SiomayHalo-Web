<aside id="sidebar" class="hidden">
    <div class="sidebar__content">
        <div class="sidebar__header">
            <div class="sidebar__logo">
                <img src="{{ asset('assets/img/logo_siomay.png') }}" alt="">
            </div>
            <div class="sidebar__name">
                <h1>Siomay</h1>
                <h1>Halo</h1>
            </div>
            <div class="sidebar__close">
                <button onclick=closeSidebar()>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-x-icon lucide-x">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <ul class="sidebar__list">
            <li class="sidebar__item">
                <a href="/" class="sidebar__link active">
                    <div class="sidebar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard">
                            <rect width="7" height="9" x="3" y="3" rx="1" />
                            <rect width="7" height="5" x="14" y="3" rx="1" />
                            <rect width="7" height="9" x="14" y="12" rx="1" />
                            <rect width="7" height="5" x="3" y="16" rx="1" />
                        </svg>
                    </div>
                    <h2>Dashboard</h2>
                </a>
            </li>
            <li class="sidebar__item">
                <a href="/produk" class="sidebar__link">
                    <div class="sidebar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                            <circle cx="8" cy="21" r="1" />
                            <circle cx="19" cy="21" r="1" />
                            <path
                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                        </svg>
                    </div>
                    <h2>Produk</h2>
                </a>
            </li>
            <li class="sidebar__item">
                <a href="/laporan" class="sidebar__link">
                    <div class="sidebar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-banknote-icon lucide-banknote">
                            <rect width="20" height="12" x="2" y="6" rx="2" />
                            <circle cx="12" cy="12" r="2" />
                            <path d="M6 12h.01M18 12h.01" />
                        </svg>
                    </div>
                    <h2>Laporan Penjualan</h2>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link">
                    <div class="sidebar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                            <polyline points="16 17 21 12 16 7" />
                            <line x1="21" x2="9" y1="12" y2="12" />
                        </svg>
                    </div>
                    <h2>Logout</h2>
                </a>
            </li>
        </ul>
    </div>
</aside>
