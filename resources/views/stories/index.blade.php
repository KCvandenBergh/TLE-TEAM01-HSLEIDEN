@extends('layouts.app')
@section('content')

    <div class="container">
        <div id="searchBar">
            <input type="text" placeholder="Search..">
        </div>
        @foreach($stories as $story)
            <div class="card">

                <h1>{{$story->title}}</h1>
                <p>{{$story->description}}</p>
                <a href="{{route('stories.show',$story->id)}}" class="play">Speel</a>
            </div>
        @endforeach

        {{--        <table class="table">--}}
        {{--            <tr>--}}
        {{--                <th>Title</th>--}}
        {{--                <th>Description</th>--}}
        {{--                <th></th>--}}
        {{--            </tr>--}}
        {{--            @foreach($stories as $story)--}}
        {{--                <tr>--}}
        {{--                    <td>{{$story->title}}</td>--}}
        {{--                    <td>{{$story->description}}</td>--}}
        {{--                    <td>--}}
        {{--                        <a href="{{route('stories.show',$story->id)}}" class="choices">View</a>--}}
        {{--                    </td>--}}
        {{--                </tr>--}}

        {{--            @endforeach--}}
        {{--        </table>--}}
    </div>
@endsection
