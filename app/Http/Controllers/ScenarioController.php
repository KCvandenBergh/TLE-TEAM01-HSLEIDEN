<?php

namespace App\Http\Controllers;

use App\Models\Scenario;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class ScenarioController extends Controller
{
    public function show(?User $user, Story $story, Scenario $scenario)
    {
        return view('scenario.view', compact('scenario'));
    }
};
