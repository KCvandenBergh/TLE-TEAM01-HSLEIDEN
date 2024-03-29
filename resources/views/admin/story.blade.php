@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="overview">
            <h1>Scenario's - {{$story->title}}</h1>
            <table class="table">
                <tr>
                    <th>Scenario's</th>
                    <th>Keuzes</th>
                </tr>
                @foreach($scenarios as $scenario)
                    <tr>
                        <td>{{$scenario->dialogue}}
                            <a href="{{route('scenarios.edit', $scenario->id)}}"><i class="bi bi-pen"></i></a>
                            <form action="{{ route('scenarios.destroy', $scenario->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"
                                        onclick="return confirm('Are you sure you want to delete?')">Delete
                                </button>
                            </form>
                        </td>
                        @foreach($scenario->choices as $choice)
                            <td>{{$choice->name}}
                                <a href="{{route('choices.edit', $choice->id)}}"><i class="bi bi-pen"></i></a>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
            <br>
            {{ $scenarios->links()  }}
        </div>
    </div>
@endsection
