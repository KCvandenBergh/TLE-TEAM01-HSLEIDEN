<?php

namespace App\Http\Controllers;

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

class SaveController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Save::class, 'save');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function create()
    {

        $save = Save::create([
            'story_id' => session('story_id'),
            'user_id' => Auth::id()
        ]);
        session(['save_id' => $save->id]);
        session()->save();
        $choices = session('choices');
        $save->choices()->syncWithoutDetaching($choices);

        return redirect(route('saves.show', $save->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public
    function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @param Save $save
     * @return Application|Factory|View
     */
    public
    function show(User $user, Save $save)
    {
        // find relevant story
        $story = Story::find($save->story_id);
        // collect the relevant scenarios
        $scenarios[] = Scenario::find($story->start_scenario->id);
        foreach ($save->choices as $choice) {
            $scenarios[] = Scenario::find($choice->scenario_id);
        }
        // create an author
        $author = User::select('name')->where('id', $save->user_id)->get()->first();

        return view('saves.show', compact('save', 'story', 'scenarios', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Save $save
     * @return Response
     */
    public
    function edit(Save $save)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Save $save
     * @return Response
     */
    public
    function update(Request $request, Save $save)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param User $user
     * @param Save $save
     * @return RedirectResponse
     */
    public
    function destroy(Request $request, User $user, Save $save)
    {
        $save->delete();
        return redirect(route('dashboard'));
    }
}
