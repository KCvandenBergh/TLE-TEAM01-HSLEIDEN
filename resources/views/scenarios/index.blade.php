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
                                    <th>Scenario</th>
                                    <th>Actie</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($scenarios as $scenario)
                                    <tr>
                                        <td>{{ $scenario->dialogue }}</td>
                                        <td>
                                            <a href="{{ route('scenarios.edit', $scenario->id) }}"
                                               title="edit scenario">
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('scenarios.destroy', $scenario->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"
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
                            {{ $scenarios->links('pagination::bootstrap-4')  }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

