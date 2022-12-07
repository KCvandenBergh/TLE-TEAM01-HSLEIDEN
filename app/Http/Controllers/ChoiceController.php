<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Scenario;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ChoiceController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Choice::class, 'choice');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $choices = Choice::paginate(8);

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
     * @param User|null $user
     * @param Choice $choice
     * @return Response
     */
    public function show(?User $user, Choice $choice)
    {
        //
    }

    public function edit(?User $user, Choice $choice)
    {
       /* $choice = Choice::find($id);*/
        $scenarios = Scenario::all();
        return view('choices.edit', compact('choice', 'scenarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Choice $choice
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
     * @param User|null $user
     * @param Choice $choice
     * @return RedirectResponse
     */
    public function destroy(?User $user, Choice $choice)
    {
        $choice->delete();

        return redirect()->route('choices.index')
            ->with('success', 'Scenario deleted successfully');
    }
}
