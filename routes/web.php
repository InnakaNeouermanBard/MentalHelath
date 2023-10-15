<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdukasiController;

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
Route::get('/', function () {
    return view('landingPage.index');
})->name('home');

Route::get('/admin/edukasi', function () {
    return view('landingPage.Assets.Layout.edukasi');
})->name('edukasi');

Route::get('berita', [NewsController::class, 'index2'])->name('berita');

Route::resource('admin/news', NewsController::class);

Route::get('/admin', function () {
    return view('admin.HomeAdmin');
});

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi.index');
Route::get('/edukasi/create', [EdukasiController::class, 'create'])->name('edukasi.create');
Route::post('/edukasi', [EdukasiController::class, 'store']);
Route::get('/edukasi/{id}/edit', [EdukasiController::class, 'edit'])->name('edukasi.edit');
Route::put('/edukasi/{id}', [EdukasiController::class, 'update']);
Route::delete('/edukasi/{id}', [EdukasiController::class, 'destroy']);
