<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::view('/wishlist','wishlist');
Route::view('/cart','cart');
Route::view('/shop','shop');
Route::view('/shop/{product}','product')->where(['product'=>"[0-9]+"]);
Route::view('/admin/dashboard','admin.dashboard');
Route::view('/admin/profile','admin.profile');
Route::view('/admin/transactions','admin.transactions');
Route::view('/admin/users','admin.users');
Route::view('/admin/mails','admin.emails.inbox');
Route::view('/admin/mails/create','admin.emails.compose');
Route::view('/admin/mails/{mail}','admin.emails.read')->where(['mail' => "[0-9]+"]);

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/google/register', [GoogleAuthenticationController::class, 'getCredentials'])->name('google.register');
    Route::get('/google/credentials', [GoogleAuthenticationController::class, 'store'])->name('google.store');
});
Route::group(['middleware' => 'auth'], function(){
    // email verification routes
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationController::class, 'sendLink'])->middleware(['throttle:6,1'])->name('verification.send');

    // chats routes
    Route::get('messages', [ChatsController::class, 'fetchMessages']);
    Route::post('messages', [ChatsController::class, 'sendMessage']);
});

Route::any("*",function(){
    return redirect('/');
});
