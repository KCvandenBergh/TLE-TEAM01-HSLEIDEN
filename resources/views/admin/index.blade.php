@extends('layouts.app')
@section('content')

    <div class="container">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Scenario's</th>
                <th>Aanpassen</th>
                <th>Verwijderen</th>
            </tr>
            @foreach($stories as $story)
                <tr>
                    <td>{{$story->title}}</a></td>
                    <td>{{$story->description}}</td>
                    <td><a href="{{route('admin.stories.show', $story->id)}}">Scenario's</a></td>
                    <td><a href="{{route('stories.edit', $story->id)}}">Casus informatie aanpassen</a></td>
                    <td><a href="{{route('stories.destroy', $story->id)}}">Verwijderen</a></td> <!-- placeholder link -->
                </tr>
            @endforeach
        </table>
        <a href="{{route('stories.create')}}" class="button">Maak een nieuwe casus</a> <!-- placeholder link -->
    </div>
@endsection
