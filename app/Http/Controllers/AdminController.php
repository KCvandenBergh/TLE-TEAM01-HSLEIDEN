<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Scenario;
use App\Models\Story;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $stories = Story::all();

        return view('admin.index', compact('stories'));
    }

    public function story($id){
        $scenarios = Scenario::all();
        $choices = Choice::all();
        $story = Story::find($id);

        return view('admin.story', compact('scenarios', 'choices', 'story'));
    }
}
