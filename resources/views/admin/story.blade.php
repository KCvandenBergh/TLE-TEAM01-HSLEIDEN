{{--@extends('layouts.app')--}}
{{--@section('content')--}}
@php
    /**
     * @var \App\Models\Drawing[] $drawings
     */
@endphp

    <h1>Scenario's - {{$story->title}}</h1>

<table class="table">
    <tr>
        <th>Scenario's</th>
        <th>Keuzes</th>
    </tr>
    @foreach($scenarios as $scenario)
        <tr>
            <td>{{$scenario->dialogue}}</td>
        </tr>
    @endforeach
    @foreach($choices as $choice)
        <tr>
            <td></td>
            <td>{{$choice->name}}</td>
        </tr>
    @endforeach
</table>
{{--@endsection--}}
