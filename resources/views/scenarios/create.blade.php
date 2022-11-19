@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Create Scenarios</div>
        <div class="card-body">
            <form action="{{ route('scenarios.store') }}" method="post">
                @csrf
                <label>Dialogue</label>
                <input type="text" name="dialogue" id="dialogue" class="form-control"/>
                @error('dialogue')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" value="Create" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
