@section('content')

<div class="card">
    <div class="card-header">Edit Scenarios</div>
    <div class="card-body">
        <form action="{{ url('scenarios/' .$scenarios->id) }}" method="post">
            @method("PUT")
            @csrf
            <input type="hidden" id="id" value="{{ $scenarios->id }}"/>
            <label>Dialogue</label>
            <input type="text" name="dialogue" id="dialogue" value="{{ $scenarios->dialogue }}" class="form-control"/>
            @error('dialogue')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>
</div>
@endsection
