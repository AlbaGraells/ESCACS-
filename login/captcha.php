<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>

        <div class="container my-5 p-5 col-4 shadow rounded">

            <h2 class="center">Inicia sessió</h2>

            <!--------- ZONA D'ERRORS ----------->

            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

                <div class="mb-3">

                    <label for="usuari" class="form-label">Nom d'usuari:</label>
                    <input type="text" class="form-control" id="usuari" name="usuari" required>
                    
                </div>

                <div class="mb-3">

                    <label for="contrasenya" class="form-label">Contrasenya:</label>
                    <input type="password" class="form-control" id="contrasenya" name="password" required>

                </div>

               <!-- <div class="g-recaptcha" data-sitekey="6Lcov9UpAAAAAF4idvV81UDbTWv5cOL1zoByHO_P"></div>-->

                <button type="submit" class="btn btn-primary">Inicia sessió</button>

            </form>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>