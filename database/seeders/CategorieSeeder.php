<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Family'
        ]);

        Category::create([
            'name' => 'Action'
        ]);

        Category::create([
            'name' => 'Life'
        ]);

        Category::create([
            'name' => 'Adventure'
        ]);

        Category::create([
            'name' => 'Romance'
        ]);
    }
}
