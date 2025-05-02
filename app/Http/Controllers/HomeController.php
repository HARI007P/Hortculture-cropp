<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        // Get the first 3 crops, markets, and storages for display
        $crops = $this->getItems('crops.json', 4);
        $markets = $this->getItems('markets.json', 4);
        $storages = $this->getItems('storages.json', 4);

        return view('home', compact('crops', 'markets', 'storages'));
    }

    private function getItems($filename, $limit)
    {
        $json = File::get(database_path('data/' . $filename));
        $items = json_decode($json, true);
        return array_slice($items, 0, $limit);  // Get only the first $limit items
    }
}

