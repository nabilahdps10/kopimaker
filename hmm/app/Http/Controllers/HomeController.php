<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application landing page.
     */
    public function index()
    {
        $info = config('purwokerto');
        $categories = config('menu.categories');
        $allMenu = config('menu.items');
        
        // Filter popular / best seller items for the homepage showcase
        $popularItems = array_filter($allMenu, function ($item) {
            return !empty($item['is_popular']);
        });

        // Limit to 6 items for clean hero showcase
        $featuredItems = array_slice($popularItems, 0, 6);

        return view('pages.home', [
            'info' => $info,
            'categories' => $categories,
            'featuredItems' => $featuredItems,
            'gallery' => $info['gallery'],
            'reviews' => $info['reviews'],
            'facilities' => $info['facilities'],
        ]);
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $info = config('purwokerto');
        return view('pages.about', [
            'info' => $info,
            'facilities' => $info['facilities'],
        ]);
    }
}
