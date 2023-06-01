@extends('layouts.frontend.main')

@section('main-section')

<div class='visual-search-body form-styling' >
<form method="POST" action="{{ url('/') }}/visual-search" enctype="multipart/form-data">
  @csrf

  <body-visual>
    <div class="container-visual  ">
        <h1>Visual Search </h1>
        <form id="search-form-visual">
            <input id="image" type="file" class="form-control-visual" name="image" accept="image/*" required>
            <button type="submit" id="SearchButton-visual">Submit</button>
        </form>
    </div>
</body-visual>
  <!-- <div class="form-group">
    <h2 class="form-header">Visual Search</h2>
    
      <div class="col-md-6 offset-md-3">
        <label for="image" class="form-label">{{ __('Image') }}</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image" required>
            <label class="custom-file-label" for="image">Choose file</label>
          </div>
        </div>
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col-md-6 offset-md-3">
         <button type="submit" class="btn btn-primary btn-block">{{ __('Search') }}</button> -->
  
</form>

</div>


@endsection