<div class="card">
    <div class="card-header">
        <h3 class="card-title">Opgeslagen resultaten</h3>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Story</th>
                <th>Titel</th>
                <th>Datum</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($saves as $save)
                <tr style="transform: rotate(0);">
                    <td>{{ $i }}</td>
                    <td>{{ $save->story_id }}</td>
                    <td>{{ $save->story->title }}</td>
                    <td>{{ $save->updated_at }}</td>
                    <td><a href="{{ route('saves.show', $save->id) }}" class="stretched-link btn btn-sm btn-info">Tonen</a></td>

                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
            </tbody>
        </table>
    </div>
</div>

