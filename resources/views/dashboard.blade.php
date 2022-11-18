@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Welkom op je dashboard</h4>
            <hr>
            <table class="table">
                <thead>
                  <th>naam</th>
                  <th>email</th>
                  <th>action</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{$data -> name}}</td>
                    <td>{{$data -> email}}</td>
                    <td><a href={{route('logout')}}>Logout</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




