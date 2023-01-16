<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add the entries here, without foreign keys.
        $data = [
            //story 1
                    [
                        'title' => 'Kim/Ruben',
                        'description' => 'In dit verhaal speel je een jongen met een ingewikkeld leven. Hij woont op zichzelf en heeft alleen zijn vriendin en beste vriend als steun. Je loopt de kamer binnen en ziet je beste vriendin boven op je vriendin liggen… Wat zou jij doen?',
                        'is_visible' => 1,
                        'category_id' => 4,
                        'slug' => 'Kim-Ruben',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
            //story 2
                    [
                        'title' => 'Redouane',
                        'description' => 'In dit verhaal speel je een jongen die met zijn matties op de straat leeft. Zijn matties zijn zijn enige familie, maar wat doe je als ze je vragen om samen met hen de wet te overtreden?',
                        'is_visible' => 1,
                        'category_id' => 6,
                        'slug' => 'Redouane',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
            //story 3
                    [
                        'title' => 'Ondernemende Onyx',
                        'description' => 'In dit verhaal speel je een jongen zonder familie. De enige familie die hij nog over heeft zijn zijn niffauws. Hij heeft alles voor ze over maar als hij zelf in een situatie komt waar hij in gevaar wordt gebracht wordt het moeilijk. Wat zou jij doen?',
                        'is_visible' => 1,
                        'category_id' => 7,
                        'slug' => 'Ondernemende-Onyx',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
        ];

        // add entries into database.
        DB::table('stories')->insert($data);
    }
}
