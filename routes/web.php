<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\Services_detailsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route:: get('/', [IndexController::class, 'index'])->name('home');
Route:: get('/about', [AboutController::class, 'index'])->name('about');
Route:: get('/contact', [ContactController::class, 'index'])->name('contact');
Route:: get('/service', [ServiceController::class, 'index'])->name('service');
Route:: get('/service_details', [Services_detailsController::class, 'index'])->name('services_details');
Route:: get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
Route:: get('/shop', [ShopController::class, 'index'])->name('shop');
Route:: get('/gallery', [GalleryController::class, 'index'])->name('gallery');