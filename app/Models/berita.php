<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita
{
    use HasFactory;
    private static $blog_posts =  [
        [
            'title' => 'Karena Memiliki Potensi Unggul, Indostorage Solusi Teknologi Lakukan Teken dengan SMKN 2 Kota Trenggalek',
            'slug' => 'Karena Memiliki Potensi Unggul, Indostorage Solusi Teknologi Lakukan Teken dengan SMKN 2 Kota Trenggalek',
            'author' => 'admin',
            'body' => 'majalahsora.com, Kota Trenggalek –  PT Indostorage Solusi Teknologi, perusahaan yang bergerak di bidang konsultan teknologi informasi dan sistem integrator yang memberikan solusi kepada industri swasta maupun pemerintahan, melakukan kerjasama atau MoU dengan SMKN 2 Kota Trenggalek. Dilangsungkan di kampus SMKN Baca Selengkapnya …',
        ],
        [
            'title' => 'Tidak biasa! Upacara rutin 5 September 2022 dihadiri Kadisdik Kota Trenggalek dan Kepala Cadisdik Wilayah VII',
            'slug' => 'Tidak biasa! Upacara rutin 5 September 2022 dihadiri Kadisdik Kota Trenggalek dan Kepala Cadisdik Wilayah VII',
            'author' => 'whyu',
            'body' => 'Upacara rutin yang dilaksanakan pada hari Senin merupakan salah satu agenda rutin sebagai bentuk kedisiplinan siswa yang juga diikuti oleh guru dan tenaga kependidikan lainnya. Namun ada yang berbeda pada upacara Senin (05/09/2022). Upacara ini dihadiri oleh Kepala Dinas Pendidikan Baca Selengkapnya …',
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);

        // $postss = self::$blog_posts;
        // $new_post = [];
        // foreach ($postss as $p) {
        //     if ($p["slug"] === $slug) {
        //         $new_post = $p;
        //     }
        // }
        // return $new_post;
    }
}
