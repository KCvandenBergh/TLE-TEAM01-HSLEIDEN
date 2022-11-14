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
     * @return Response
     */
    public function create()
    {
        //
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


    public function show(?User $user, Story $story, Scenario $scenario)
    {
        return view('scenario.view', compact('scenario'));
    }


    public function edit($id)
    {
        $scenario = Scenario::find($id);
        return view('scenarios.edit', compact('scenario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
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
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
