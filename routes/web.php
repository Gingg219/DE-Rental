<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('layout.master');
});
Route::get('/login',[AuthController::class, 'login'] )->name('login');
Route::get('/register',[AuthController::class, 'register'] )->name('register');
Route::post('/register',[AuthController::class, 'registering'] )->name('registering');

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');
 
Route::get('/auth/callback/{provider}', [AuthController::class, 'callback'] )->name('auth.callback');
// Route::resource('admin/user',UserController::class);
Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::get('/admin/user/{$user}/edit', function($user){
//     dd($user);
// })->name('user.edit');
Route::get('/admin/user/create', [UserController::class, 'create'])->name('user.create');