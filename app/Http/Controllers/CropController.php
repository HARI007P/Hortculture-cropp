<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class CropController extends Controller
{
    public function index()
    {
        $json = File::get(database_path('data/crops.json'));
        $crops = json_decode($json, true);
        return view('crops', compact('crops'));
    }

    public function show($id)
    {
        $json = File::get(database_path('data/crop_details.json'));
        $details = json_decode($json, true);
        $crop = collect($details)->firstWhere('id', (int) $id);

        if (!$crop) {
            abort(404, 'Crop not found');
        }

        return view('crop-detail', compact('crop'));
    }
}
