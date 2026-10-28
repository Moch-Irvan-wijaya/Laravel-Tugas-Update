<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['title' => 'Pulang', 'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.', 'price' => 40000, 'stock' => 15, 'cover_photo' => 'pulang.jpg', 'genre_id' => 1, 'author_id' => 1]);
        Book::create(['title' => 'Laskar Pelangi', 'description' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan.', 'price' => 85000, 'stock' => 20, 'cover_photo' => 'laskar-pelangi.jpg', 'genre_id' => 2, 'author_id' => 2]);
        Book::create(['title' => 'Bumi', 'description' => 'Petualangan Raib, seorang remaja yang memiliki kekuatan istimewa.', 'price' => 95000, 'stock' => 10, 'cover_photo' => 'bumi.jpg', 'genre_id' => 3, 'author_id' => 1]);
        Book::create(['title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'description' => 'Kisah pencarian jati diri yang memadukan sains dan spiritualitas.', 'price' => 90000, 'stock' => 12, 'cover_photo' => 'supernova.jpg', 'genre_id' => 3, 'author_id' => 4]);
        Book::create(['title' => 'Bumi Manusia', 'description' => 'Kisah Minke pada masa kolonial Hindia Belanda.', 'price' => 110000, 'stock' => 8, 'cover_photo' => 'bumi-manusia.jpg', 'genre_id' => 2, 'author_id' => 5]);
    }
}
