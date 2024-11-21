<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('admin.all-tags', compact('tags'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['openModal' => true]);
        }

        Tag::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Tag Added Successfully'
        ]);
    }

    public function delete(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Tag Deleted Successfully'
        ]);
    }
}
