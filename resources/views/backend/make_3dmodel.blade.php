{{-- @if (session('coloredModelUrl'))
    <div class="alert alert-info">
        Colored Model URL: {{ session('coloredModelUrl') }}
    </div>
@endif


@if (session('blenderPath') && session('outputName') && session('command'))
    <div class="alert alert-info">
        Blender Path: {{ session('blenderPath') }}<br>
        Output Name: {{ session('outputName') }}<br>
        Command: {{ session('command') }}
    </div>
@endif --}}



<x-app-layout>
    

<div class="form-styling">
    <h1>make model</h1>

    <form method="POST" action="{{ url('/') }}/product" enctype="multipart/form-data">
        @csrf
{{-- Image upload --}}
    <div class="mt-4">
        <x-input-label for="front_image" :value="__('Front Image')" />
        <x-text-input id="front_image" class="block mt-1 w-full" type="file" name="front_image" :value="old('front_image')" required />
        <x-input-error :messages="$errors->get('front_image')" class="mt-2" />

        {{-- Image upload --}}
    <div class="mt-4">
        <x-input-label for="back_image" :value="__('Back Image')" />
        <x-text-input id="back_image" class="block mt-1 w-full" type="file" name="back_image" :value="old('back_image')" required />
        <x-input-error :messages="$errors->get('back_image')" class="mt-2" />

        {{-- Image upload --}}
    <div class="mt-4">
        <x-input-label for="Image" :value="__('Image')" />
        <x-text-input id="product_image" class="block mt-1 w-full" type="file" name="product_image" :value="old('product_image')" required />
        <x-input-error :messages="$errors->get('product_image')" class="mt-2" />

        <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ml-4">
            {{ __('Make 3D Model') }}
        </x-primary-button>
    </div>
</div>
</form>
</x-app-layout>