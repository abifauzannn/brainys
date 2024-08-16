<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Tambahkan Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Brainys" />
    <meta property="og:description"
        content="Brainys ( Brainstorming Based on Artificial Intellegence System ) was developed by Oasys Edutech Indonesia." />
    <meta property="og:url" content="https://brainys.id/" />
    <meta property="og:site_name" content="Brainys" />
    <link rel="shortcut icon" href="{{ url('images/newicon.png') }}">


    <title>Brainys</title>
</head>

<body class="bg-white">
    <livewire:navigation />
    {{ $slot }}
    <livewire:footer />


</body>
<script>
    AOS.init();
</script>


</html>
