@extends('layouts.app')
@section('content')

    <form action="/search" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="search stories"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>


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
    </div>



@endsection
