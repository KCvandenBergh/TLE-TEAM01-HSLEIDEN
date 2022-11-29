@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div id="searchBar">
                <input type="text" placeholder="Search..">
            </div>
        </div><br>
        @foreach($stories as $story)
            <div class="card">
                <div class="card-header">
                    <h1>{{$story->title}}</h1>
                </div>
                <div class="card-body">
                    <p>{{$story->description}}</p>
                </div>
                <a href="{{route('stories.show',$story->id)}}" class="play">Speel</a>
            </div>
        @endforeach
        @if(Auth::check())
            @include('partials._savesoverview')
        @endif
    </div>
@endsection
