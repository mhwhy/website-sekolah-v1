<?php

use App\Http\Controllers\postsController;
use App\Http\Controllers\StudentController;
use App\Models\berita;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'berita'
    ]);
});

Route::get('/agenda', function () {
    return view('agenda', [
        'title' => 'agenda'
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'kontak'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'profile'
    ]);
});

Route::get('/berita', [postsController::class, 'index']);


Route::get('posts/{slug}', [postsController::class, 'find']);

Route::get('/siswa', [StudentController::class, 'index']);

Route::get('/siswa/tambah', [StudentController::class, 'tambah']);
Route::post('/siswa/simpan', [StudentController::class, 'simpan']);
Route::get('/siswa/edit/{id}', [StudentController::class, 'edit']);
Route::put('/siswa/update/{id}', [StudentController::class, 'update']);
Route::get('/siswa/hapus/{id}', [StudentController::class, 'delete']);
