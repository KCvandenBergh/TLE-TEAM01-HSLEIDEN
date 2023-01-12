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

        //story 3
            $this->linkChoiceScenario(60, 36);
            $this->linkChoiceScenario(61, 37);
            $this->linkChoiceScenario(62, 38);
            $this->linkChoiceScenario(63, 39);
            $this->linkChoiceScenario(64, 40);
            $this->linkChoiceScenario(65, 41);
            $this->linkChoiceScenario(66, 42);
            $this->linkChoiceScenario(67, 43);
            $this->linkChoiceScenario(68, 44);
            $this->linkChoiceScenario(69, 45);
            $this->linkChoiceScenario(70, 46);
            $this->linkChoiceScenario(71, 47);
            $this->linkChoiceScenario(72, 48);
            $this->linkChoiceScenario(73, 49);
            $this->linkChoiceScenario(74, 50);
            $this->linkChoiceScenario(75, 51);
            $this->linkChoiceScenario(76, 52);
            $this->linkChoiceScenario(77, 53);
            $this->linkChoiceScenario(78, 54);
            $this->linkChoiceScenario(79, 55);
            $this->linkChoiceScenario(80, 56);
            $this->linkChoiceScenario(81, 57);
            $this->linkChoiceScenario(82, 58);
            $this->linkChoiceScenario(83, 66);
            $this->linkChoiceScenario(84, 59);
            $this->linkChoiceScenario(85, 66);
            $this->linkChoiceScenario(86, 60);
            $this->linkChoiceScenario(87, 66);
            $this->linkChoiceScenario(88, 61);
            $this->linkChoiceScenario(89, 62);
            $this->linkChoiceScenario(90, 63);
            $this->linkChoiceScenario(91, 66);
            $this->linkChoiceScenario(92, 64);
            $this->linkChoiceScenario(93, 66);
            $this->linkChoiceScenario(94, 65);
            $this->linkChoiceScenario(95, 66);
            $this->linkChoiceScenario(96, 67);
            $this->linkChoiceScenario(97, 68);
            $this->linkChoiceScenario(98, 70);
            $this->linkChoiceScenario(99, 69);
            $this->linkChoiceScenario(100, 70);

    }


}
