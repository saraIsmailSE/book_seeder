<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        $csvFile = fopen(base_path("database/data/books.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Book::create([
                    'id' => $data['0'],
                    'name' => $data['1'],
                    'end_page' => $data['2'],
                    'section_id' => $data['3'],
                    'level_id' => $data['4'],
                    'created_at' => $data['5'],
                    'updated_at' => $data['6'],
                    'writer' => $data['7'],
                    'publisher' => $data['8'],
                    'start_page' => $data['9'],
                    'link' => $data['10'],
                    'brief' => $data['11'],
                    'language_id' => $data['12'],
                    'type_id' => $data['13']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
