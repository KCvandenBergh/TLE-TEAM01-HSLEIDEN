@extends('layouts.app')

@section('content')

    <table>
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
                    <a href="{{route('cases.show',$story->id)}}">View</a>
                </td>
            </tr>

        @endforeach
    </table>
@endsection
