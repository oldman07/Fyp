
@extends('layouts.frontend.main')

@section('main-section')

<h1>Visual Search Results</h1>
<ul>
@foreach($nearest_neighbors as $neighbor)
    <div>
        <h3>{{ $neighbor->product_name }}</h3>
        <p>Category: {{ $neighbor->category }}</p>
        <div class="img img1 ">
        <img class='visual-img-size' src="{{ asset('storage/uploads/images/' . $neighbor->product_image) }}" alt="Product Image">
        </div>
    </div>
@endforeach
</ul>

@endsection


