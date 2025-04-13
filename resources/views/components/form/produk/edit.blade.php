<x-layout>
<div class="container">
    <h2>Edit Produk</h2>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_produk" class="form-label">Jenis Produk</label>
            <select name="jenis_produk" class="form-control" required>
                <option value="makanan" {{ $produk->jenis_produk == 'makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="minuman" {{ $produk->jenis_produk == 'minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>

        <div class="form-group">
            <label for="harga">Harga Produk</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga', $produk->harga ?? '') }}" required>
        </div>


        <a href="{{ route('produk.index') }}" class="#">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

    </form>
</div>
</x-layout>
