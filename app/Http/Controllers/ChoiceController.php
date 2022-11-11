<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Scenario;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $choices = Choice::all();

        return view('choices.index', compact('choices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $scenarios = Scenario::all();
        return \view('choices.create', compact('scenarios'));

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
            'name' => 'required',
            'scenario_id' => 'required'
        ]);

        Choice::create($data);
        return redirect(route('choices.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $choice = Choice::find($id);
        $scenarios = Scenario::all();
        return view('choices.edit', compact('choice', 'scenarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Choice $choice)
    {
        $request->validate([
            'name' => 'required',
            'scenario_id' => 'required'
        ]);

        $choice->update($request->all());
        return redirect(route('choices.index'));
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
