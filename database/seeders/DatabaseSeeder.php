<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::factory(20)->create();
        Publisher::factory(5)->create();
        BookCategory::factory(20)->create();

        Category::create([
            'name' => 'Programming'
        ]);

        Category::create([
            'name' => 'Romance'
        ]);

        Category::create([
            'name' => 'Comedy'
        ]);

    }
}
