<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Story;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class StoryController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Story::class, 'story');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

    public function index(?User $user)
    {
        return view('stories.index', [
            'stories'=>Story::latest()->filter(request(['search','category']))->get(),
            'categories'=> Category::all()
    ]);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('stories.create');
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
            'title' => 'required',
            'description' => 'required',
            'is_visible' => 'required'
        ]);

        Story::create($data);

        return redirect((route('stories.index')));
    }

    /**
     * Display the specified resource.
     *
     * @param User|null $user
     * @param Story $story
     * @return Application|Factory|View
     */
    public function show(?User $user, Story $story)
    {

        /*$story = Story::find($id);*/
        return view('stories.show', compact('story'));
    }

    public function edit(User $user, Story $story)
    {
        /* $story = Story::find($id);*/
        return view('stories.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Story $story
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $story->update($request->all());
        return redirect(route('stories.index'));
    }




        /**
         * Remove the specified resource from storage.
         *
         * @param User $user
         * @param Story $story
         * @return Response
         */
        public
        function destroy(User $user, Story $story)
        {
            //
        }

}
