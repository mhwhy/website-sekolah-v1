<?php

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
        'name' => "Wahyu",
        'title' => 'Home',
        'alamat' => 'bumi bagian indonesia lebih tepatnya provinsi jawa timur kab.trenggalek kec.dongko desa pandean'
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
        'title' => 'kontak',
        'name' => 'Muhamad Wahyu s',
        'email' => 'wahyumuhamad503@gmail.com',
        'image' => 'foto.jpeg',

    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'profile'
    ]);
});

Route::get('/berita', function () {
    $blog_posts = [
        [
            'title' => 'Karena Memiliki Potensi Unggul, Indostorage Solusi Teknologi Lakukan Teken dengan SMKN 1 Kota Cimahi',
            'slug' => 'Karena Memiliki Potensi Unggul, Indostorage Solusi Teknologi Lakukan Teken dengan SMKN 1 Kota Cimahi',
            'author' => 'admin',
            'body' => 'majalahsora.com, Kota Cimahi –  PT Indostorage Solusi Teknologi, perusahaan yang bergerak di bidang konsultan teknologi informasi dan sistem integrator yang memberikan solusi kepada industri swasta maupun pemerintahan, melakukan kerjasama atau MoU dengan SMKN 1 Kota Cimahi. Dilangsungkan di kampus SMKN Baca Selengkapnya …',
        ],
        [
            'title' => 'Tidak biasa! Upacara rutin 5 September 2022 dihadiri Kadisdik Kota Cimahi dan Kepala Cadisdik Wilayah VII',
            'slug' => 'Tidak biasa! Upacara rutin 5 September 2022 dihadiri Kadisdik Kota Cimahi dan Kepala Cadisdik Wilayah VII',
            'author' => 'whyu',
            'body' => 'Upacara rutin yang dilaksanakan pada hari Senin merupakan salah satu agenda rutin sebagai bentuk kedisiplinan siswa yang juga diikuti oleh guru dan tenaga kependidikan lainnya. Namun ada yang berbeda pada upacara Senin (05/09/2022). Upacara ini dihadiri oleh Kepala Dinas Pendidikan Baca Selengkapnya …',
        ]
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'Judul Pertama',
            'author' => 'Bang Radit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda veniam ut, nulla harum repudiandae, adipisci nisi fugit sapiente vel ad non eaque cumque consectetur esse molestiae rerum dolor pariatur, commodi corporis asperiores quo modi dolore. Modi commodi eum veritatis ad?',
        ],
        [
            'title' => 'Judul kedua',
            'slug' => 'Judul kedua',
            'author' => 'Saya sendiri',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda veniam ut, nulla harum repudiandae, adipisci nisi fugit sapiente vel ad non eaque cumque consectetur esse molestiae rerum dolor pariatur, commodi corporis asperiores quo modi dolore. Modi commodi eum veritatis ad?',
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
