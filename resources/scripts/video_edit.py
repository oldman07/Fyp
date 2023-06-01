import sys
from moviepy.editor import *
import moviepy.video.fx.all as vfx
import moviepy.config as cf
cf.IMAGEMAGICK_BINARY = r"D:\\softwares\\ImageMagick\\magick.exe"

video1_path = sys.argv[1]
video2_path = sys.argv[2]
user_speed = float(sys.argv[3])
user_audio_clip = sys.argv[4]
output_video_path = 'D:\\basit-fyp\\fyp_code\\fyp\\public\\output_video.mp4'
text1_input = sys.argv[5]
text2_input = sys.argv[6]


video1 = VideoFileClip(video1_path)
video2 = VideoFileClip(video2_path)

video1 = video1.fx(vfx.speedx, user_speed)
video2 = video2.fx(vfx.speedx, user_speed)

# Add text to the videos with user input
text1 = TextClip(text1_input, fontsize=24, color="white", print_cmd=True)
text2 = TextClip(text2_input, fontsize=24, color="white", print_cmd=True)

# Add padding to the text and make the background transparent
padding_width = 40
padding_height = 20
text1 = text1.on_color(size=(text1.w + padding_width, text1.h + padding_height),
                       color=(0, 0, 0), col_opacity=0).set_position(("right", "top")).set_duration(video1.duration)
text2 = text2.on_color(size=(text2.w + padding_width, text2.h + padding_height),
                       color=(0, 0, 0), col_opacity=0).set_position(("right", "top")).set_duration(video2.duration)

video1 = CompositeVideoClip([video1, text1])
video2 = CompositeVideoClip([video2, text2])

# Add a 1-second fade-in transition to the second video only
transition_duration = 3
video2 = video2.crossfadein(transition_duration)

concatenated_video = concatenate_videoclips([video1, video2], method="compose")

audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

if audio_clip:
    if audio_clip.duration > concatenated_video.duration:
        audio_clip = audio_clip.subclip(0, concatenated_video.duration)
    concatenated_video = concatenated_video.set_audio(audio_clip)

final_video = concatenated_video
final_video.write_videofile(output_video_path)










# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx
# import moviepy.config as cf
# cf.IMAGEMAGICK_BINARY = r"D:\\softwares\\ImageMagick\\magick.exe"

# video1_path = sys.argv[1]
# video2_path = sys.argv[2]
# user_speed = float(sys.argv[3])
# user_audio_clip = sys.argv[4]
# text1_input = sys.argv[5]
# text2_input = sys.argv[6]
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video1 = VideoFileClip(video1_path)
# video2 = VideoFileClip(video2_path)

# video1 = video1.fx(vfx.speedx, user_speed)
# video2 = video2.fx(vfx.speedx, user_speed)

# # Add text to the videos with user input
# text1 = TextClip(text1_input, fontsize=24, color="white", print_cmd=True)
# text2 = TextClip(text2_input, fontsize=24, color="white", print_cmd=True)

# # Add padding to the text and make the background transparent
# padding_width = 40
# padding_height = 20
# text1 = text1.on_color(size=(text1.w + padding_width, text1.h + padding_height),
#                        color=(0, 0, 0), col_opacity=0).set_position(("right", "top")).set_duration(video1.duration)
# text2 = text2.on_color(size=(text2.w + padding_width, text2.h + padding_height),
#                        color=(0, 0, 0), col_opacity=0).set_position(("right", "top")).set_duration(video2.duration)

# video1 = CompositeVideoClip([video1, text1])
# video2 = CompositeVideoClip([video2, text2])

# # Add a 1-second fade-in transition to the second video only
# transition_duration = 3
# video2 = video2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([video1, video2], method="compose")

# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)











# text added
# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx
# import moviepy.config as cf
# cf.IMAGEMAGICK_BINARY = r"D:\\softwares\\ImageMagick\\magick.exe"

# video1_path = sys.argv[1]
# video2_path = sys.argv[2]
# user_speed = float(sys.argv[3])
# user_audio_clip = sys.argv[4]
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video1 = VideoFileClip(video1_path)
# video2 = VideoFileClip(video2_path)

# video1 = video1.fx(vfx.speedx, user_speed)
# video2 = video2.fx(vfx.speedx, user_speed)

# # Add text to the videos
# text1 = TextClip("Text for Video 1", fontsize=24, color="white", print_cmd=True)
# text2 = TextClip("Text for Video 2", fontsize=24, color="white", print_cmd=True)

