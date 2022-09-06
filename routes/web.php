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
        'title' => 'Home'
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

Route::get('/berita', function () {
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
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
