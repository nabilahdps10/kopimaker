<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display the full menu list with optional category & search filter.
     */
    public function index(Request $request)
    {
        $info = config('purwokerto');
        $categories = config('menu.categories');
        $allItems = config('menu.items');

        $activeCategory = $request->query('category', 'all');
        $searchQuery = trim($request->query('q', ''));

        $items = $allItems;

        // Filter by category
        if ($activeCategory !== 'all') {
            $items = array_filter($items, function ($item) use ($activeCategory) {
                return $item['category'] === $activeCategory;
            });
        }

        // Filter by search query
        if (!empty($searchQuery)) {
            $items = array_filter($items, function ($item) use ($searchQuery) {
                return stripos($item['name'], $searchQuery) !== false ||
                       stripos($item['description'], $searchQuery) !== false ||
                       stripos($item['category_name'], $searchQuery) !== false;
            });
        }

        return view('pages.menu', [
            'info' => $info,
            'categories' => $categories,
            'items' => $items,
            'activeCategory' => $activeCategory,
            'searchQuery' => $searchQuery,
            'totalItems' => count($items),
        ]);
    }
}
