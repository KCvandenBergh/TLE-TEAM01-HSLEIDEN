<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Save;
use App\Models\Scenario;
use App\Models\Story;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ScenarioController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Scenario::class, 'scenario');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $scenarios = Scenario::paginate(5);

        return view('scenarios.index', compact('scenarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return \view('scenarios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'dialogue' => 'required'
        ]);

        Scenario::create($data);
        return redirect(route('scenarios.index'));
    }

    /**
     * Display the specified resource from storage.
     * @param User|null $user
     * @param Request $req
     * @param Story $story
     * @param Scenario $scenario
     * @param Choice|null $madeChoice
     * @return Application
     */
    public function show(?User $user, Request $req, Story $story, Scenario $scenario, Choice $madeChoice = null)
    {
        // check if the given scenario belongs to the given story
        if ($scenario->story->id === $story->id) {
            // check to see if there's been a choice made.
            if (isset($madeChoice)) {
                // check if there's a story id saved in session
                if (session()->exists('story_id')) {
                    // add made choice to saved choices
                    $choices = session('choices');
                    // check if the given choice is the same as the last made choice
                    if(!(count($choices) > 0 && $choices[count($choices)-1] === $madeChoice->id)){
                        $choices[] = $madeChoice->id;
                        session(['choices' => $choices]);
                        session()->save();
                    }
                // otherwise redirect to starting scenario of the given story
                } else {
                    return redirect(route('scenario.show', [$story, $story->start_scenario]));
                }
                // else check if it's the starting scenario of the given story
            } elseif ($story->start_scenario->id === $scenario->id) {
                $choices = [];
                session([
                    'story_id' => $story->id,
                    'choices' => $choices,
                ]);
                session()->save();
            } else {
                return redirect(route('scenario.show', [$story, $story->start_scenario]));
            }

            return view('scenarios.show', compact('scenario'));
        } else {
            abort(404);
        }
    }

    /**
     * edit the specified resource from storage.
     * @param User $user
     * @param Scenario $scenario
     * @return Application
     */
    public function edit(User $user, Scenario $scenario)
    {
        /*$scenario = Scenario::find($id);*/
        return view('scenarios.edit', compact('scenario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Scenario $scenario
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Scenario $scenario)
    {
        $request->validate([
            'dialogue' => 'required'
        ]);

        $scenario->update($request->all());
        return redirect(route('scenarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param User $user
     * @param Scenario $scenario
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(User $user, Scenario $scenario)
    {
        $scenario->delete();

        return redirect()->route('scenarios.index')
            ->with('success', 'Scenario deleted successfully');
    }
}
