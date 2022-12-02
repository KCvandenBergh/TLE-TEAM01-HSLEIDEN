<div class="card">
    <div class="card-header">
        <div class="row justify-content-between">
            <div class="col-md-8">
                <h1 class="card-title">Story {{ $story->id }} : {{ $story->title }}</h1>
            </div>
            @if(Auth::check())
                <div class="col-md-2 ">
                    @if(isset($save->id))
                        <a href="{{ route('saves.destroy', $save->id) }}" class="btn btn-lg btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('deletion-form').submit();">
                            Verwijderen
                        </a>
                        <form id="deletion-form" action="{{ route('saves.destroy', $save->id) }}" method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('saves.create') }}" class="btn btn-lg btn-success">Opslaan</a>
                    @endif
                </div>
            @endif
            <div class="col-md-2 ">
                @if(isset($save->id))
                    <a href="{{ route('download.pdf', [$story->id, $save->id]) }}" class="btn btn-lg btn-info">Download</a>
                @else
                    <a href="{{ route('download.pdf', $story->id) }}" class="btn btn-lg btn-info">Download</a>
                @endif
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p class="fw-bold">Naam: {{ $author->name }}</p>
            </div>
            <div class="col-auto">
                <p class="fw-bold">Datum: {{ date_format($save->created_at, "d-m-'y") }}</p>
            </div>
        </div>
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th class="col-sm-1"># Scenario</th>
                <th class="col-md-1"># Keuze</th>
                <th class="col-md-5 scen-col">Scenario</th>
                <th class="col-md-2">Keuze</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @php
                $i = 0;
            @endphp
            @foreach($save->choices as $choice)
                <tr>
                    <td>{{ $scenarios[$i]->id }}</td>
                    <td>{{ $choice->id }}</td>
                    <td class="text-start scen-col">{{ $scenarios[$i]->dialogue }}</td>
                    <td class="text-start">{{ $choice->name }}</td>
                </tr>
                @if($i === $save->choices->count() -1)
                    <tr class="table-group-divider table-danger">
                        <td>{{ $scenarios[count($scenarios) -1]->id }}</td>
                        <td> X</td>
                        <td class="text-start scen-col">{{ $scenarios[count($scenarios) -1]->dialogue }}</td>
                        <td></td>
                    </tr>
                @endif
                @php
                    $i++;
                @endphp
            @endforeach
            </tbody>
        </table>
    </div>
</div>
