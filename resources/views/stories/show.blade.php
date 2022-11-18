@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>{{$story->title}}</h1>
        <p>{{$story->description}}</p>
        <a href="{{route('scenario.show', [$story->id, $story->start_scenario])}}"> Story Starten</a>
    </div>
@endsection
