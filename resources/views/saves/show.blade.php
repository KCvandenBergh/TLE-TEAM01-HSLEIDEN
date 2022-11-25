@extends('layouts.app')
@section('content')
    <h1>Story: {{ $save->story_id }}</h1>
    <ul class="list-group-flush">
        @foreach($save->choices as $choice)
            <li class="list-group-item">
                <div class="card">
                {{ $choice->name }}
                </div>
            </li>
            <li class="list-group-item">
                {{ $choice->scenario_id }}
            </li>
        @endforeach
    </ul>
@endsection
