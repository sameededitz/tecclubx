<?php

namespace App\Http\Controllers;

use App\Models\SectionImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectionImagesController extends Controller
{
    public function index()
    {
        $sections = SectionImages::all();

        return view('admin.section-images', compact('sections'));
    }

    public function save(Request $request)
    {
        // dd($request->image);
        $validator = Validator::make($request->all(), [
            'section' => 'required|string|in:banner,about,slider,why_choose',
            'image' => 'required|image|max:20480|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['openModal' => true]);
        }

        $maxImagesPerSection = [
            'banner' => 1,
            'about' => 2,
            'slider' => 5,
            'why_choose' => 1,
        ];

        $section = $request->input('section');
        $existingImagesCount = SectionImages::where('section', $section)->count();
        $remainingImages = $maxImagesPerSection[$section] - $existingImagesCount;

        if ($remainingImages <= 0) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['image' => "The {$section} section can only have {$maxImagesPerSection[$section]} image(s). You can't upload any more images."])
                ->with(['openModal' => true]);
        }

        $sectionImage = new SectionImages();
        $sectionImage->section = $request->input('section');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $sectionImage->file_name = $image->getClientOriginalName();

            $sectionImage->clearMediaCollection('section_img');
            $sectionImage->addMedia($image)->toMediaCollection('section_img');
        }
        $sectionImage->save();

        return redirect()->back()->with([
            'success' => 'success',
            'message' => 'Section image saved successfully',
        ]);
    }

    public function delete(SectionImages $image)
    {
        $image->clearMediaCollection('section_img');
        $image->delete();

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Section image deleted successfully',
        ]);
    }
}