# # Add padding to the text and make the background transparent
# padding_width = 40
# padding_height = 20
# text1 = text1.on_color(size=(text1.w + padding_width, text1.h + padding_height),
#                        color=(0, 0, 0), col_opacity=0).set_position(("right", "top")).set_duration(video1.duration)
# text2 = text2.on_color(size=(text2.w + padding_width, text2.h + padding_height),
#                        color=(0, 0, 0), col_opacity=0).set_position(("right", "top")).set_duration(video2.duration)

# video1 = CompositeVideoClip([video1, text1])
# video2 = CompositeVideoClip([video2, text2])

# # Add a 1-second fade-in transition to the second video only
# transition_duration = 3
# video2 = video2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([video1, video2], method="compose")

# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)




# working good with fadein functionality
# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx
# import moviepy.config as cf
# cf.IMAGEMAGICK_BINARY = r"D:\\softwares\\ImageMagick\\magick.exe"


# video1_path = sys.argv[1]
# video2_path = sys.argv[2]
# user_speed = float(sys.argv[3])
# user_audio_clip = sys.argv[4]
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video1 = VideoFileClip(video1_path)
# video2 = VideoFileClip(video2_path)

# video1 = video1.fx(vfx.speedx, user_speed)
# video2 = video2.fx(vfx.speedx, user_speed)



# # Add a 1-second fade-in transition to the second video only
# transition_duration = 3
# video2 = video2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([video1, video2], method="compose")

# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)



















# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx

# video1_path = sys.argv[1]
# video2_path = sys.argv[2]
# user_speed = float(sys.argv[3])
# user_audio_clip = sys.argv[4]
# trim_start = float(sys.argv[5])
# trim_end = float(sys.argv[6])
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video1 = VideoFileClip(video1_path)
# video2 = VideoFileClip(video2_path)

# # Trim the second video based on the start and end trim times
# video2 = video2.subclip(trim_start, trim_end)

# video1 = video1.fx(vfx.speedx, user_speed)
# video2 = video2.fx(vfx.speedx, user_speed)

# # Add a 1-second fade-in transition to the second video only
# transition_duration = 3
# video1 = video1.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([video1, video2], method="compose")

# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)











# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx

# video1_path = sys.argv[1]
# video2_path = sys.argv[2]
# user_speed = float(sys.argv[3])
# user_audio_clip = sys.argv[4]
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video1 = VideoFileClip(video1_path)
# video2 = VideoFileClip(video2_path)

# video1 = video1.fx(vfx.speedx, user_speed)
# video2 = video2.fx(vfx.speedx, user_speed)

# # Add a 1-second crossfade transition
# transition_duration = 3
# video1 = video1.crossfadeout(transition_duration)
# video2 = video2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([video1, video2])

# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)































# working code 
# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx

# video1_path = sys.argv[1]
# video2_path = sys.argv[2]
# user_speed = float(sys.argv[3])
# user_audio_clip = sys.argv[4]
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video1 = VideoFileClip(video1_path)
# video2 = VideoFileClip(video2_path)

# video1 = video1.fx(vfx.speedx, user_speed)
# video2 = video2.fx(vfx.speedx, user_speed)

# concatenated_video = concatenate_videoclips([video1, video2])

# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)




# working foor 2 fields
# import sys
# from moviepy.editor import *

# video_path = sys.argv[1]
# user_audio_clip = sys.argv[2]
# output_video_path = 'D:\\basit-fyp\\fyp_code\\online-shopping-fyp\\laravel\\public\\output_video.mp4'

# video = VideoFileClip(video_path)
# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# if audio_clip:
#     if audio_clip.duration > video.duration:
#         audio_clip = audio_clip.subclip(0, video.duration)
#     video = video.set_audio(audio_clip)

# final_video = video
# final_video.write_videofile(output_video_path)





# import os
# import moviepy
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx
# import moviepy.config as cf
# cf.IMAGEMAGICK_BINARY = r"D:\\softwares\\ImageMagick\\magick.exe"



# import sys

# # Replace the os.environ lines with sys.argv
# video_paths = [sys.argv[1], sys.argv[2]]
# user_crop_values = tuple(map(int, sys.argv[3].split(',')))
# user_speed = float(sys.argv[4])
# user_audio_clip = sys.argv[5]
# user_text = sys.argv[6]
# output_video_path = 'D:\basit-fyp\fyp_code\online-shopping-fyp\laravel\public\output_video.mp4'

# crop_values = user_crop_values
# speed = user_speed
# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# clip1 = VideoFileClip(video_paths[0])
# clip2 = VideoFileClip(video_paths[1])

