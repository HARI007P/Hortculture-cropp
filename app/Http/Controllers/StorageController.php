<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class StorageController extends Controller
{
    public function index()
    {
        $json = File::get(database_path('data/storages.json'));
        $storages = json_decode($json, true);
        return view('storages', compact('storages'));
    }
}
