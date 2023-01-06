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
                        'title' => 'Prototype: Kim/Ruben',
                        'description' => 'Dit is het verhaal over Ruben en Kim.',
                        'is_visible' => 1,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
            //story 2
                    [
                        'title' => 'Prototype: Redouane',
                        'description' => 'Dit is het verhaal over Redouane.',
                        'is_visible' => 1,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
            //story 3
            [
                'title' => 'Prototype: Ondernemende Onyx',
                'description' => 'Dit is het verhaal over de ondernemende Onyx.',
                'is_visible' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
        ];

        // add entries into database.
        DB::table('stories')->insert($data);
    }
}
