<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\GoogleAuthenticationController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');
Route::middleware('auth')->get('/cart',function(){
    return view('cart');
});
Route::view('/admin/dashboard','admin.dashboard');
Route::view('/admin/profile','admin.profile');
Route::view('/admin/transactions','admin.transactions');
Route::view('/admin/users','admin.users');
// Route::view('/admin/products','admin.products');
Route::view('/admin/coupons','admin.coupons');
Route::view('/admin/mails','admin.emails.inbox');
Route::view('/admin/mails/create','admin.emails.compose');
Route::view('/admin/mails/{mail}','admin.emails.read')->where(['mail' => "[0-9]+"]);

// Route::get('/email/verify', function () {
    //     return view('auth.verify-email');
    // })->middleware('auth')->name('verification.notice');
    
Route::get('/shop',[ProductController::class,'index'])->name('products.index');
Route::get('/shop/{product}',[ProductController::class,'show'])->where(['product'=>"[0-9]+"])->name('products.show');

// only guest routes
Route::group(['middleware' => 'guest'], function(){
    Route::get('/google/register', [GoogleAuthenticationController::class, 'getCredentials'])->name('google.register');
    Route::get('/google/credentials', [GoogleAuthenticationController::class, 'store'])->name('google.store');
});


Route::group(['middleware' => 'auth'], function(){
    // email verification routes
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationController::class, 'sendLink'])->middleware(['throttle:6,1'])->name('verification.send');

    // carts routes
    Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
    Route::post('/carts', [CartController::class, 'store'])->name('carts.store');
    Route::post('/carts/{cart}', [CartController::class, 'destroy'])->name('carts.delete');
    Route::get('/carts/{product}/available', [CartController::class, 'checkIfProductIsInCart'])->name('carts.check');

    // wishlist routes
    Route::get('/wishlists', [WishListController::class, 'index'])->name('wishlists.index');
    Route::post('/wishlists', [WishListController::class, 'store'])->name('wishlists.store');
    Route::post('/wishlists/remove', [WishListController::class, 'destroy'])->name('wishlists.delete');
    Route::get('/wishlists/{wishlist}/available', [WishListController::class, 'checkIfProductIsInWishlist'])->name('wishlists.check');

    // chats routes
    Route::get('messages', [ChatsController::class, 'fetchMessages']);
    Route::post('messages', [ChatsController::class, 'sendMessage']);

    // admin routes
    Route::group(['middleware' =>  'isadmin', 'prefix' => 'admin'], function(){
        Route::get('products', [ProductController::class, 'create'])->name('products.create');
        Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
        Route::group(['prefix' => '/files'],function(){
            Route::post('images/store/multiple', [FileController::class, 'storeMultipleFiles'])->name('files.store');
            Route::post('images/delete', [FileController::class, 'deleteFiles'])->name('files.delete');
        });
    });
});


Route::any("*",function(){
    return redirect('/');
});
