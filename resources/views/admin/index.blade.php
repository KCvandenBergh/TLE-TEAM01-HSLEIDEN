@extends('layouts.app')
@section('content')

        <div class="card">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Acties</th>
                </tr>
                @foreach($stories as $story)
                    <tr>
                        <td>{{$story->title}}</a></td>
                        <td>{{$story->description}}</td>
                        <td><a href="{{route('admin.stories.show', $story->id)}}">Scenario's</a><br>
                            <a href="{{route('stories.edit', $story->id)}}">Casus informatie aanpassen</a><br>
                            <form action="{{ route('stories.destroy', $story->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Are you sure you want to delete?')">Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="{{route('stories.create')}}" class="button">Maak een nieuwe casus</a>
        </div>
@endsection
