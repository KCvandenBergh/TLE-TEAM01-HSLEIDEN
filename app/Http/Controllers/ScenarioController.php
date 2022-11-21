<?php

namespace App\Http\Controllers;

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
        $scenarios = Scenario::all();

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
     * @param Story $story
     * @param Scenario $scenario
     * @return Application|Redirector|RedirectResponse
     */
    public function show(?User $user, Story $story, Scenario $scenario)
    {
        if($scenario->story->id === $story->id) {
            return view('scenarios.show', compact('scenario'));
        } else {
            abort(404);
        }
    }

    /**
     * edit the specified resource from storage.
     *@param User $user
     * @param Scenario $scenario
     * @return Application|Redirector|RedirectResponse
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
     *@param User $user
     * @param Scenario $scenario
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(User $user, Scenario $scenario)
    {
        //
    }
}
