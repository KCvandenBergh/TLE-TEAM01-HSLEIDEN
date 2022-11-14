{{-- Add the layout from the user login setup here. --}}
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{-- container to contain the scenario --}}
    <div class="container">
        {{-- card for scenario --}}
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Casus: {{$scenario->story->title}}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{$scenario->dialogue}}</p>
            </div>
            {{-- card for each choice --}}
            <ul class="list-group list-group-flush">
                @foreach($scenario->choices as $choice)
                    <li class="list-group-item">
                        <div class="card">
                            @if($choice->id === 1)
                                {{--  if choice is to download made choices --}}
                                {{$choice->name}}
                                <bold> [WIP]</bold>
                            @elseif($choice->id === 2)
                                {{--  if choice is to go back to the start menu --}}
                                {{-- currently links back to start scenario, needs to be linked to stories overview --}}
                                <a href="{{route('scenario.show', [$scenario->story->id, $scenario->story->start_scenario->id])}}">{{$choice->name}}</a>
                            @else
                                <a href="{{route('scenario.show', [$scenario->story->id, $choice->scenario_id])}}">{{$choice->name}}</a>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>


        </div>
    </div>
{{--@endsection--}}
