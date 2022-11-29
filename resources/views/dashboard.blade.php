@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col">
                    <h4>Welkom op je dashboard</h4>
                    <hr>
                    <table class="table">
                        <thead>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$data -> name}}</td>
                            <td>{{$data -> email}}</td>
                            <td><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @include('partials._savesoverview')</div>
    </div>
@endsection




