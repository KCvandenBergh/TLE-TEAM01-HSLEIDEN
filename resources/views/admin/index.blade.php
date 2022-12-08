@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="overview">
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
                    <td id="actions">
                        <a href="{{route('admin.stories.show', $story->id)}}"
                           title="edit scenario" class="btn btn-primary btn-sm">Edit Scenario

                        </a>
                        <a href="{{route('stories.edit', $story->id)}}"
                           title="edit scenario" class="btn btn-primary btn-sm">Edit Casus

                        </a>
                        <form action="{{ route('stories.destroy', $story->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Are you sure you want to delete?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{route('stories.create')}}"
           title="edit scenario">
            <button class="btn btn-primary btn-sm">Maak casus
            </button>
        </a>
    </div>
    </div>

@endsection
