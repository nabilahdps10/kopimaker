<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display the Purwokerto branch information and map.
     */
    public function index()
    {
        $info = config('purwokerto');

        return view('pages.location', [
            'info' => $info,
            'location' => $info['location'],
            'hours' => $info['opening_hours'],
            'facilities' => $info['facilities'],
            'gallery' => $info['gallery'],
        ]);
    }
}
