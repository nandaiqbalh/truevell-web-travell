<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ProfileVillageController;
use App\Http\Controllers\Backend\ProgramCategoryController;
use App\Http\Controllers\Backend\ProgramController;
use App\Http\Controllers\Backend\TravelPackageController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail', [DetailController::class, 'index'])->name('detail');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/success', [CheckoutController::class, 'success'])->name('checkout-success');


// admin:admin -> adalah merupakan middleware
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


// PROTECT WITH MIDDLEWARE
Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    // ADMIN ALL ROUTES
    Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    // profile
    Route::get('/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/profile/store', [AdminProfileController::class, 'adminProfileStore'])->name('admin.profile.store');

    // password
    Route::get('/change/password', [AdminProfileController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::post('/update/password', [AdminProfileController::class, 'adminUpdatePassword'])->name('admin.update.password');

    Route::resource('/travel-packages', TravelPackageController::class);

    Route::resource('/galleries', GalleryController::class);
}); // END MIDDLEWARE


// kata admin setelah sacntum adalah nama guard
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard')->middleware('auth:admin');

// kata web setelah sacntum adalah nama guard
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
