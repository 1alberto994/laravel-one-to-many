<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Type;

// Helpers
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();

        $types = [
            'Guide',
            'Gameplay',
            'News',
            'Recensioni',
            'Eventi',
            'Off Topic',
            'Leak',
            'Offerte',
            'Soluzioni',
            'Cracked',
            'Cosplay'
        ];

        foreach ($types as $type) {
            $newCategory = Type::create([
                'name' => $type,
                'slug' => Str::slug($type),
            ]);
        }
    }
}
