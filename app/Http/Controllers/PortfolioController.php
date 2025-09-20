<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

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

    // Show the reorganize page
    public function reorganize()
    {
        $portfolios = Portfolio::orderBy('order_column')->get();
        return view('admin.reorganize-portfolio', compact('portfolios'));
    }

    // Save the new order from drag-and-drop
    public function saveReorder()
    {
        $order = request('order');
        if ($order) {
            $ids = explode(',', $order);
            foreach ($ids as $index => $id) {
                Portfolio::where('id', $id)->update(['order_column' => $index + 1]);
            }
        }
        return redirect()->route('all-portfolio')->with([
            'status' => 'success',
            'message' => 'Portfolio order updated successfully',
        ]);
    }
}
