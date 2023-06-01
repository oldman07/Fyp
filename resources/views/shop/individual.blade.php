@extends('layouts.frontend.main')

@section('main-section')


<main class="container">




<div class="left-column">
  <div id="slider" class="slider">
    <div class="slide">
    <img data-image="red" class="active" src="{{ asset('storage/uploads/images/' . $product->product_image) }}" alt="">
    </div>
    <br>
    <div class="slide">
      <div class="video-wrap">
      <video width="560" height="315" controls>
                <source src="{{ asset('storage/uploads/videos/' . $product->product_video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
      </div>
    </div>
  </div>
</div>





<!-- Right Column -->
<div class="right-column">

  <!-- Product Description -->
  <div class="product-description">
    <span>{{ $product->category }}</span>
    <h1>{{ $product->product_name }}</h1>
    <p>{{ $product->description }}</p>
  </div>

  <!-- Product Configuration -->
  <div class="product-configuration">



    <!-- Cable Configuration -->
    <div class="cable-config">
      <span>Cable configuration</span>

      <div class="cable-choose">
        <button>Straight</button>
        <button>Coiled</button>
        <button>Long-coiled</button>
      </div>

      <a href="#">How to configurate your headphones</a>
    </div>
  </div>
  <div>
  <a href="{{ url('/view3D')}}/{{ $product->product_id }} " class="cart-btn">3D View</a>
  </div>
  <!-- Product Pricing -->
  <div class="product-price">
    <span>Rs. {{ $product->price }}</span>
    <a href="{{ url('/shipping') }}" class="cart-btn">Add to Shipping</a>


  </div>

</div>
</main>


@endsection