# if crop_values:
#     clip1 = clip1.crop(x1=crop_values[0], y1=crop_values[1], x2=crop_values[2], y2=crop_values[3])
#     clip2 = clip2.crop(x1=crop_values[0], y1=crop_values[1], x2=crop_values[2], y2=crop_values[3])

# clip1 = clip1.fx(vfx.speedx, speed)
# clip2 = clip2.fx(vfx.speedx, speed)

# transition_duration = 1
# clip1 = clip1.crossfadeout(transition_duration)
# clip2 = clip2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([clip1, clip2], method="compose")

# # Add title or text to the video
# title_text = user_text
# title_clip = TextClip(title_text, fontsize=50, color='white')
# title_clip = title_clip.set_position('center').set_duration(concatenated_video.duration)

# # Overlay the title clip on the concatenated video
# concatenated_video = CompositeVideoClip([concatenated_video, title_clip])
# print("Clip 1 dimensions:", clip1.size)
# print("Clip 2 dimensions:", clip2.size)

# print("Crop values:", crop_values)
# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(output_video_path)





#cmd working code
# import moviepy.config as cf
# cf.IMAGEMAGICK_BINARY = r"D:\software\ImageMagick\magick.exe"

# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx
# import moviepy.audio.fx.all as afx

# video_paths = [os.environ['VIDEO1_PATH'], os.environ['VIDEO2_PATH']]
# user_crop_values = tuple(map(int, os.environ['CROP_VALUES'].split(',')))
# user_speed = float(os.environ['SPEED'])
# user_audio_clip = os.environ['AUDIO_CLIP_PATH']
# user_text = os.environ['USER_TEXT']

# video_paths = [sys.argv[1], sys.argv[2]]
# user_crop_values = tuple(map(int, sys.argv[3].split(',')))
# user_speed = float(sys.argv[4])
# user_audio_clip = sys.argv[5]

# crop_values = user_crop_values
# speed = user_speed
# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# clip1 = VideoFileClip(video_paths[0])
# clip2 = VideoFileClip(video_paths[1])

# if crop_values:
#     clip1 = clip1.crop(x1=crop_values[0], y1=crop_values[1], x2=crop_values[2], y2=crop_values[3])
#     clip2 = clip2.crop(x1=crop_values[0], y1=crop_values[1], x2=crop_values[2], y2=crop_values[3])

# clip1 = clip1.fx(vfx.speedx, speed)
# clip2 = clip2.fx(vfx.speedx, speed)

# transition_duration = 1
# clip1 = clip1.crossfadeout(transition_duration)
# clip2 = clip2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([clip1, clip2], method="compose")

# # Add title or text to the video
# title_text = "Your Title Here"
# title_clip = TextClip(title_text, fontsize=50, color='white')
# title_clip = title_clip.set_position('center').set_duration(concatenated_video.duration)

# # Overlay the title clip on the concatenated video
# concatenated_video = CompositeVideoClip([concatenated_video, title_clip])

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(sys.argv[6])






#working code without text
# import sys
# from moviepy.editor import *
# import moviepy.video.fx.all as vfx

# video_paths = [sys.argv[1], sys.argv[2]]
# user_crop_values = tuple(map(int, sys.argv[3].split(',')))
# user_speed = float(sys.argv[4])
# user_audio_clip = sys.argv[5]

# crop_values = user_crop_values
# speed = user_speed
# audio_clip = AudioFileClip(user_audio_clip) if user_audio_clip != "" else None

# clip1 = VideoFileClip(video_paths[0])
# clip2 = VideoFileClip(video_paths[1])

# if crop_values:
#     clip1 = clip1.crop(x1=crop_values[0], y1=crop_values[1], x2=crop_values[2], y2=crop_values[3])
#     clip2 = clip2.crop(x1=crop_values[0], y1=crop_values[1], x2=crop_values[2], y2=crop_values[3])

# clip1 = clip1.fx(vfx.speedx, speed)
# clip2 = clip2.fx(vfx.speedx, speed)

# transition_duration = 1
# clip1 = clip1.crossfadeout(transition_duration)
# clip2 = clip2.crossfadein(transition_duration)

# concatenated_video = concatenate_videoclips([clip1, clip2], method="compose")

# if audio_clip:
#     if audio_clip.duration > concatenated_video.duration:
#         audio_clip = audio_clip.subclip(0, concatenated_video.duration)
#     concatenated_video = concatenated_video.set_audio(audio_clip)

# final_video = concatenated_video
# final_video.write_videofile(sys.argv[6])


