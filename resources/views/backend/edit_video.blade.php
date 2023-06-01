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
    <input type="file" name="user_audio_clip" id="user_audio_clip" accept="audio/mp3">
    <br>
</div> 

<div>
    <label>Video 1</label>
    <br>
    <input type="file" name="video1" id="video1" required accept="video/mp4">
</div>

<div id="text1-input" style="display: none;">
    <x-input-label for="text1_input" :value="__('Text 1')" />
    <x-text-input id="text1_input" class="block mt-1 w-full" type="text" name="text1_input" :value="old('text1_input')" required autofocus />
    <x-input-error :messages="$errors->get('Text 1')" class="mt-2" />
</div>

<div>
    <label>Video 2</label>
    <br>
    <input type="file" name="video2" id="video2" required accept="video/mp4">
</div>

<div id="text2-input" style="display: none;">
    <x-input-label for="text2_input" :value="__('Text 2')" />
    <x-text-input id="text2_input" class="block mt-1 w-full" type="text" name="text2_input" :value="old('text2_input')" required autofocus />
    <x-input-error :messages="$errors->get('Text 2')" class="mt-2" />
</div>

<!-- <div id="transition-input" style="display: none;">
    <x-input-label for="transition" :value="__(' Transition')" />
    <x-text-input id="transition" class="block mt-1 w-full" type="text" name="transition" :value="old('transition')" autofocus />
    <x-input-error :messages="$errors->get('Transition')" class="mt-2" />
</div> -->

<br>
<div class='process-video'>
    <x-primary-button class="ml-4">
        {{ __('Process Video') }}
    </x-primary-button>
</div>
</form>

            <!-- <form action="{{ url('/process-video') }}" method="post" enctype="multipart/form-data">
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
                <label>Video 1</label>
                <br>
                <input type="file" name="video1" id="video1" required>
            </div>

            <div id="text1-input" style="display: none;">
                <x-input-label for="text1_input" :value="__('Text 1')" />
                <x-text-input id="text1_input" class="block mt-1 w-full" type="text" name="text1_input" :value="old('text1_input')" required autofocus />
                <x-input-error :messages="$errors->get('Text 1')" class="mt-2" />
            </div>

            <div>
                <label>Video 2</label>
                <br>
                <input type="file" name="video2" id="video2" required>
            </div>

            <div id="text2-input" style="display: none;">
                <x-input-label for="text2_input" :value="__('Text 2')" />
                <x-text-input id="text2_input" class="block mt-1 w-full" type="text" name="text2_input" :value="old('text2_input')" required autofocus />
                <x-input-error :messages="$errors->get('Text 2')" class="mt-2" />
            </div>

            <div id="transition-input" style="display: none;">
                <x-input-label for="transition" :value="__(' Transition')" />
                <x-text-input id="transition" class="block mt-1 w-full" type="text" name="transition" :value="old('transition')" autofocus />
                <x-input-error :messages="$errors->get('Transition')" class="mt-2" />
            </div>

            <br>
            <div class='process-video'>
                <x-primary-button class="ml-4">
                    {{ __('Process Video') }}
                </x-primary-button>
            </div>
        </form> -->
    </div>
</div>
</x-app-layout>

<script type="text/javascript">
    document.getElementById('video1').addEventListener('input', function() {
        if (this.value) {
            document.getElementById('text1-input').style.display = 'block';
        } else {
            document.getElementById('text1-input').style.display = 'none';
        }
    });

    document.getElementById('video2').addEventListener('input', function() {
        if (this.value) {
            document.getElementById('text2-input').style.display = 'block';
        } else {
            document.getElementById('text2-input').style.display = 'none';
        }
    });

    document.getElementById('video2').addEventListener('input', function() {
        if (this.value) {
            document.getElementById('transition-input').style.display = 'block';
        } else {
            document.getElementById('transition-input').style.display = 'none';
        }
    });
</script>



<!-- workin but withour video 2 condition -->
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
       
            <br>
            <div class='process-video'>
            <x-primary-button class="ml-4">
            {{ __('Process Video') }}
        </x-primary-button>
        </div>
         </form>
        </div>
    </div>
    </x-app-layout>   -->



 
 
