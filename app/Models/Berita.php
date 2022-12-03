<?php

namespace App\Models;

// Create class Berita

class Berita
{
    private static $berita_artikel = [
        [
            "judul" => "Kasus Corona RI 4 November Tambah 5.304, sembuh 4.361",
            "slug" => "judul-pertama",
            "penulis" => "Farih Maulana Sidiq",
            "isi" => "Pemerintah juga menerapkan pemberlakuan pembatasan kegiatan masyarakat (PPKM) level 1 hingga 4 untuk menekan laju penyebaran Corona."
        ],
        [
            "judul" => "Judul Kedua",
            "slug" => "judul-kedua",
            "penulis" => "Semar",
            "isi" => "Ini adalah isi"
        ]

        ];
        public static function all()
        {
            return collect(self::$berita_artikel);
        }

        public static function find($slug)
        {
            $berita = static::all();
            return $berita->firstWhere('slug', $slug);
        }
        
}