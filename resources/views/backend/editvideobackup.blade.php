<!-- <x-app-layout>
    <div class="form-styling">
        <div>
            <form action="{{ url('/process-video') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-input-label for="user_speed" :value="__(' Speed')" />
                    <x-text-input id="user_speed" class="block mt-1 w-full" type="number" name="user_speed" :value="old('user_speed')" required autofocus />
                    <x-input-error :messages="$errors->get('User Speed')" class="mt-2" />
                </div>

                <label for="user_audio_clip">Audio Clip:</label>
                <br>
                <input type="file" name="user_audio_clip" id="user_audio_clip">
                <br>
            </div> 

            <div>
                <label >Video 1</label>
                <br>
                <input type="file" name="video1" id="video1" required>
            </div>

            <div>
                <label >Video 2</label>
                <br>
                <input type="file" name="video2" id="video2" required>
            </div>

            <div id="transition-input" style="display: none;">
                <x-input-label for="transition" :value="__(' Transition')" />
                <x-text-input id="transition" class="block mt-1 w-full" type="text" name="transition" :value="old('transition')" autofocus />
                <x-input-error :messages="$errors->get('Transition')" class="mt-2" />
            </div>

            <div>
    <x-input-label for="text1_input" :value="__('Text 1')" />
    <x-text-input id="text1_input" class="block mt-1 w-full" type="text" name="text1_input" :value="old('text1_input')" required autofocus />
    <x-input-error :messages="$errors->get('Text 1')" class="mt-2" />
</div>

<div>
    <x-input-label for="text2_input" :value="__('Text 2')" />
    <x-text-input id="text2_input" class="block mt-1 w-full" type="text" name="text2_input" :value="old('text2_input')" required autofocus />
    <x-input-error :messages="$errors->get('Text 2')" class="mt-2" />
</div>

            <br>
            <div class='process-video'>
                <x-primary-button class="ml-4">
                    {{ __('Process Video') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>

<script type="text/javascript">
    document.getElementById('video2').addEventListener('input', function() {
    // Check if the second video input field has a value
    if (this.value) {
        // Display the transition input field
        document.getElementById('transition-input').style.display = 'block';
    } else {
        // Hide the transition input field
        document.getElementById('transition-input').style.display = 'none';
    }
});

</script> -->





workin but withour video 2 condition
<x-app-layout>
    <div class="form-styling">
        <div>
    <form action="{{ url('/process-video') }}" method="post" enctype="multipart/form-data">
        @csrf
    

        <div>
        <x-input-label for="user_speed" :value="__(' Speed')" />
        <x-text-input id="user_speed" class="block mt-1 w-full" type="number" name="user_speed" :value="old('user_speed')" required autofocus />
        <x-input-error :messages="$errors->get('User Speed')" class="mt-2" />
    </div>

        <label for="user_audio_clip">Audio Clip:</label>
        <br>
        
        
        <input type="file" name="user_audio_clip" id="user_audio_clip">
        <br>
        </div> 

     <div>
        <label >Video 1</label>
        <br>
        <input type="file" name="video1" id="video1" required>
        </div>
        <div>
        <label >Video 2</label>
        <br>
        <input type="file" name="video2" id="video2" required>
        </div>
       
            <br>
            <div class='process-video'>
            <x-primary-button class="ml-4">
            {{ __('Process Video') }}
        </x-primary-button>
        </div>
         </form>
        </div>
    </div>
    </x-app-layout>  




















{{-- working code
        <form action="{{ url('/process-video') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Video paths -->
        <label for="video1">Video 1:</label>
        <input type="file" name="video1" id="video1" required>
        <br>
        <label for="video2">Video 2:</label>
        <input type="file" name="video2" id="video2" required>
        <br>
        <!-- User text -->
        <label for="user_text">User Text:</label>
        <input type="text" name="user_text" id="user_text">
        <br>
        <!-- User crop values -->
        <label for="user_crop_values[]">Crop Values (x1, y1, x2, y2):</label>
        <input type="number" name="user_crop_values[]" id="user_crop_values[]" min="0" step="1" required>
        <input type="number" name="user_crop_values[]" id="user_crop_values[]" min="0" step="1" required>
        <input type="number" name="user_crop_values[]" id="user_crop_values[]" min="0" step="1" required>
        <input type="number" name="user_crop_values[]" id="user_crop_values[]" min="0" step="1" required>
        <br>
        <!-- User speed -->
        <label for="user_speed">Speed:</label>
        <input type="number" name="user_speed" id="user_speed" min="0.1" step="0.1" required>
        <br>
        <!-- User audio clip -->
        <label for="user_audio_clip">Audio Clip:</label>
        <input type="file" name="user_audio_clip" id="user_audio_clip">
        <br>
        <input type="submit" value="Process Video">
    </form> --}}





    {{-- #flask code --}}
    {{-- <form method="POST" action="http://127.0.0.1:5000/" enctype="multipart/form-data">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="speed" :value="__('Speed')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="speed" :value="old('speed')" required autofocus />
            <x-input-error :messages="$errors->get('Product Name')" class="mt-2" />
        </div>

        {{-- Video upload --}}
        {{-- <div class="mt-4">
            <x-input-label for="Video" :value="__('Video')" />
            <x-text-input id="product_video" class="block mt-1 w-full" type="file" name="file" :value="old('product_video')" required />
            <x-input-error :messages="$errors->get('product_video')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Add Product') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Display video -->
    @if(isset($video_url))
    <video controls>
        <source src="{{ $video_url }}" type="video/mp4">
    </video>
    @endif --}}


working only for 2 fields
    <!-- <x-app-layout>
    <div class="form-styling">
        <div>
            <form action="{{ url('/process-video') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="user_audio_clip">Audio Clip:</label>
                    <input type="file" name="user_audio_clip" id="user_audio_clip">
                </div>
                <div>
                    <label>Video</label>
                    <input type="file" name="video" id="video" required>
                </div>
                <div>
                    <input type="submit" value="Process Video">
                </div>
            </form>
        </div>
    </div>
</x-app-layout> -->






<!-- edit 3D model

{{--
<form action="{{ route('processModel') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="model">Upload 3D Model:</label>
    <input type="file" name="model" required>

    <label for="r">Red (0-255):</label>
    <input type="number" name="r" min="0" max="255" required>

    <label for="g">Green (0-255):</label>
    <input type="number" name="g" min="0" max="255" required>

    <label for="b">Blue (0-255):</label>
    <input type="number" name="b" min="0" max="255" required>

    <button type="submit">Submit</button>
</form>  --}}


-->


<!-- 3D form  -->

<!-- <h1>Upload glTF Model (GLB Format)</h1>
<form action="/upload-gltf" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="model">Model:</label>
    <input type="file" name="model" id="model" required>
    <br>
    <button type="submit">Upload</button>
</form> -->

<!-- <h1>Upload glTF Model (GLB Format)</h1>
<form action="/upload-gltf" method="POST" enctype="multipart/form-data">
    @csrf
    <button type="submit">Upload</button>
</form> -->