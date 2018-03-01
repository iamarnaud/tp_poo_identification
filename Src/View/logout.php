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

            <h1>Logout</h1>

            <p> Bonjour, <?= $_SESSION['login'] ?></p>
            <p> Il est vachement bien pensé au niveau du webdesign notre ! </p>

            <a href="?page=logout&action=disconnect">Me déconnecter</a>
        </div>
    </div>
</div>
</body>
</html>