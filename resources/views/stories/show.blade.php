@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{$story->title}}</h1>
            </div>
            <div class="card-body">
                <p>{{$story->description}}</p>
            </div>
            <a href="{{route('scenario.show', [$story->id, $story->start_scenario])}}" class="choices"> Story
                Starten</a>
        </div>
        @if(Auth::check() && $saves->count() > 0)
            @include('partials._savesoverview')
        @endif
    </div>
@endsection
