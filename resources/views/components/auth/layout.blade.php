<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <!-- Fontawesome Icon -->
    <script src="https://kit.fontawesome.com/17b39fa33f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="form__container">
        <div class="form__wrapper">
            <div class="form__header">
                <div class="form__logo">
                    <img src="assets/img/logo_siomay.png" alt="">
                </div>
                <div class="form__heading">
                    <h1>Selamat Datang</h1>
                    <p>Masuk untuk mulai menggunakan sistem kasir dan mengelola transaksi.</p>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password-input");
            const eyeIcon = document.getElementById("eye-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
