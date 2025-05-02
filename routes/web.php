<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\StorageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Dynamic home page using HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {
    return view('auth.login'); // Assuming login.blade.php view exists in resources/views/auth
})->name('login');

Route::get('/register', function () {
    return view('auth.register'); // Assuming register.blade.php view exists in resources/views/auth
})->name('register');

// ✅ List pages
Route::get('/crops', [CropController::class, 'index'])->name('crops.index');
Route::get('/markets', [MarketController::class, 'index'])->name('markets.index');
Route::get('/storages', [StorageController::class, 'index'])->name('storages.index');

// 🆕 Optional: Add detail routes for viewing individual crop, market, storage
Route::get('/crops/{id}', [CropController::class, 'show'])->name('crops.show');
Route::get('/markets/{id}', [MarketController::class, 'show'])->name('markets.show');
Route::get('/storages/{id}', [StorageController::class, 'show'])->name('storages.show');

Route::get('/change-password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'showChangeForm'])->middleware('auth');
Route::post('/change-password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'changePassword'])->middleware('auth');
