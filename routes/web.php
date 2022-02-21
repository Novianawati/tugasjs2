<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbel']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbelandfriends']);
    Route::get('/riri-story-books', [CategoryController::class, 'riri']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolak']);
    Route::get('/kabi-islamic-books', [CategoryController::class, 'kabi']);
    Route::get('/marbel-junior', [CategoryController::class, 'marbeljunior']);
    Route::get('/keong-casual-games', [CategoryController::class, 'keonggames']);
});

Route::get('/news/{judul}', [NewsController::class, 'News']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'Karir']);
    Route::get('/magang', [ProgramController::class, 'Magang']);
    Route::get('/kunjungan-indistri', [ProgramController::class, 'KunjunganIndustri']);
});

Route::get('/about-us', function () {
    echo "TENTANG KAMI";
});

Route::resource('contact-us', ContactUsController::class);