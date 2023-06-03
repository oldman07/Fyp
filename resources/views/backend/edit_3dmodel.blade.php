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
    <div class='styling-abubakr'>
        <h1>Upload glTF Model</h1>


        <form action="/upload-gltf" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="model">Model:</label>
    <br>
    <input type="file" name="model" id="model" required accept=".glb">
    <br>
    <br>
    <select name="type" id="type" required>
    <option value="360">360 Animation</option>
    <option value="cenematic">Cinematics </option>
    </select>
    <br>
    <br>
    <div class='process-video'>
        <x-primary-button class="ml-4">
            {{ __('Upload') }}
        </x-primary-button>
    </div>
</form>

        <!-- <form action="/upload-gltf" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="model">Model:</label>
    <br>
    <input type="file" name="model" id="model" required accept=".glb">
    <br>
    <br>
    
    <div class='process-video'>
        <x-primary-button class="ml-4">
            {{ __('Upload') }}
        </x-primary-button>
    </div>
</form> -->



        <!-- <form action="/upload-gltf" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="model">Model:</label>
            <br>
            <input type="file" name="model" id="model" required>
            <br>
            <br>
            <div class='process-video'>
                <x-primary-button class="ml-4">
                {{ __('Upload') }}
            </x-primary-button>
            </div>
        </form> -->
        <div class="video-container">
    <h2>Here is a quick demo how your Render will look like</h2>
    <video width="560" height="315" controls>
        <source src="{{ asset('storage/uploads/360video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
    </div>
    </div>
   

</x-app-layout>





