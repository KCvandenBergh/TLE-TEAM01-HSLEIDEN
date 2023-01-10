@extends('layouts.app')
@section('content')

        <div class="card">
            <form action="#" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search"
                           placeholder="search stories">

                    <button type="submit" class="btn btn-default">

                </div>

                <select class="form-select" name="category" aria-label="Disabled select example">
                    <option selected>filter by category</option>
                    @foreach($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                    @endforeach
                    <input type="submit" value="Submit">
                </select>
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
