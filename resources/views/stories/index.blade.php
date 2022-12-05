@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div class="input-group rounded">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Zoeken..." aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">Zoek</button>
                </div>
            </div>
        </div>
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
