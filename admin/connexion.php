
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/form-connexion.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="admin.php">
  <img class="mb-4" src="/images/logo_admr.png" alt="" width="250" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
  <div class="alert alert-danger" role="alert">
    Identifiants incorrects
  </div>
  <label for="email" class="sr-only">Email</label>
  <input type="email" id="email" class="form-control" placeholder="Email" required autofocus>
  <label for="pass" class="sr-only">Mot de passe</label>
  <input type="password" id="pass" class="form-control" placeholder="Mot de passe" required>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Se souvenir de moi
    </label>
  </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Se connecter">
  <a href="/index.php">Retour</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</body>
</html>
