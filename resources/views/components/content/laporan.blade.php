<x-layout>
    <section id="laporan">
        <x-ui.breadcrumbs>
            Laporan Penjualan
        </x-ui.breadcrumbs>
        <x-ui.filter>
            <x-ui.filter-left>
                <x-ui.input type="date" placeholder="Harian" />
                <x-ui.input type="month" placeholder="Bulanan" />
            </x-ui.filter-left>
        </x-ui.filter>
        <div class="content">
            <div class="content__top">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Minuman terjual</th>
                            <th>Minuman Terjual</th>
                            <th>Pendapatan</th>
                            <th>Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2025-04-13</td>
                            <td>60</td>
                            <td>80</td>
                            <td>Rp 1.250.000</td>
                            <td>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-info-icon lucide-info">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 16v-4" />
                                        <path d="M12 8h.01" />
                                    </svg>
                                    Detail
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="content__bottom">
                <div class="show__pagination">
                    <p>Showing 1 - 09 of 100</p>
                </div>
                <div class="pagination">
                    <button class="btn__pagination" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-left-icon lucide-chevron-left">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                    </button>
                    <button class="btn__pagination">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layout>
