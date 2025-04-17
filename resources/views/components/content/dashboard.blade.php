<x-layout>
    {{-- <x-slot:tittle></x-slot:tittle> --}}
    <section id="dashboard">
        <x-ui.breadcrumbs>
            Dashboard
        </x-ui.breadcrumbs>
        <div class="content">
            <div class="card card__1">
                <div class="card__left">
                    <h2>Total Produk</h2>
                    <h3>4 Produk</h3>
                </div>
                <div class="card__right">
                    <div class="card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-package-search-icon lucide-package-search">
                            <path
                                d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14" />
                            <path d="m7.5 4.27 9 5.15" />
                            <polyline points="3.29 7 12 12 20.71 7" />
                            <line x1="12" x2="12" y1="22" y2="12" />
                            <circle cx="18.5" cy="15.5" r="2.5" />
                            <path d="M20.27 17.27 22 19" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card card__2">
                <div class="card__left">
                    <h2>Total Penjualan</h2>
                    <h3>2 Produk</h3>
                </div>
                <div class="card__right">
                    <div class="card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-package-search-icon lucide-package-search">
                            <path
                                d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14" />
                            <path d="m7.5 4.27 9 5.15" />
                            <polyline points="3.29 7 12 12 20.71 7" />
                            <line x1="12" x2="12" y1="22" y2="12" />
                            <circle cx="18.5" cy="15.5" r="2.5" />
                            <path d="M20.27 17.27 22 19" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card card__3">
                <div class="card__left">
                    <h2>Pendapatan Bulan ini</h2>
                    <h3>1.2 Jt</h3>
                </div>
                <div class="card__right">
                    <div class="card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-package-search-icon lucide-package-search">
                            <path
                                d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14" />
                            <path d="m7.5 4.27 9 5.15" />
                            <polyline points="3.29 7 12 12 20.71 7" />
                            <line x1="12" x2="12" y1="22" y2="12" />
                            <circle cx="18.5" cy="15.5" r="2.5" />
                            <path d="M20.27 17.27 22 19" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card card__4">
                <div class="card__left">
                    <h2>Stok Produk</h2>
                    <h3>4 Produk</h3>
                </div>
                <div class="card__right">
                    <div class="card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-package-search-icon lucide-package-search">
                            <path
                                d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14" />
                            <path d="m7.5 4.27 9 5.15" />
                            <polyline points="3.29 7 12 12 20.71 7" />
                            <line x1="12" x2="12" y1="22" y2="12" />
                            <circle cx="18.5" cy="15.5" r="2.5" />
                            <path d="M20.27 17.27 22 19" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="chart chart__1">
                <div class="chart__top">
                    <h2>Grafik Penjualan Harian</h2>
                    <select name="penjualan__harian" id="penjualan__harian">
                        <option value="" >Senin</option>
                        <option value="" >Selasa</option>
                        <option value="" >Rabu</option>
                        <option value="" >Kamis</option>
                        <option value="" >Jumat</option>
                        <option value="" >Sabtu</option>
                        <option value="" >Minggu</option>
                    </select>
                </div>
                <div class="chart__bottom"></div>
            </div>
            <div class="chart chart__2">
                <div class="chart__top">
                    <h2>Grafik Penjualan Bulanan</h2>
                    <select name="penjualan__bulanan" id="penjualan__bulanan">
                        <option value="" >Januari</option>
                        <option value="" >Februari</option>
                        <option value="" >Maret</option>
                        <option value="" >April</option>
                        <option value="" >Mei</option>
                        <option value="" >Juni</option>
                        <option value="" >Juli</option>
                        <option value="" >Agustus</option>
                        <option value="" >September</option>
                        <option value="" >Oktober</option>
                        <option value="" >November</option>
                        <option value="" >Desember</option>
                    </select>
                </div>
                <div class="chart__bottom"></div>
            </div>
        </div>
    </section>
</x-layout>

