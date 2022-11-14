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
            <h4>Log in</h4>
            <hr>
            <form action="<?php echo e(route('login-user')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">email adres</label>
                    <input type="text" class="form-control" placeholder="Vul je email adres in"
                           name="email" value="">
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" class="form-control" placeholder="Vul je wachtwoord in"
                           name="password" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn block btn-primary" type="submit">Log in</button>
                </div>
                <br>
                <a href="registration">Ik ben nieuw hier</a>
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




<?php
 ?><?php /**PATH C:\xampp\htdocs\TLE-TEAM01-HSLEIDEN\resources\views/auth/login.blade.php ENDPATH**/ ?>