<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\UserAddressController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FlashSaleController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndustryController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/portfolio-details', [PortfolioController::class, 'portfolioDetails'])->name('portfolio-details');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/industry', [IndustryController::class, 'index'])->name('industry');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/flash-sale', [FlashSaleController::class, 'index'])->name('flash-sale');
Route::get('/product-detail/{slug}', [FrontendProductController::class, 'showProduct'])->name('product-detail');

// Cart Routes
Route::get('/cart-details', [CartController::class, 'cartDetails'])->name('cart-details');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::post('cart/update-quantity', [CartController::class, 'updateProductQty'])->name('cart.update-quantity');
Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
Route::get('cart/remove-product/{rowId}', [CartController::class, 'removeProduct'])->name('cart.remove-product');


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', [UserDashboardController::class, 'index']);
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
    Route::put('update', [UserProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('update/password', [UserProfileController::class, 'updatePassword'])->name('profile.password.update');

    // Address Routes
    Route::resource('address', UserAddressController::class);
});
