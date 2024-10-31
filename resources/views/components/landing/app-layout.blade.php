<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title ? $title . ' | STTI-Cirebon' : 'STTI-Cirebon' }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets-landing/assets/img/favicon.png" rel="icon">
    <link href="assets-landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets-landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets-landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets-landing/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets-landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets-landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets-landing/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizLand
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header sticky-top">

    <x-landing.header.topbar></x-landing.header.topbar>

    <x-landing.header.navbar></x-landing.header.navbar>

</header>

<main class="main">

    {{ $slot }}

</main>

<footer id="footer" class="footer">

    <x-landing.footer></x-landing.footer>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>

<!-- Vendor JS Files -->
<script src="assets-landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets-landing/assets/vendor/php-email-form/validate.js"></script>
<script src="assets-landing/assets/vendor/aos/aos.js"></script>
<script src="assets-landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets-landing/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets-landing/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets-landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets-landing/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets-landing/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets-landing/assets/js/main.js"></script>

</body>

</html>
