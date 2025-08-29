<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Tips Karir',
            'slug' => 'tips-karir',
        ]);
        Category::create([
            'name' => 'Kisah Sukses',
            'slug' => 'kisah-sukses',
        ]);
        Category::create([
            'name' => 'Tutorial',
            'slug' => 'tutorial',
        ]);
    }
}
