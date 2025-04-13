<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siomay Halo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="overlay"></div>
    <x-sidebar.content/>

    <x-header.content/>

    <main>
        {{  $slot }}
    </main>
    <x-footer.content/>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
