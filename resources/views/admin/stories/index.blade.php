@extends('layouts.app')
@section('content')

        <div class="card">
            <div class="row">

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($stories as $story)
                                        <tr>
                                            <td>{{ $story->title }}</td>
                                            <td>{{ $story->description }}</td>
                                            <td>
                                                <a href="{{ route('stories.edit', $story->id) }}"
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
