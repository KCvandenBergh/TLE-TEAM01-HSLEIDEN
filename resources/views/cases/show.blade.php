@extends('layouts.app')

@section('content')

    <h1>{{$story->title}}</h1>
    <h2>{{$story->id}}</h2>
    <p>{{$story->description}}</p>

@endsection
