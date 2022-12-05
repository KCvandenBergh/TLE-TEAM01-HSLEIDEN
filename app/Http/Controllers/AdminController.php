<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Scenario;
use App\Models\Story;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(User $user) {
        $this->authorize('create', Story::class);
        $stories = Story::all();

        return view('admin.index', compact('stories'));
    }

    public function story(User $user, Story $story){
        $this->authorize('create', Story::class);
        $scenarios = Scenario::paginate(4);
//      $choices = Choice::all();
//      $story = Story::find($id);

        return view('admin.story', compact('scenarios', 'story'));
    }
}
