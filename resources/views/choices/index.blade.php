@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="card">
            <div class="overview">
                <div class="col">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Keuzes</th>
                                    <th>Actie</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($choices as $choice)
                                    <tr>
                                        <td>{{ $choice->name }}</td>
                                        <td>
                                            <a href="{{ route('choices.edit', $choice->id) }}"
                                               title="edit scenario">
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('choices.destroy', $choice->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit"
                                                        onclick="return confirm('Are you sure you want to delete?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                            {{ $choices->links()  }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

