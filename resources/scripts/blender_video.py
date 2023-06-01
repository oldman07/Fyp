import bpy
import os
import sys

model_path = sys.argv[sys.argv.index('--') + 1]
selected_option = sys.argv[sys.argv.index('--') + 2]

bpy.ops.wm.open_mainfile(filepath="D:\\basit-fyp\\blender\\test.blend")
bpy.ops.import_scene.gltf(filepath=model_path)

if selected_option == "360":
    # Code specific to the 360 option
    camera = bpy.data.objects['Camera']
    bpy.context.scene.camera = camera
elif selected_option == "cenematic":
    # Code specific to the Cinematics option
    imported_object = bpy.context.view_layer.objects.active
    empty_cinematics = bpy.data.objects['cenematic_empty']  # Update the empty object name here
    imported_object.parent = empty_cinematics
    
    camera = bpy.data.objects['Camera.001']
    bpy.context.scene.camera = camera

# Join the imported objects
bpy.ops.object.select_all(action='DESELECT')
for obj in bpy.data.objects:
    if obj.type == 'MESH' and obj.name != "meshplan":
        obj.select_set(True)

if not bpy.context.selected_objects:
    for obj in bpy.data.objects:
        if obj.type == 'MESH':
            obj.select_set(True)

if bpy.context.selected_objects:
    bpy.context.view_layer.objects.active = bpy.context.selected_objects[0]
    bpy.ops.object.join()

    # Scale down the joined object if its dimensions are greater than 1m
    max_dimension = max(bpy.context.view_layer.objects.active.dimensions)
    scale_factor = 1 / max_dimension if max_dimension > 1 else 1
    bpy.ops.transform.resize(value=(scale_factor, scale_factor, scale_factor))

    # Set the location of the joined object to (0, 0, 0)
    bpy.context.view_layer.objects.active.location.x = 0
    bpy.context.view_layer.objects.active.location.y = 0
    bpy.context.view_layer.objects.active.location.z = 0

# Set up render settings
bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
bpy.context.scene.render.ffmpeg.format = 'MPEG4'
bpy.context.scene.render.ffmpeg.codec = 'H264'
bpy.context.scene.render.filepath = "D:\\temp-upload-data\\video.mp4"

# Set the frame range
bpy.context.scene.frame_start = 1
bpy.context.scene.frame_end = 50

bpy.ops.render.render(animation=True)

bpy.ops.export_scene.gltf(filepath="D:\\temp-upload-data\\new.blend")



# import bpy
# import os
# import sys

# model_path = sys.argv[sys.argv.index('--') + 1]

# bpy.ops.wm.open_mainfile(filepath="D:\\basit-fyp\\blender\\test.blend")
# bpy.ops.import_scene.gltf(filepath=model_path)

# camera = bpy.data.objects['Camera']
# bpy.context.scene.camera = camera

# # Join the imported objects
# bpy.ops.object.select_all(action='DESELECT')
# for obj in bpy.data.objects:
#     if obj.type == 'MESH' and obj.name != "meshplan":
#         obj.select_set(True)

# if not bpy.context.selected_objects:
#     for obj in bpy.data.objects:
#         if obj.type == 'MESH':
#             obj.select_set(True)

# if bpy.context.selected_objects:
#     bpy.context.view_layer.objects.active = bpy.context.selected_objects[0]
#     bpy.ops.object.join()

#     # Scale down the joined object if its dimensions are greater than 1m
#     max_dimension = max(bpy.context.view_layer.objects.active.dimensions)
#     scale_factor = 1 / max_dimension if max_dimension > 1 else 1
#     bpy.ops.transform.resize(value=(scale_factor, scale_factor, scale_factor))

#     # Set the location of the joined object to (0, 0, 0)
#     bpy.context.view_layer.objects.active.location.x = 0
#     bpy.context.view_layer.objects.active.location.y = 0
#     bpy.context.view_layer.objects.active.location.z = 0

# # Set up render settings
# bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
# bpy.context.scene.render.ffmpeg.format = 'MPEG4'
# bpy.context.scene.render.ffmpeg.codec = 'H264'
# bpy.context.scene.render.filepath = "D:\\temp-upload-data\\video.mp4"

# # Set the frame range
# bpy.context.scene.frame_start = 1
# bpy.context.scene.frame_end = 50

# # Render the animation
# bpy.ops.render.render(animation=True)

# bpy.ops.export_scene.gltf(filepath="D:\\temp-upload-data\\new.blend")



















# # fyp presentation
# import bpy
# import os
# import sys

# model_path = sys.argv[sys.argv.index('--') + 1]


# bpy.ops.wm.open_mainfile(filepath="D:\\basit-fyp\\blender\\test.blend")
# bpy.ops.import_scene.gltf(filepath=model_path)

# camera = bpy.data.objects['Camera']
# bpy.context.scene.camera = camera

# # Set up render settings
# bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
# bpy.context.scene.render.ffmpeg.format = 'MPEG4'
# bpy.context.scene.render.ffmpeg.codec = 'H264'
# bpy.context.scene.render.filepath = "D:\\temp-upload-data\\video.mp4"

# # Set the frame range
# bpy.context.scene.frame_start = 1
# bpy.context.scene.frame_end = 50

# # Render the animation
# bpy.ops.render.render(animation=True)

# bpy.ops.export_scene.gltf(filepath="D:\\temp-upload-data\\new.blend")















# import bpy
# import os
# import sys

