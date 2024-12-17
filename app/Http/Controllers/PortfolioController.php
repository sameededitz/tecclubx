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
}
