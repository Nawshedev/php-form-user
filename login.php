

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Link -->
    <!-- CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <title>Connexion</title>
  </head>
  <body>
    <div
      class="d-flex justify-content-center align-items-center bg-light"
      style="min-height: 100vh"
    >
      <form
        class="p-5 rounded shadow"
        style="width: 40rem"
        action="loginttt.php"
        method="post"
      >
        <h1 class="text-center pb-5 display-4">Se connecter</h1>
        <?php if (isset ($_GET['error'])){?>

        
        <div class="alert alert-danger" role="alert">
  <?=$_GET['error']?>
</div><?php } ?>
        <div class="mb-3">
          <label for="pseudo" class="form-label">Pseudo</label>
          <input
            type="text"
            class="form-control"
            id="pseudo"
            name="pseudo"
          />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="password" />
        </div>

        <br />

       


        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <br />

        <p>Pas encore de compte? <a href="index.php">Enregistrez-vous</a></p>
      </form>
    </div>
    <script src="script.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
