@extends('choices.layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Choice</div>
        <div class="card-body">
            <form action="{{ route('choices.update', $choices->id) }}" method="post">
                @csrf
                @method("PATCH")
                <input type="hidden" id="id" value="{{ $choices->id }}"/>
                <label>Title</label>
                <input type="text" name="name" id="name" value="{{ $choices->name }}" class="form-control"/>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Scenario</label><br>
                <input type="number" name="scenario" id="scenario" value="{{ $choices->scenario_id }}" class="form-control">


                <button type="submit" value="Update" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
