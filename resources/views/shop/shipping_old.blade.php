
@extends('layouts.frontend.main')

@section('main-section')
<body-visual>
<form method="POST" action="{{ url('/') }}/shipping-confirm">
  @csrf
  
  <h1>Shipping Form</h1>

<div class="form-styling">
  <div>
    <label for="name">Name</label>
    <input id="name" type="text" name="name" class="input-field" :value="old('name')" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
  </div>

  <div>
    <label for="email">Email</label>
    <input id="email" type="email" name="email" class="input-field" :value="old('email')" required />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
  </div>

  <div>
    <label for="address">Address</label>
    <input id="address" type="text" name="address" class="input-field" />
    <x-input-error :messages="$errors->get('address')" class="mt-2" />
  </div>

  <div>
    <label for="phone_number">Phone Number</label>
    <input id="phone_number" type="text" name="phone_number" class="input-field" required />
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
  </div>

  <div class="flex items-center justify-end mt-4">
    <a href="{{ route('home') }}" class="submit-btn">Go to Home</a>
    <button type="submit" class="submit-btn shipping">Shipping</button>
  </div>
  </div>
</form>
</body-visual>

@endsection
