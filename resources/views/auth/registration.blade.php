@extends('layouts.app')
@section('content')

        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <h4>Registratie</h4>
                    <hr>
                    <form action="{{route('register-user')}}" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        @if(session('fail'))
                            <div class="alert alert-danger">{{session('Oei, er ging iets mis...')}}</div>
                        @endif
                        <div class="form-group">
                            <label for="name">Volledige naam</label>
                            <input type="text" class="form-control" placeholder="Vul je volledige naam in"
                                   name="name" value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email adres</label>
                            <input type="text" class="form-control" placeholder="Vul je email adres in"
                                   name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" placeholder="Vul een wachtwoord in"
                                   name="password" value="{{old('password')}}">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn block btn-primary" type="submit">Registreer</button>
                        </div>
                        <br>
                    </form>
                    <a href="{{route('login')}}">Heb je al een account? Log hier in</a>
                </div>
            </div>
        </div>
@endsection
