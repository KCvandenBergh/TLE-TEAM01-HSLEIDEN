<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Save;
use App\Models\Scenario;
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
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Object_;

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
        $categories = Category::all();
        $stories = Story::latest()->filter(request(['search','category']))->get();
        $saves = null;
        if(\Auth::check()){
            $saves = Auth::user()->saves;
        }

    return view('stories.index', compact('stories', 'categories', 'saves'));
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
        $saves = null;
        if(Auth::check()){
            $saves = Auth::user()->saves->where('story_id', $story->id);
        }

        return view('stories.show', compact('story', 'saves'));
    }

    /**
     * Display the local results, not saved to db.
     *
     * @param User|null $user
     * @param Story $story
     * @return Application|Factory|View
     */
    public function result(?User $user, Story $story)
    {
        if (session()->has('choices')) {
            // get choices from session
            $sessionChoices = session('choices');
            // turn those id to actual choices
            foreach ($sessionChoices as $sessionChoice) {
                $choices[] = Choice::find($sessionChoice);
            }
            $choices = collect($choices);
            // collect the relevant scenarios
            $scenarios[] = Scenario::find($story->start_scenario->id);
            foreach ($choices as $choice) {
                $scenarios[] = Scenario::find($choice->scenario_id);
            }
            // create an author
            $author = new class {
            };
            if (\Auth::check()) {
                $author->name = \Auth::user()->name;
            } else {
                $author->name = 'GAST';
            }
            // create a local save instance
            $save = Save::newModelInstance();
            $save->story_id = $story->id;
            $save->choices = $choices;
            $save->updateTimestamps();

            /*dd($save);*/
            return view('stories.results', compact('save', 'story', 'scenarios', 'author'));
        } else {
            return abort(404);
        }
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
     * @return RedirectResponse
     */
    public function destroy(User $user, Story $story)
    {
        $story->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Story deleted successfully');
    }
}
