<?php

namespace Tests\Feature;

use App\Models\Story;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ScenarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_scenario_show_succesful_response()
    {
        foreach (Story::all() as $story)
        {
            foreach ($story->scenarios as $scenario)
            {
                logger(route('scenario.show', [$story, $scenario]));
                $response = $this->get(route('scenario.show', [$story, $scenario]));
                $response->assertStatus(200);
            }
        }
    }

    public function test_scenario_choices_succesful_response()
    {
        foreach (Story::all() as $story)
        {
            foreach ($story->scenarios as $scenario)
            {
               foreach ($scenario->choices as $choice)
               {
                   if(!$scenario->is_end)
                   {
                       logger(route('scenario.show', [$story, $choice->scenario_id]));
                       $response = $this->withSession(['choices' => [$choice->id], 'story_id' => $story->id])->get(route('scenario.show', [$story, $choice->scenario_id, 10]));
                       $response->assertStatus(200);
                   }
               }
            }
        }
    }
}
