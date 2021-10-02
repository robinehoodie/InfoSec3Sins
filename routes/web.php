<?php

use App\Http\Controllers\Post;
use App\Http\Controllers\Login;
use App\Http\Controllers\Logout;
use App\Http\Controllers\Register;
use App\Http\Controllers\Dashboard;
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

Route::get('', [Dashboard::class, 'index'])->name('dashboard');

Route::post('/logout', [Logout::class, 'store'])->name('logout');

Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/login', [Login::class, 'store']);

Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'store']);

Route::get('/posts', [Post::class, 'index'])->name('posts');
Route::post('/posts', [Post::class, 'store']);
