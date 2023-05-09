<?php

namespace Database\Seeders;

use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class booksMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create([
            'media' => 'books/6f689e23-0445-4783-a321-091a9d8d0203.jpg',
            'type'=>'image',
            'user_id'=>1,
            'book_id'=>3,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

        ]);

    }
}
