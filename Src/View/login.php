<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>Login</h1> <br>

            <p> Accédez au site en vous connectant </p> <br>
            <div class="col-6">
            <form method="post" action="?page=login">
                <div class="form-group">
                    <label for="login">identifiant</label> <br>
                    <input type="text" name="login" id="login"
                           value="<?= (isset($_COOKIE['login'])) ? $_COOKIE['login'] : null ?>"
                           placeholder="votre identifiant">
                </div>

                <div class="form-group">
                    <label for="password">mot de passe</label> <br>
                    <input type="text" name="password" id="password"
                           value="<?= (isset($_COOKIE['password'])) ? $_COOKIE['password'] : null ?>"
                           placeholder="votre mot de passe">
                </div>

                <div class="form-check">
                    <input type="checkbox" name="remember_me" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="remember_me">se souvenir de moi</label>
                </div> <br>

                <button type="submit" class="btn btn-primary">connexion</button>

            </form>
        </div>
        </div>
    </div>
</div>
</body>
</html>