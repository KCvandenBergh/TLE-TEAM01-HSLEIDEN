@extends('layouts.app')
@section('content')

    <div class="card">
        <form action="#" method="GET" role="search">
            <div class="input-group rounded">
                <input type="text" class="form-control" name="search"
                       placeholder="Zoeken" value="{{request('search')}}">
                    <select class="form-select" name="category" aria-label="Category select menu">
                        <option value="" disabled selected>Filter op categorie</option>
                        @foreach($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
            </div>
        </form>
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

@endsection
