<?php

namespace App\Http\Controllers;

use App\Models\ImageMetadata;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function All()
    {
        $portfolios = Portfolio::all();
        return view('admin.all-portfolio', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.add-portfolio');
    }

    public function view(Portfolio $portfolio)
    {
        return view('admin.view-portfolio', compact('portfolio'));
    }

    public function delete(Portfolio $portfolio)
    {
        $portfolio->clearMediaCollection('cover');
        $portfolio->clearMediaCollection('preview');
        $portfolio->clearMediaCollection('thumbnail');
        $portfolio->delete();
        return redirect()->route('all-portfolio')->with([
            'status' => 'success',
            'message' => 'Portfolio deleted successfully',
        ]);
    }

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
            $path = $image->storeAs(null, $imageName, 'upload');

            ImageMetadata::create([
                'path' => $path,
                'is_used' => false
            ]);

            /** @var \Illuminate\Filesystem\FilesystemManager $disk */
            $disk = Storage::disk('upload');
            $url = $disk->url($path);
            return response()->json(['location' => $url], 200);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }
}
