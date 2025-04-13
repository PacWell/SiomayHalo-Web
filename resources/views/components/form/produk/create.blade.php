<x-layout>
    <section id="produk-create">
        <div class="breadcumbs">
            <h1>Tambah Produk</h1>
        </div>

        <div class="content">
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" required>
                </div>
                <div class="form-group">
                    <label for="jenis_produk">Jenis Produk</label>
                    <select name="jenis_produk" id="jenis_produk" required>
                        <option value="">Pilih Jenis Produk</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Produk</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga', $produk->harga ?? '') }}" required>
                </div>

                <a href="{{ route('produk.index') }}" class="#">Kembali</a>
                <button type="submit">Simpan</button>

            </form>
        </div>
    </section>
</x-layout>
