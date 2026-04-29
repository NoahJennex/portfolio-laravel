<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return 'Hello Laravel';
});

Route::get('/', [PageController::class, 'home']);
