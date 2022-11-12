<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentcation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
</head>

<body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                    <h4>Registratie</h4>
                    <hr>
                    <form action="{{route('register-user')}}" method="post">
                        @if(session::has('Gelukt!'))
                            <div class="alert alert-success ">{{session::get('Gelukt!')}}</div>
                        @endif
                            @if(session::has('Oei, er ging iets mis...'))
                                <div class="alert alert-danger">{{session::get('Oei, er ging iets mis...')}}</div>
                            @endif
                        <div class="form-group">
                            <label for="name">Volledige naam</label>
                            <input type="text" class="form-control" placeholder="Vul je volledige naam in"
                            name="name" value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="email">email adres</label>
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
                        <a href="login">Heb je al een account? Log hier in</a>
                    </form>
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</script>
</html>
