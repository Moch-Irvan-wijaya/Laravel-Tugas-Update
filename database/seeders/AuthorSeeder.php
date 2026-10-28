<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Tere Liye', 'photo' => 'tere-liye.jpg', 'bio' => 'Penulis novel Indonesia yang dikenal lewat serial Bumi dan Pulang.']);
        Author::create(['name' => 'Andrea Hirata', 'photo' => 'andrea-hirata.jpg', 'bio' => 'Penulis novel Laskar Pelangi asal Belitung.']);
        Author::create(['name' => 'Mark Manson', 'photo' => 'mark-manson.jpg', 'bio' => 'Penulis buku pengembangan diri asal Amerika Serikat.']);
        Author::create(['name' => 'Dee Lestari', 'photo' => 'dee-lestari.jpg', 'bio' => 'Penulis dan musisi Indonesia, pencipta serial Supernova.']);
        Author::create(['name' => 'Pramoedya Ananta Toer', 'photo' => 'pramoedya.jpg', 'bio' => 'Sastrawan Indonesia penulis Tetralogi Buru.']);
    }
}
