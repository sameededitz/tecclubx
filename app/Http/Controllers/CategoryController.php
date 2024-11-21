<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.all-categories', compact('categories'));
    }

    public function save(Request $request)
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
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Category Added Successfully'
        ]);
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Category Deleted Successfully'
        ]);
    }
}
