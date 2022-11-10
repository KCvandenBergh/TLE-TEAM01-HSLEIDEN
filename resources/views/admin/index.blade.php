{{--@extends('layouts.app')--}}
{{--@section('content')--}}
    <a href="create" class="button">Maak een nieuwe casus</a>
    <table class="table">
        <tr>
            <th>Naam casus</th>
            <th>Description casus</th>
            <th>Scenario's</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
        </tr>
        @foreach($stories as $story)
            <tr>
                <td>{{$story->title}}</td>
                <td>{{$story->description}}</td>
                <td><a href="{{route('story', $story->id)}}">Scenario's</a></td>
                <td><a href="edit">Aanpassen</a></td>
                <td><a href="delete">Verwijderen</a></td>
            </tr>
        @endforeach
    </table>
{{--@endsection--}}
