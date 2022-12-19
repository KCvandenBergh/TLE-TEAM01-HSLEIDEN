@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <h1>{{$story->title}}</h1>
        </div>
        <div class="card-body">
            <p>{{$story->description}}</p>
        </div>
        <a href="{{route('scenario.show', [$story->id, $story->start_scenario])}}" class="play"> Story
            Starten</a>
    </div>

    @include('partials._savesoverview')

@endsection
