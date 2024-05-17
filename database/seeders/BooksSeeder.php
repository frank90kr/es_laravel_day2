<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' =>fake()->words(rand(3, 5), true),
                'price' => rand(100, 200),
                'author' => fake()->name(),
                'img' => fake()->imageUrl(640, 480)
            ]);
        }
    }
}

