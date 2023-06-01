<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Http\JsonResponse;

class VideoController extends Controller
{
public function processVideo(Request $request)
{
    $request->validate([
        'video1' => 'required|mimes:mp4',
        'video2' => 'required|mimes:mp4',
        'user_speed' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'user_audio_clip' => 'nullable|mimes:mp3',
    ]);

    $video1 = $request->file('video1')->store('videos');
$video2 = $request->file('video2')->store('videos');
$finalvideo1 = 'D:\\basit-fyp\\fyp_code\\fyp\\storage\\app\\' . $video1;
// echo $finalvideo1;
// D:\basit-fyp\fyp_code\fyp\storage\app\public\uploads\images
$finalvideo2 = 'D:\\basit-fyp\\fyp_code\\fyp\\storage\\app\\' . $video2;
$user_speed = $request->input('user_speed');
$audio_clip = $request->file('user_audio_clip') ? $request->file('user_audio_clip')->store('audio') : '';
$finalaudio = 'D:\\basit-fyp\\fyp_code\\fyp\\storage\\app\\' . $audio_clip;
$output_video = 'D:\\basit-fyp\\fyp_code\\fyp\\public\\output_video.mp4';

$text1_input = $request->input('text1_input');
$text2_input = $request->input('text2_input');

$python_executable = 'D:\basit-fyp\Python\python.exe';
$python_script = 'D:\\basit-fyp\\fyp_code\\fyp\\resources\\scripts\\video_edit.py';
$command = "$python_executable $python_script \"$finalvideo1\" \"$finalvideo2\" \"$user_speed\" \"$finalaudio\" \"$text1_input\" \"$text2_input\"";
echo $command;
set_time_limit(300); // Set maximum execution time to 300 seconds

    $output = shell_exec($command);
    
    if ($output === null) {
        // Handle the error case, e.g., throw an exception or return an error response
        return response()->json(['error' => 'An error occurred while processing the video.'], 500);
    }

    return response()->download($output_video);
}

    // 2 fields working
    // public function processVideo(Request $request)
    // {
    //     $request->validate([
    //         'video' => 'required|mimes:mp4',
    //         'user_audio_clip' => 'nullable|mimes:mp3',
    //     ]);
    
    //     $video = $request->file('video')->store('videos');
    //     $finalvideo = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\storage\\app\\' . $video;
    //     $audio_clip = $request->file('user_audio_clip') ? $request->file('user_audio_clip')->store('audio') : '';
    //     $finalaudio = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\storage\\app\\' . $audio_clip;
    //     $output_video = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4';
    
    //     $python_executable = 'D:\basit-fyp\Python\python.exe';
    //     $python_script = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\resources\\scripts\\video_edit.py';
    //     $command = "$python_executable $python_script \"$finalvideo\" \"$finalaudio\"";
    
    //     $output = shell_exec($command);
    
    //     if ($output === null) {
    //         // Handle the error case, e.g., throw an exception or return an error response
    //         return response()->json(['error' => 'An error occurred while processing the video.'], 500);
    //     }
    
    //     return response()->download($output_video);
    // }
    


    // public function processVideo(Request $request)
    // {
    //     $request->validate([
    //         'video1' => 'required|mimes:mp4',
    //         'video2' => 'required|mimes:mp4',
    //         'user_audio_clip' => 'nullable|mimes:mp3',
    //     ]);

    //     $video1 = $request->file('video1')->store('videos');
    //     $finalvideo1 = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\storage\\app\\'.$video1 ;
    //     $video2 = $request->file('video2')->store('videos');
    //     $finalvideo2 = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\storage\\app\\'.$video2 ;
    //     $audio_clip = $request->file('user_audio_clip') ? $request->file('user_audio_clip')->store('audio') : '';
    //     $finalaudio = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\storage\\app\\'.$audio_clip ;
    //     $text = $request->input('user_text');
    //     $crop_values = implode(',', $request->input('user_crop_values'));
    //     $speed = $request->input('user_speed');
    //     $output_video = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\storage\\app\\';

    //     $python_executable = 'D:\basit-fyp\Python\python.exe';
    //     $python_script = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\resources\\scripts\\video_edit.py';
    //     $command = [
    //         $python_executable,
    //         $python_script,
    //         $finalvideo1,
    //         $finalvideo2,
    //         $crop_values,
    //         $speed,
    //         $finalaudio,
    //         $text,
    //         $output_video
    //     ];

    //     $process = new Process($command);
    //     $process->run();

    //     // Check if the script executed successfully
    //     if (!$process->isSuccessful()) {
    //         throw new ProcessFailedException($process);
    //     }

    //     return response()->download($output_video);
    // }

    // working code without flask
    // public function processVideo(Request $request)
    // {
    //     $request->validate([
    //         'video1' => 'required|file',
    //         'video2' => 'required|file',
    //         'user_text' => 'nullable|string',
    //         'user_crop_values' => 'required|array',
    //         'user_speed' => 'required|numeric',
    //         'user_audio_clip' => 'nullable|file',
    //     ]);

    //     $video1Path = $request->file('video1')->store('videos');
    //     $video2Path = $request->file('video2')->store('videos');
    //     $audioClipPath = $request->hasFile('user_audio_clip') ? $request->file('user_audio_clip')->store('audio_clips') : "";

    //     $userText = $request->input('user_text');
    //     $userCropValues = implode(',', $request->input('user_crop_values'));
    //     $userSpeed = $request->input('user_speed');

    //     $outputVideoPath = 'output_videos/' . uniqid() . '.mp4';

    //     $pythonScriptPath = 'D:\\codes\\online-shopping-fyp\\laravel\\resources\\scripts\\video_edit.py';

    //     $command = escapeshellcmd("python $pythonScriptPath $video1Path $video2Path $userCropValues $userSpeed $audioClipPath $userText $outputVideoPath");
    //     shell_exec($command);

    //     // Store the output video and perform any other required actions

    //     return redirect('/')->with('success', 'Video processed successfully');
    // }



}
