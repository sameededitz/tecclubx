<?php

namespace App\Http\Controllers;

use App\Models\ImageMetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $validator = Validator::make($request->all(), [
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->all()
                ], 400);
            }

            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs(null, $imageName, 'images');

            ImageMetadata::create([
                'path' => $path,
                'is_used' => false
            ]);

            /** @var \Illuminate\Filesystem\FilesystemManager $disk */
            $disk = Storage::disk('images');
            $url = $disk->url($path);
            return response()->json(['location' => $url], 200);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }
    public function uploadEmail(Request $request)
    {
        if ($request->hasFile('file')) {
            $validator = Validator::make($request->all(), [
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->all()
                ], 400);
            }

            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs(null, $imageName, 'email');

            ImageMetadata::create([
                'path' => $path,
                'is_used' => true
            ]);

            /** @var \Illuminate\Filesystem\FilesystemManager $disk */
            $disk = Storage::disk('email');
            $url = $disk->url($path);
            return response()->json(['location' => $url], 200);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }
}
