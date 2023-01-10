<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $story = Category::factory()->create();

        Category::create([
            'name' => 'Verdovende Middelen',
            'slug' => 'verdovende middelen'
        ]);

        Category::create([
            'name' => 'Drugs',
            'slug' => 'drugs'
        ]);

        Category::create([
            'name' => 'Huiselijk Geweld',
            'slug' => 'huiselijk geweld'
        ]);

        Category::create([
            'name' => 'Seksueel Misbruik',
            'slug' => 'seksueel misbruik'
        ]);

        Category::create([
            'name' => 'Geweldpleging',
            'slug' => 'geweldpleging'
        ]);

        Category::create([
            'name' => 'Diefstal',
            'slug' => 'diefstal'
        ]);
    }
}
