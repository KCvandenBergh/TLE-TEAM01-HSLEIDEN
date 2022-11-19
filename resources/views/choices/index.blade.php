@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Dialogue</th>
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
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--                    {{ $scenarios->links('pagination::bootstrap-4')  }}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

