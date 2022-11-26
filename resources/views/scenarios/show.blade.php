{{-- Add the layout from the user login setup here. --}}
@extends('layouts.app')
@section('content')

    {{-- container to contain the scenario --}}
    <div class="container">
        {{-- card for scenario --}}
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{$scenario->story->title}}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{$scenario->dialogue}}</p>
            </div>
            {{-- card for each choice --}}
            <ul class="list-group list-group-flush">
                @if($scenario->is_end)
                    @if(Auth::check())
                        <li class="list-group-item">
                            <div class="text-center">
                                <a href="{{ route('saves.create') }}" class="stretched-link page-link">Sla mijn keuzes op</a>
                                <bold> [WIP]</bold>
                            </div>
                        </li>
                    @endif

                    <li class="list-group-item">
                        <div class="text-center">
                            <a href="{{ route('stories.results', $scenario->story->id) }}" class="stretched-link page-link">Overzicht Keuzes</a>
                            <bold> [WIP]</bold>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="text-center">
                            <a href="{{route('stories.index')}}" class="stretched-link page-link">Terug naar Start</a>
                        </div>
                    </li>
                @else
                    @foreach($scenario->choices as $choice)
                        <li class="list-group-item">
                            <div class="text-center">
                                <a href="{{route('scenario.show', [$scenario->story->id, $choice->scenario_id, $choice->id])}}" class="stretched-link page-link">{{$choice->name}}</a>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection
