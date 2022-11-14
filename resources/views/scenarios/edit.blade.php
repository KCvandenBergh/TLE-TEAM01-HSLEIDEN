@extends('scenarios.layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Scenarios</div>
    <div class="card-body">
        <form action="{{ route('scenarios.update', $scenario->id) }}" method="post">
            @csrf
            @method("PATCH")
            <input type="hidden" id="id" value="{{ $scenario->id }}"/>
            <label>Dialogue</label>
            <input type="text" name="dialogue" id="dialogue" value="{{ $scenario->dialogue }}" class="form-control"/>
            @error('dialogue')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" value="Update" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
