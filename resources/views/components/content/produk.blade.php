<x-layout>
    <section id="produk">
        <div class="breadcumbs">
            <h1>Produk</h1>
        </div>
        <div class="filter">
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
                        <!-- <h3>Jenis Produk</h3> -->
                        <select name="" id="">
                            <option value="">Pilih Jenis Produk</option>
                            <option value="">Makanan</option>
                            <option value="">Minuman</option>
                        </select>
                    </li>
                    <!-- <li class="filter__item">
                        <select name="" id="">
                            <option value="">Pilih Stok Produk</option>
                        </select>
                    </li> -->
                </ul>
            </div>
            <div class="filter__right">
                <input type="search" name="" id="" placeholder="Cari nama produk">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-search-icon lucide-search">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="content">
            <div class="content__top">
                <a href="{{ route('produk.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-file-plus2-icon lucide-file-plus-2">
                        <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4" />
                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        <path d="M3 15h6" />
                        <path d="M6 12v6" />
                    </svg>
                    <h3>Tambah</h3>
                </a>
            </div>
            <div class="content__bottom">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Harga Produk</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produkList as $index => $produk)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ $produk->jenis_produk }}</td>
                            <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('produk.edit', $produk->id) }}" class="edit" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-pen-line-icon lucide-file-pen-line">
                                        <path
                                            d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                        <path
                                            d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                        <path d="M8 18h1" />
                                    </svg>
                                </a>
                                {{-- <a href="#" class="delete" title="Delete"> --}}
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete" title="Delete" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-trash2-icon lucide-trash-2">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            </form>
                                {{-- </a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
