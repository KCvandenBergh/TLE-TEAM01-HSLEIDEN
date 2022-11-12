{{--@extends('layouts.app')--}}
{{--@section('content')--}}

    <h1>Scenario's - {{$story->title}}</h1>

<table class="table">
    <tr>
        <th>Scenario's</th>
        <th>Keuzes</th>
    </tr>
    @foreach($scenarios as $scenario)
        <tr>
            <td>{{$scenario->dialogue}}</td>

            @foreach($scenario->choices as $choice)
                <td>{{$choice->name}}</td>
            @endforeach
            <td><a href="scenarios.edit">Scenario aanpassen</a></td> <!-- placeholder link -->
            <td><a href="choices.edit">Keuzes aanpassen</a></td> <!-- placeholder link -->
        </tr>
    @endforeach
</table>
{{--@endsection--}}