# def import_model(filepath):
#     ext = os.path.splitext(filepath)[1].lower()
#     if ext == ".fbx":
#         bpy.ops.import_scene.fbx(filepath=filepath)
#     elif ext == ".obj":
#         bpy.ops.import_scene.obj(filepath=filepath)
#     elif ext == ".gltf" or ext == ".glb":
#         bpy.ops.import_scene.gltf(filepath=filepath)
#     else:
#         print("Unsupported file format:", ext)

# # Open the base Blender file
# bpy.ops.wm.open_mainfile(filepath="D:\\basit-fyp\\blender\\test.blend")

# # Import the model
# model_path = sys.argv[-1]
# import_model(model_path)

# # Set up the camera and render settings
# bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
# bpy.context.scene.render.ffmpeg.format = 'MPEG4'
# bpy.context.scene.render.ffmpeg.codec = 'H264'
# bpy.context.scene.render.filepath = "D:\\blender\\video.mp4"

# # Set the frame range for the animation
# bpy.context.scene.frame_start = 1
# bpy.context.scene.frame_end = 30

# # Render the animation
# bpy.ops.render.render(animation=True)





# import bpy
# import os
# import sys

# bpy.ops.wm.open_mainfile(filepath="D:\\basit-fyp\\blender\\test.blend")

# model_path = sys.argv[-1]
# bpy.ops.import_scene.gltf(filepath=model_path)


# camera = bpy.data.objects['Camera']
# bpy.context.scene.camera = camera

# # Set up render settings
# bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
# bpy.context.scene.render.ffmpeg.format = 'MPEG4'
# bpy.context.scene.render.ffmpeg.codec = 'H264'
# bpy.context.scene.render.filepath = "D:\\blender\\video.mp4"

# # Set the frame range
# bpy.context.scene.frame_start = 1
# bpy.context.scene.frame_end = 50

# # Render the animation
# bpy.ops.render.render(animation=True)

# bpy.ops.export_scene.gltf(filepath="D:\\blender\\new1")









# working code for gtl
# import bpy
# import os

# bpy.ops.wm.open_mainfile(filepath="D:\\blender\\test.blend")

# bpy.ops.import_scene.gltf(filepath="D:\\blender\\tent.glb")

# # Remove existing materials
# obj = bpy.context.selected_objects[0]
# obj.data.materials.clear()

# # Load the image as a texture
# image_path = "D:\\blender\\texture.jpeg"
# texture_image = bpy.data.images.load(image_path)
# texture = bpy.data.textures.new('ImageTexture', type='IMAGE')
# texture.image = texture_image

# # Create a material for the object
# material = bpy.data.materials.new("ObjectMaterial")
# material.use_nodes = True
# bsdf_node = material.node_tree.nodes["Principled BSDF"]
# tex_image_node = material.node_tree.nodes.new("ShaderNodeTexImage")
# tex_image_node.image = texture_image
# material.node_tree.links.new(bsdf_node.inputs["Base Color"], tex_image_node.outputs["Color"])

# # Assign the material to the object
# obj.data.materials.append(material)

# camera = bpy.data.objects['Camera']
# bpy.context.scene.camera = camera

# # Set up render settings
# bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
# bpy.context.scene.render.ffmpeg.format = 'MPEG4'
# bpy.context.scene.render.ffmpeg.codec = 'H264'
# bpy.context.scene.render.filepath = "D:\\blender\\video.mp4"

# # Set the frame range
# bpy.context.scene.frame_start = 1
# bpy.context.scene.frame_end = 100

# # Render the animation
# bpy.ops.render.render(animation=True)

# bpy.ops.export_scene.gltf(filepath="D:\\blender\\new.blend")












# obj working code
# import bpy
# import os

# bpy.ops.wm.open_mainfile(filepath="D:\\blender\\test.blend")

# bpy.ops.import_scene.obj(filepath="D:\\blender\\tent.obj")

# # Remove existing materials
# obj = bpy.context.selected_objects[0]
# obj.data.materials.clear()

# # Load the image as a texture
# image_path = "D:\\blender\\texture.jpeg"
# texture_image = bpy.data.images.load(image_path)
# texture = bpy.data.textures.new('ImageTexture', type='IMAGE')
# texture.image = texture_image

# # Create a material for the object
# material = bpy.data.materials.new("ObjectMaterial")
# material.use_nodes = True
# bsdf_node = material.node_tree.nodes["Principled BSDF"]
# tex_image_node = material.node_tree.nodes.new("ShaderNodeTexImage")
# tex_image_node.image = texture_image
# material.node_tree.links.new(bsdf_node.inputs["Base Color"], tex_image_node.outputs["Color"])

# # Assign the material to the object
# obj.data.materials.append(material)

# camera = bpy.data.objects['Camera']
# bpy.context.scene.camera = camera

# # Set up render settings
# bpy.context.scene.render.image_settings.file_format = 'FFMPEG'
# bpy.context.scene.render.ffmpeg.format = 'MPEG4'
# bpy.context.scene.render.ffmpeg.codec = 'H264'
# bpy.context.scene.render.filepath = "D:\\blender\\video.mp4"

# # Set the frame range
# bpy.context.scene.frame_start = 1
# bpy.context.scene.frame_end = 100

# # Render the animation
# bpy.ops.render.render(animation=True)

# bpy.ops.wm.save_mainfile(filepath="D:\\blender\\new.blend")









