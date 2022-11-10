@extends('layouts.app')

@section('content')

    <h1>{{$stories->title}}</h1>
    <h2>{{$stories->id}}</h2>
    <p>{{$stories->description}}</p>

@endsection
