<?php

use App\Http\Controllers\postsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/datasiswa/siswa', [StudentController::class, 'index']);

Route::get('/datasiswa/siswa/tambah', [StudentController::class, 'tambah']);
Route::post('/datasiswa/siswa/simpan', [StudentController::class, 'simpan']);
Route::get('/datasiswa/siswa/edit/{id}', [StudentController::class, 'edit']);
Route::put('/datasiswa/siswa/update/{id}', [StudentController::class, 'update']);
Route::get('/datasiswa/siswa/hapus/{id}', [StudentController::class, 'delete']);



Route::get('/dataguru/guru', [TeacherController::class, 'index']);




Route::get('/dataguru/guru/tambah', [TeacherController::class, 'tambah']);
Route::post('/dataguru/guru/simpan', [TeacherController::class, 'simpan']);
Route::get('/dataguru/guru/edit/{id}', [TeacherController::class, 'edit']);
Route::put('/dataguru/guru/update/{id}', [TeacherController::class, 'update']);
Route::get('/dataguru/guru/hapus/{id}', [TeacherController::class, 'delete']);
