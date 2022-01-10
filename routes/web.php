<?php

use App\Http\Controllers\BlogController;
use App\Models\blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', [BlogController::class,'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Izsa Zafira",
        "email" => "izsazfr@gmail.com",
        "umur" => "23",
        "image" => "1.jpg"
    ]
);
});

//single route
Route::get('post/{slug}', [BlogController::class,'show']);
