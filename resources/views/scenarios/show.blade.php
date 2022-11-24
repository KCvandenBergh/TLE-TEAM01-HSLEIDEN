{{-- Add the layout from the user login setup here. --}}
@extends('layouts.app')
@section('content')

    {{-- container to contain the scenario --}}
    <div class="container">
        {{-- card for scenario --}}
        <div class="card">
            <img src="https://i.pinimg.com/originals/2b/93/e0/2b93e0b6ded8310c25c131bd8146409a.jpg" class="card-img"
                 alt="Image of alley">
            <div class="card-img-overlay">
                <div class="card-header">
                    <h2 class="card-title">{{$scenario->story->title}}</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$scenario->dialogue}}</p>
                </div>

                {{-- card for each choice --}}
                <ul class="list-group list-group-flush">
                    @foreach($scenario->choices as $choice)
                        {{--                            <div class="card">--}}
                        @if($choice->id === 1)
                            {{--  if choice is to download made choices --}}

                                <a href="#" class="choices">{{$choice->name}}
                                    <bold> [WIP]</bold>
                                </a><br>

                        @elseif($choice->id === 2)
                            {{--  if choice is to go back to the start menu --}}
                            {{-- currently links back to start scenario, needs to be linked to stories overview --}}
                            <a href="{{route('stories.index')}}" class="choices">{{$choice->name}}</a>
                        @else
                            <a href="{{route('scenario.show', [$scenario->story->id, $choice->scenario_id])}}"
                               class="choices">{{$choice->name}}</a><br>
                        @endif
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
