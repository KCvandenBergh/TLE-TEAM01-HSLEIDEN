<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Save;
use App\Models\Scenario;
use App\Models\Story;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    public function download(Request $req, ?User $user, Story $story, ?Save $save = null)
    {
        // Check to see if no save is given, and session has choices.
        if (session()->has('choices') && $save === null) {
            // get choices from session
            $sessionChoices = session('choices');
            // turn those id to actual choices
            foreach ($sessionChoices as $sessionChoice) {
                $choices[] = Choice::find($sessionChoice);
            }
            $choices = collect($choices);

            // create a local save instance
            $save = Save::newModelInstance();
            $save->story_id = $story->id;
            $save->choices = $choices;
            $save->updateTimestamps();

            // if there is a save given AND the user id does not correspond with logged-in user OR no save is given AND no choices are available in session
        } else if (($save !== null && $save->user_id !== Auth::id()) || ($save === null && !session()->has('choices'))) {
            abort(404);
        }
        // collect the relevant scenarios
        $scenarios[] = Scenario::find($story->start_scenario->id);
        foreach ($save->choices as $choice) {
            $scenarios[] = Scenario::find($choice->scenario_id);
        }
        // create an author
        $author = new class {
        };
        if (\Auth::check()) {
            $author->name = \Auth::user()->name;
        } else {
            $author->name = '';
        }

        $time = date_format($save->created_at, "Y-m-d_His");
        $pdf = Pdf::loadView('pdf.results', compact('save', 'story', 'scenarios', 'author'));
        return $pdf->stream("results_$time.pdf");

    }
}
