<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class




ChoiceScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Seeds the choice_scenario table: Links choices to the Scenario's they should appear in*/
        $data = [
            //story 1
                //endscreen
                    [
                        'choice_id' => 1,
                        'scenario_id' => 14,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 14,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 15,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 15,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 16,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 16,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 17,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 17,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 18,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 18,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 3,
                        'scenario_id' => 1,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 4,
                        'scenario_id' => 2,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],

                //scenarios

                    [
                        'choice_id' => 5,
                        'scenario_id' => 3,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 6,
                        'scenario_id' => 3,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 7,
                        'scenario_id' => 3,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 8,
                        'scenario_id' => 4,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 9,
                        'scenario_id' => 4,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 10,
                        'scenario_id' => 4,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 11,
                        'scenario_id' => 5,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 12,
                        'scenario_id' => 5,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 13,
                        'scenario_id' => 5,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 14,
                        'scenario_id' => 6,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 15,
                        'scenario_id' => 6,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 16,
                        'scenario_id' => 6,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 17,
                        'scenario_id' => 7,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 18,
                        'scenario_id' => 7,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 19,
                        'scenario_id' => 7,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 20,
                        'scenario_id' => 8,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 21,
                        'scenario_id' => 8,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 22,
                        'scenario_id' => 8,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 23,
                        'scenario_id' => 9,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 24,
                        'scenario_id' => 9,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 25,
                        'scenario_id' => 9,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 26,
                        'scenario_id' => 10,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 27,
                        'scenario_id' => 10,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 28,
                        'scenario_id' => 10,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 29,
                        'scenario_id' => 11,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 30,
                        'scenario_id' => 11,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 31,
                        'scenario_id' => 11,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 32,
                        'scenario_id' => 12,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ], [
                        'choice_id' => 33,
                        'scenario_id' => 12,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 34,
                        'scenario_id' => 12,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 35,
                        'scenario_id' => 13,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 36,
                        'scenario_id' => 13,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 37,
                        'scenario_id' => 13,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],

            //story 2
                //endscreen
                    [
                        'choice_id' => 1,
                        'scenario_id' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 31,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 31,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 32,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 32,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 33,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 33,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 1,
                        'scenario_id' => 34,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 2,
                        'scenario_id' => 34,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],

                //scenarios

                    [
                        'choice_id' => 55,
                        'scenario_id' => 19,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 38,
                        'scenario_id' => 20,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 39,
                        'scenario_id' => 20,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 40,
                        'scenario_id' => 20,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 41,
                        'scenario_id' => 21,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 42,
                        'scenario_id' => 21,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 43,
                        'scenario_id' => 21,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 44,
                        'scenario_id' => 22,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 45,
                        'scenario_id' => 22,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 46,
                        'scenario_id' => 22,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 47,
                        'scenario_id' => 23,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 48,
                        'scenario_id' => 23,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 49,
                        'scenario_id' => 24,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 50,
                        'scenario_id' => 24,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 51,
                        'scenario_id' => 24,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 52,
                        'scenario_id' => 25,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 53,
                        'scenario_id' => 25,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 54,
                        'scenario_id' => 25,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],

                //background info

                    [
                        'choice_id' => 56,
                        'scenario_id' => 26,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 57,
                        'scenario_id' => 27,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 58,
                        'scenario_id' => 28,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 59,
                        'scenario_id' => 29,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],


            //story 3

                    [
                        'choice_id' => 60,
                        'scenario_id' => 35,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 74,
                        'scenario_id' => 36,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 61,
                        'scenario_id' => 36,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 78,
                        'scenario_id' => 36,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 62,
                        'scenario_id' => 37,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 63,
                        'scenario_id' => 37,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 67,
                        'scenario_id' => 37,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 38,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 64,
                        'scenario_id' => 39,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 65,
                        'scenario_id' => 39,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 66,
                        'scenario_id' => 39,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 40,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 41,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 42,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 68,
                        'scenario_id' => 43,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 69,
                        'scenario_id' => 43,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 70,
                        'scenario_id' => 43,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 44,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 45,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 71,
                        'scenario_id' => 46,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 72,
                        'scenario_id' => 46,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 73,
                        'scenario_id' => 46,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 47,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 48,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    [
                        'choice_id' => 79,
                        'scenario_id' => 49,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
            [
                'choice_id' => 75,
                'scenario_id' => 50,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 76,
                'scenario_id' => 50,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 77,
                'scenario_id' => 50,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 79,
                'scenario_id' => 51,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 79,
                'scenario_id' => 52,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 79,
                'scenario_id' => 53,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 79,
                'scenario_id' => 54,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],




            [
                'choice_id' => 80,
                'scenario_id' => 55,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 81,
                'scenario_id' => 56,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 88,
                'scenario_id' => 56,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 82,
                'scenario_id' => 57,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 84,
                'scenario_id' => 57,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 86,
                'scenario_id' => 57,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 83,
                'scenario_id' => 58,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 85,
                'scenario_id' => 59,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 87,
                'scenario_id' => 60,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 89,
                'scenario_id' => 61,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 90,
                'scenario_id' => 62,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 92,
                'scenario_id' => 62,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 94,
                'scenario_id' => 62,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 91,
                'scenario_id' => 63,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 93,
                'scenario_id' => 64,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 95,
                'scenario_id' => 65,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 96,
                'scenario_id' => 66,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 97,
                'scenario_id' => 67,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 99,
                'scenario_id' => 67,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 98,
                'scenario_id' => 68,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'choice_id' => 100,
                'scenario_id' => 69,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],


        ];
        DB::table('choice_scenario')->insert($data);
    }
}
