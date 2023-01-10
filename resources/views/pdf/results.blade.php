<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Results</title>
    <style>
    h1 {text-align: center;}
    footer {
        display: grid;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    footer p{
        text-align: center;
    }

    table.tableStyle {
        background-color: #FFFFFF;
        text-align: center;
        border-collapse: collapse;
    }
    table.tableStyle td, table.tableStyle th {
        border: 1px solid #AAAAAA;
        padding: 3px 2px;
    }
    table.tableStyle tbody td {
        font-size: 13px;
    }
    table.tableStyle tr:nth-child(even) {
        background: #D9D9D9;
    }
    table.tableStyle thead {
        background: #000000;
        border-bottom: 2px solid #444444;
    }
    table.tableStyle thead th {
        font-size: 15px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: center;
        border-left: 2px solid #D0E4F5;
    }
    table.tableStyle thead th:first-child {
        border-left: none;
    }
    </style>
</head>
<body>

<h1>Story {{ $story->id }} : {{ $story->title }}</h1>

<div>
    <p>Naam: {{ $author->name }}</p>
    <p>Datum: {{ date_format($save->created_at, "d-m-'y") }}</p>
</div>

<table class="tableStyle">
    <thead>
    <tr>
        <th># Scenario</th>
        <th># Keuze</th>
        <th>Scenario</th>
        <th>Keuze</th>
    </tr>
    </thead>
    <tbody>
    @php
        $i = 0;
    @endphp
    @foreach($save->choices as $choice)
        <tr>
            <td>{{ $scenarios[$i]->id }}</td>
            <td>{{ $choice->id }}</td>
            <td>{{ $scenarios[$i]->dialogue }}</td>
            <td>{{ $choice->name }}</td>
        </tr>
        @if($i === $save->choices->count() -1)
            <tr>
                <td>{{ $scenarios[count($scenarios) -1]->id }}</td>
                <td> X</td>
                <td>{{ $scenarios[count($scenarios) -1]->dialogue }}</td>
                <td></td>
            </tr>
        @endif
        @php
            $i++;
        @endphp
    @endforeach
    </tbody>
</table>
</body>
</html>

