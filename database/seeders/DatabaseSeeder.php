<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(BookSeeder::class);
        //$this->call(booksMediaSeeder::class);
        $this->call(SaraBooksMediaSeeder::class);
        $this->call(HebhBooksMediaSeeder::class);
    }
}
