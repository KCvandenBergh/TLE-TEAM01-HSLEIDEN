@extends('layouts.app')
@section('content')

        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <h4>Log in</h4>
                    <hr>
                    <form action="{{route('login-user')}}" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        @if(session('fail'))
                            <div class="alert alert-danger">{{session('fail')}}</div>
                        @endif
                        <div class="form-group">
                            <label for="email">Email adres</label>
                            <input type="text" class="form-control" placeholder="Vul je email adres in"
                                   name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" placeholder="Vul je wachtwoord in"
                                   name="password" value="">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn block btn-primary" type="submit">Log in</button>
                        </div>
                        <br>
                        <a href="{{route('register')}}">Ik ben nieuw hier</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
