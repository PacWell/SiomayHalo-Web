<x-form.layout title="Tambah Produk">
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form__item">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" placeholder="Masukkan nama produk" required>
        </div>
        <div class="form__item">
            <label for="jenis_produk">Jenis Produk</label>
            <select name="jenis_produk" id="jenis_produk" required>
                <option value="">Pilih Jenis Produk</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
            </select>
        </div>
        <div class="form__item">
            <label for="harga">Harga Produk</label>
            <input type="number" name="harga" id="harga" placeholder="Masukkan harga produk"
                value="{{ old('harga', $produk->harga ?? '') }}" required>
        </div>
        <div class="form__btn">
            <button type="submit">Simpan</button>
        </div>
    </form>
</x-form.layout>
