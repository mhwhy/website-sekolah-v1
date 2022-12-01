<?php

use App\Http\Controllers\DashboardLokerController;
use App\Http\Controllers\DashboardStudentController;
use App\Http\Controllers\DashboardTeacherController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
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

Route::get('/dataguru/guru', [TeacherController::class, 'index2']);
Route::get('/dataloker/loker', [LokerController::class, 'index2']);
Route::get('/datasiswa/siswa', [StudentController::class, 'index2']);

Route::get('/komli', function () {
    return view('komli.rpl');
});

// auth

Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'register']);

Route::post('/register', [RegisterController::class, 'store']);




// admin
Route::get('/Dashboard', function () {
    return view('Dashboard.index', [
        'title' => 'dashboard admin'
    ]);
})->middleware('auth');

// loker
Route::get('/Dashboard/loker', [LokerController::class, 'index']);

Route::get('/Dashboard/loker/tambah', [LokerController::class, 'tambah']);
Route::post('/Dashboard/loker/simpan', [LokerController::class, 'simpan']);
Route::get('/Dashboard/loker/edit/{id}', [LokerController::class, 'edit']);
Route::put('/Dashboard/loker/update/{id}', [LokerController::class, 'update']);
Route::get('/Dashboard/loker/hapus/{id}', [LokerController::class, 'delete']);
Route::get('/Dashboard/loker/detail/{id}', [LokerController::class, 'detail']);

// guru
Route::get('/Dashboard/guru', [TeacherController::class, 'index']);
Route::get('/Dashboard/guru/tambah', [TeacherController::class, 'tambah']);
Route::post('/Dashboard/guru/simpan', [TeacherController::class, 'simpan']);
Route::get('/Dashboard/guru/edit/{id}', [TeacherController::class, 'edit']);
Route::put('/Dashboard/guru/update/{id}', [TeacherController::class, 'update']);
Route::get('/Dashboard/guru/hapus/{id}', [TeacherController::class, 'delete']);

// siswa
Route::get('/Dashboard/siswa', [StudentController::class, 'index']);

Route::get('/Dashboard/siswa/tambah', [StudentController::class, 'tambah']);
Route::post('/Dashboard/siswa/simpan', [StudentController::class, 'simpan']);
Route::get('/Dashboard/siswa/edit/{id}', [StudentController::class, 'edit']);
Route::put('/Dashboard/siswa/update/{id}', [StudentController::class, 'update']);
Route::get('/Dashboard/siswa/hapus/{id}', [StudentController::class, 'delete']);

// Route::resource('/Dashboard/siswa', DashboardStudentController::class)->middleware('auth');
// Route::resource('/Dashboard/guru', DashboardTeacherController::class)->middleware('auth');
// Route::resource('/Dashboard/loker', DashboardLokerController::class)->middleware('auth');
