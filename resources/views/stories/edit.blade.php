@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Edit Story</div>
        <div class="card-body">
            <form action="{{ route('stories.update', $story->id) }}" method="post" id="editForm">
                @csrf
                @method("PATCH")
                <input type="hidden" id="id" value="{{ $story->id }}"/>
                <label>Title</label>
                <input type="text" name="title" id="title" value="{{ $story->title }}" class="form-control"/>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Description</label>
                <textarea class="form-control"
                          form="editForm"
                          name="description"
                          placeholder="Voeg hier een Beschrijving voor dit verhaal toe">{{$story->description ?? old('description') }}</textarea>

                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" value="Update" class="btn btn-primary">Update</button>
            </form>
                    </div>
    </div>
@endsection
