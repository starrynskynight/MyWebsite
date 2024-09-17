<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ControllerPage::class, 'home'])->name('home'); 
Route::get('/about', [ControllerPage::class, 'about'])->name('tentang'); 
Route::get('/life', [ControllerPage::class, 'life'])->name('life'); 
Route::get('/contact', [ControllerPage::class, 'contact'])->name('contact'); 

// Route::get('/about', function () {
//     return view('about');
// })->name('tentang');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

// Route::get('/life', function () {
//     return view('life');
// })->name('life');