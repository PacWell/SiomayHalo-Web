<x-layout>

    <section id="produk">
        @if (session('success'))
            <x-ui.alert-success>
                {{ session('success') }}
            </x-ui.alert-success>
        @endif

        @if (session('update'))
            <x-ui.alert-update>
                {{ session('update') }}
            </x-ui.alert-update>
        @endif
        <x-ui.breadcrumbs>Produk</x-ui.breadcrumbs>
        <x-ui.filter>
            <x-ui.filter-left>
                <x-ui.select name="jenis_produk" placeholder="Pilih Jenis Produk" :options="[
                    'makanan' => 'Makanan',
                    'minuman' => 'Minuman',
                ]" :selected="request('jenis_produk')" />
            </x-ui.filter-left>

        </x-ui.filter>
        <div class="content">
            <div class="content__top">
                <x-ui.button-create href="{{ route('produk.create') }}">Produk</x-ui.button-create>
            </div>
            <div class="content__bottom">
                <x-ui.table>
                    <x-slot:head>
                        <x-ui.table-head :columns="['No', 'Nama Produk', 'Jenis Produk', 'Harga Produk', 'Actions']" />
                    </x-slot:head>

                    @foreach ($produkList as $index => $produk)
                        <x-ui.table-row>
                            <x-ui.table-cell>{{ $index + 1 }}</x-ui.table-cell>
                            <x-ui.table-cell>{{ $produk->nama_produk }}</x-ui.table-cell>
                            <x-ui.table-cell>{{ $produk->jenis_produk }}</x-ui.table-cell>
                            <x-ui.table-cell>Rp {{ number_format($produk->harga, 0, ',', '.') }}</x-ui.table-cell>
                            <x-ui.table-cell>
                                <x-ui.table-actions :editUrl="route('produk.edit', $produk->id)" :deleteUrl="route('produk.destroy', $produk->id)" />
                            </x-ui.table-cell>
                        </x-ui.table-row>
                    @endforeach
                </x-ui.table>
            </div>
        </div>
    </section>

</x-layout>
