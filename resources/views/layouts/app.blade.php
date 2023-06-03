<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            
        </div>
        
    </body>
    <footer class="bg-dark text-white">
    <div class="container py-4">
      <div class="row py-5">
        <div class="col-md-4 mb-3 mb-md-0">
          <h6 class="text-uppercase mb-3">Customer services</h6>
          <ul class="list-unstyled mb-0">
            <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
            <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
            <li><a class="footer-link" href="#!">Online Stores</a></li>
            <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <h6 class="text-uppercase mb-3">Company</h6>
          <ul class="list-unstyled mb-0">
            <li><a class="footer-link" href="#!">What We Do</a></li>
            <li><a class="footer-link" href="#!">Available Services</a></li>
            <li><a class="footer-link" href="#!">Latest Posts</a></li>
            <li><a class="footer-link" href="#!">FAQs</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6 class="text-uppercase mb-3">Social media</h6>
          <ul class="list-unstyled mb-0">
            <li><a class="footer-link" href="#!">Twitter</a></li>
            <li><a class="footer-link" href="#!">Instagram</a></li>
            <li><a class="footer-link" href="#!">Tumblr</a></li>
            <li><a class="footer-link" href="#!">Pinterest</a></li>
          </ul>
        </div>
      </div>
      <div class="border-top pt-4" style="border-color: #1d1d1d !important">
        <div class="row">
          <div class="col-md-6 text-center text-md-start">
            <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
            <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
          </div>
        </div>
      </div>
    </div>
  </footer>


</html>
