@extends('choices.layout')
@section('content')

    <div class="card">
        <div class="card-header">Create Choice</div>
        <div class="card-body">
            <form action="{{ route('choices.store')}}" method="post">
                @csrf
                <label>Title</label>
                <input type="text" name="name" id="name" class="form-control"/>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Scenario</label><br>
                <select name="scenario_id" id="scenario_id" class="form-select">
                    @foreach($scenarios as $scenario)
                            <option
                                value="{{ $scenario->id }}"> {{$scenario->id .': '. substr($scenario->dialogue, 0, 180)}}
                                ...
                            </option>
                    @endforeach
                </select>
                <button type="submit" value="Update" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
