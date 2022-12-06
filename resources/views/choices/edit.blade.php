@extends('layouts.app')
@section('content')

        <div class="card">
            <div class="card-header">Edit Choice</div>
            <div class="card-body">
                <form action="{{ route('choices.update', $choice->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <input type="hidden" id="id" value="{{ $choice->id }}"/>
                    <label>Keuze</label>
                    <input type="text" name="name" id="name" value="{{ $choice->name }}" class="form-control"/>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>Vervolg scenario</label><br>
                    <select name="scenario_id" id="scenario_id" class="form-select">
                        @foreach($scenarios as $scenario)
                            @if($choice->scenario_id === $scenario->id)
                                <option value="{{ $scenario->id }}"
                                        selected> {{$scenario->id .': '. substr($scenario->dialogue, 0, 200)}}...
                                </option>
                            @else
                                <option
                                    value="{{ $scenario->id }}"> {{$scenario->id .': '. substr($scenario->dialogue, 0, 180)}}
                                    ...
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <button type="submit" value="Update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
@endsection
