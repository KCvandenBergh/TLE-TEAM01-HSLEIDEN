@extends('layouts.app')

@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($story as $case)
            <tr>
                <td>{{$case->title}}</td>
                <td>{{$case->description}}</td>
                <td>
                    <button><a href="{{route('cases.show',$case->id)}}">View</a></button>
                </td>
            </tr>

        @endforeach
    </table>
@endsection
