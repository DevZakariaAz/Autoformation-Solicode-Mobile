<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('seeds/categories.csv'));
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            // Print the record for debugging
            echo "Inserting: " . json_encode($record) . "\n";

            Category::create([
                'name' => $record['name'],
                'description' => $record['description'],
            ]);
        }
    }
}
