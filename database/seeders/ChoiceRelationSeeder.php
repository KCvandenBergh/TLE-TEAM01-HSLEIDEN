<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ChoiceRelationSeeder extends Seeder
{
    /*function to link an existing choice to the existing scenario it should link to when clicked*/
    public function linkChoiceScenario($choice_id, $scenario_id)
    {
        $choice = Choice::where('id', $choice_id)->first();
        $choice->scenario_id = $scenario_id;
        $choice->save();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*function call (choice_id, scenario_id)*/
        $this->linkChoiceScenario(3, 2);
        $this->linkChoiceScenario(4, 3);
        $this->linkChoiceScenario(5, 4);
        $this->linkChoiceScenario(6, 5);
        $this->linkChoiceScenario(7, 6);
        $this->linkChoiceScenario(8, 7);
        $this->linkChoiceScenario(9, 8);
        $this->linkChoiceScenario(10, 9);
        $this->linkChoiceScenario(11, 10);
        $this->linkChoiceScenario(12, 11);
        $this->linkChoiceScenario(13, 12);
        $this->linkChoiceScenario(14, 13);
        $this->linkChoiceScenario(15, 4);
        $this->linkChoiceScenario(16, 10);
        $this->linkChoiceScenario(17, 14);
        $this->linkChoiceScenario(18, 15);
        $this->linkChoiceScenario(19, 16);
        $this->linkChoiceScenario(20, 7);
        $this->linkChoiceScenario(21, 9);
        $this->linkChoiceScenario(22, 12);
        $this->linkChoiceScenario(23, 14);
        $this->linkChoiceScenario(24, 8);
        $this->linkChoiceScenario(25, 7);
        $this->linkChoiceScenario(26, 14);
        $this->linkChoiceScenario(27, 4);
        $this->linkChoiceScenario(28, 17);
        $this->linkChoiceScenario(29, 18);
        $this->linkChoiceScenario(30, 17);
        $this->linkChoiceScenario(31, 7);
        $this->linkChoiceScenario(32, 7);
        $this->linkChoiceScenario(33, 14);
        $this->linkChoiceScenario(34, 10);
        $this->linkChoiceScenario(35, 17);
        $this->linkChoiceScenario(36, 14);
        $this->linkChoiceScenario(37, 18);
    }
}
