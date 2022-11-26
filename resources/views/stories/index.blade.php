@extends('layouts.app')
@section('content')

    <div class="container">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th></th>
            </tr>
            @foreach($stories as $story)
                <tr>
                    <td>{{$story->title}}</td>
                    <td>{{$story->description}}</td>
                    <td>
                        <a href="{{route('stories.show',$story->id)}}">View</a>
                    </td>
                </tr>

            @endforeach
        </table>
        @if(Auth::check())
            @include('partials._savesoverview')
        @endif
    </div>
@endsection
