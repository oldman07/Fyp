
@extends('layouts.navigation')

@section('main-section')

<div class="wrapper">
    <section class="login-content">
       <div class="container">
          <div class="row align-items-center justify-content-center height-self-center">
             <div class="col-lg-8">
                <div class="card auth-card">
                   <div class="card-body p-0">
                      <div class="d-flex align-items-center auth-content">
                         <div class="col-lg-6 bg-primary content-left">
                            <div class="p-3">
                               <h2 class="mb-2 text-white">Sign In</h2>
                               <p>Login to stay connected.</p>
                               <form>
                                  <div class="row">
                                     <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                           <input class="floating-input form-control" type="email" placeholder=" ">
                                           <label>Email</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                           <input class="floating-input form-control" type="password" placeholder=" ">
                                           <label>Password</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="custom-control custom-checkbox mb-3">
                                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                                           <label class="custom-control-label control-label-1 text-white" for="customCheck1">Remember Me</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <a href="auth-recoverpw.html" class="text-white float-right">Forgot Password?</a>
                                     </div>
                                  </div>
                                  <button type="submit" class="btn btn-white">Sign In</button>
                                  <p class="mt-3">
                                     Create an Account <a href="auth-sign-up.html" class="text-white text-underline">Sign Up</a>
                                  </p>
                               </form>
                            </div>
                         </div>
                         <div class="col-lg-6 content-right">
                            <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    </div>

    @endsection

{{-- <x-app-layout>
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
</x-app-layout> --}}

{{-- <script type="text/javascript">
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
</script> --}}





