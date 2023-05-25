<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InfoController;


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

Route::get('/', [SiteController::class, 'welcome']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('/menu', [SiteController::class, 'menu']);
Route::get('/booking', [SiteController::class, 'booking']);
Route::get('/team', [SiteController::class, 'team']);
Route::get('/testimonial', [SiteController::class, 'testimonial']);
Route::get('/contact', [SiteController::class, 'contact']);

Route::post('/orders', [SiteController::class, 'orders'])->name('orders');


Route::prefix('admin/')->name('admin.')->group(function () 
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('/infos', InfoController::class);
});