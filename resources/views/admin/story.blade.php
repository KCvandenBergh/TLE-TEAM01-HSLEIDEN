@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <h1>Scenario's - {{$story->title}}</h1>
            <table class="table">
                <tr>
                    <th>Scenario's</th>
                    <th>Keuzes</th>
                </tr>
                @foreach($scenarios as $scenario)
                    <tr>
                        <td>{{$scenario->dialogue}} <br>
                            <a href="{{route('scenarios.edit', $scenario->id)}}">Scenario aanpassen</a>
                        </td>
                        @foreach($scenario->choices as $choice)
                            <td>{{$choice->name}}<br>
                                <a href="{{route('choices.edit', $choice->id)}}">Keuzes aanpassen</a>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
