<x-form.layout title="Edit Produk">
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form__item">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
        </div>

        <div class="form__item">
            <label for="jenis_produk" class="form-label">Jenis Produk</label>
            <select name="jenis_produk" class="form-control" required>
                <option value="Makanan" {{ $produk->jenis_produk == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="Minuman" {{ $produk->jenis_produk == 'Minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>

        <div class="form__item">
            <label for="harga">Harga Produk</label>
            <input type="number" name="harga" id="harga" value="{{ old('harga', $produk->harga ?? '') }}"
                required>
        </div>

        <div class="form__btn">
            <button type="submit">Simpan Perubahan</button>
        </div>
    </form>
</x-form.layout>
