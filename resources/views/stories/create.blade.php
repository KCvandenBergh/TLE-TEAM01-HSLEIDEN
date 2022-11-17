@extends('stories.layout')
@section('content')

    <div class="card">
        <div class="card-header">Create Story</div>
        <div class="card-body">
            <form action="{{ route('stories.store') }}" method="post">
                @csrf
                <label>Title</label>
                <input type="text" name="title" id="title"class="form-control"/>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Description</label>
                <input type="text" name="description" id="description" class="form-control"/>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Zichtbaar (0 of 1)</label>
                <input type="number" min="0" max="1" name="is_visible" id="is_visible" class="form-control"/>
                @error('is_visible')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" value="Create" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
