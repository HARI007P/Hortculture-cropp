<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class MarketController extends Controller
{
    public function index()
    {
        $json = File::get(database_path('data/markets.json'));
        $markets = json_decode($json, true);
        return view('markets.index', compact('markets'));
    }

    public function show($id)
    {
        // Load basic market data
        $json = File::get(database_path('data/markets.json'));
        $markets = json_decode($json, true);

        // Load detailed market data
        $detailsJson = File::get(database_path('data/market_details.json'));
        $marketDetails = json_decode($detailsJson, true);

        // Find the market by ID
        $market = collect($markets)->firstWhere('id', $id);
        $details = collect($marketDetails)->firstWhere('id', $id);

        if (!$market || !$details) {
            abort(404, 'Market not found');
        }

        // Merge the market data and details
        $market = array_merge($market, $details);

        return view('markets.show', compact('market'));
    }
}
