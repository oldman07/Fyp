@extends('layouts.frontend.main')

@section('main-section')


<main class="container">

<!-- Wrap the left-column with a new div and apply the 'column-container' class -->
<!-- <div class="column-container-individual">
    <div class="left-column">
         Image -->
        <!-- <div>
            <img data-image="red" class="active" src="{{ asset('storage/uploads/images/' . $product->product_image) }}" alt="">
            
            <video width="560" height="315" controls>
                <source src="{{ asset('storage/uploads/videos/' . $product->product_video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

        
</div> --> 


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

    <!-- Product Color -->
    <!-- <div class="product-color">
      <span>Color</span>

      <div class="color-choose">
        <div>
          <input data-image="red" type="radio" id="red" name="color" value="red" checked>
          <label for="red"><span></span></label>
        </div>
        <div>
          <input data-image="blue" type="radio" id="blue" name="color" value="blue">
          <label for="blue"><span></span></label>
        </div>
        <div>
          <input data-image="black" type="radio" id="black" name="color" value="black">
          <label for="black"><span></span></label>
        </div>
      </div>

    </div> -->

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
