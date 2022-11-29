<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ChoiceRelationSeeder extends Seeder
{
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
        //story 1
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

        //story 2
            $this->linkChoiceScenario(38, 26);
            $this->linkChoiceScenario(39, 22);
            $this->linkChoiceScenario(40, 29);
            $this->linkChoiceScenario(41, 28);
            $this->linkChoiceScenario(42, 27);
            $this->linkChoiceScenario(43, 28);
            $this->linkChoiceScenario(44, 27);
            $this->linkChoiceScenario(45, 23);
            $this->linkChoiceScenario(46, 28);
            $this->linkChoiceScenario(47, 27);
            $this->linkChoiceScenario(48, 28);
            $this->linkChoiceScenario(49, 30);
            $this->linkChoiceScenario(50, 31);
            $this->linkChoiceScenario(51, 32);
            $this->linkChoiceScenario(52, 33);
            $this->linkChoiceScenario(53, 34);
            $this->linkChoiceScenario(54, 33);
            $this->linkChoiceScenario(55, 20);
            $this->linkChoiceScenario(56, 21);
            $this->linkChoiceScenario(57, 23);
            $this->linkChoiceScenario(58, 25);
            $this->linkChoiceScenario(59, 24);
    }


}
