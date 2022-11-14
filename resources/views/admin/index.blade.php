{{--@extends('layouts.app')--}}
{{--@section('content')--}}
    <a href="create" class="button">Maak een nieuwe casus</a> <!-- placeholder link -->
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
                <td><a href="stories.edit">Casus informatie aanpassen</a></td> <!-- placeholder link -->
                <td><a href="delete">Verwijderen</a></td> <!-- placeholder link -->
            </tr>
        @endforeach
    </table>
{{--@endsection--}}
