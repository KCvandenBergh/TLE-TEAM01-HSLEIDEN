<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoryRelationSeeder extends Seeder
{
    /*function to link an existing story to an existing scenario*/
    public function linkStoryScenario($story_id, $scenario_id)
    {
        $story = Story::where('id', $story_id)->first();
        $story->scenario_id = $scenario_id;
        $story->save();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*function call (story_id, scenario_id)*/
        $this->linkStoryScenario(1, 1);

        $this->linkStoryScenario(2, 19);

        $this->linkStoryScenario(3, 35);
    }
}
