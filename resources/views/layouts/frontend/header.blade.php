<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
    {{-- boot strap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->

      <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">

            <a class="navbar-brand" href="index.html">
              <span class="fw-bold text-uppercase text-dark">modern ecommerce</span>
            </a>

            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/shop')}}">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/about-us')}}">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/contact-us')}}">Contact us</a>
                </li>
              </ul>

              <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <?php $search = session()->get('search'); ?>
                    <form id="searchForm" class="d-flex" action="{{ url('/shop') }}" >
                        <input type="text" class="form-control me-2" placeholder="Search.." name="search" value="{{ request('search') }}" id="searchInput">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  {{-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form> --}}
                </li>
                <li class="nav-item">
                    @if (auth()->check())
                        <li><a href="{{ url('/dashboard') }}" class="nav-link under"><i class="fas fa-user me-1 text-gray fw-normal"></i>Dashboard</a></li>
                    @else
                         <li><a href="/login" class="nav-link under"><i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                    @endif

                  {{-- <a class="nav-link" href= "{{url('/login')}}">
                    <i class="fas fa-user me-1 text-gray fw-normal"></i>Login
                  </a> --}}
                </li>
                <li class="nav-item">
                  <a class="nav-link" href= "{{url('/image-search')}}">
                    <i class="fas fa-camera"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"href= "{{url('/voice-search')}}">
                    <i class="fas fa-microphone"></i>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>




{{-- <!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/visualseach.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }} ">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <style>
      /* Add these rules to remove the space around the search form and icon */
      .search {
        margin: 0;
        padding: 0;
      }
      .example {
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="logo"><a href="{{url('/')}}">Modern Ecommerce </a></div>
      <div class="menu">
        <a href="#">
          <ion-icon name="close" class="close"></ion-icon>
        </a>

      </div>
      <div class="search">
       <?php $search = session()->get('search'); ?>
       <form id="searchForm" class="example" action="{{ url('/shop') }}" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}" id="searchInput">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
{{-- working code
        <form class="example" action="{{ url('/shop') }}" style="margin:auto;max-width:300px">
          <input type="text" placeholder="Search.." name="search" value="">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form> --}}
        {{-- <button class="button" id="Ok"><a href= "{{url('/image-search')}}"><img src="{{ asset('img/header/google lens.webp') }}" alt="car" width="30" height="25"></a></button>
        <button class="button" id="Ok"><a href= "{{url('/voice-search')}}"><img src="{{ asset('img/header/google mic.png') }}" alt="car" width="30" height="25"></a></button>

      </div>
      <div class="heading">
        <ul>
            <div>
          <li><a href= "{{url('/')}}" class="">HOME</a></li></div>
          <li><a href="{{url('/shop')}}" class="under">SHOP</a></li>

          @if (auth()->check())
        <li><a href="{{ url('/dashboard') }}" class="under">Dashboard</a></li>
      @else
        <li><a href="/login" class="under">Login</a></li>
      @endif
          {{-- <li><a href="/register" class="under">Register</a></li> --}}

          {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                </div>
        </ul>
      </div>
      <div class="heading1">
        <ion-icon name="menu" class="ham"></ion-icon>
      </div>
      <script>
        window.addEventListener('transcriptionCompleted', (event) => {
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.value = event.detail.transcription;
            } else {
                console.error('Search input not found');
            }
        });
    </script>

    </header> --}}

