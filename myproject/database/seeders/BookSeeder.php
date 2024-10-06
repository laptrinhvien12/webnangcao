<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Book::create([
            'title' => 'Book Title 1',
            'author' => 'Author 1',
            'published_year' => 2021,
        ]);

        Book::create([
            'title' => 'Book Title 2',
            'author' => 'Author 2',
            'published_year' => 2020,
        ]);
    }
}
