<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\post;
use Illuminate\Http\Request;

class postsController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => 'blog',
            "posts" => berita::all()
        ]);
    }

    public function find($slug)
    {
        return view('post', [
            'title' => 'SinglePost',
            'post' => berita::find($slug)
        ]);
    }
}
