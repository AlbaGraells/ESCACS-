<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sessió</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
      
        <div class="formulario">
            <form action="./php/login.php" method="post">
                <h4 class="text4">Iniciar sessió per començar a jugar</h4>
                <?php if(isset($_GET['error'])): ?>
                    <div><?php echo $_GET['error']; ?></div>
                <?php endif; ?>
                <div class="campos">
                <div>
                    <label class="nom"for="uname">Nom d'usuari:</label>
                    <div class="input-container">
                    <input class="inpt" type="text" placeholder="Introdueix el nom d'usuari" id="uname" name="nom_usuari">
               </div> </div>
                <div>
                    <label class="nom" for="pass">Contrasenya:</label>
                    <div class="input-container">
                    <input  class="inpt" placeholder="Introdueix la contrasenya" type="password" id="pass" name="contrassenya">
                </div> </div>
                <div>
                    <button class="btn" type="submit">Iniciar sesió</button>
                    <a  class="link" href="signup.php" class="link-secondary">Registrar-se</a>
                </div>
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>
