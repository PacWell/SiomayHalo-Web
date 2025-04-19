<x-auth.layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form__group">
            <label for="email">Nama Pengguna</label>
            <input type="email" name="email" id="email" placeholder="Masukkan nama pengguna" required>
        </div>
        <div class="form__group password-wrapper">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Masukkan password anda" id="password-input" required>
            <span class="toggle-password" onclick="togglePassword()">
                <i class="fas fa-eye" id="eye-icon"></i>
            </span>
        </div>
        <div class="form__btn">
            <button type="submit">Masuk</button>
        </div>
    </form>
</x-auth.layout>
