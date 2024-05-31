<?php
session_start();
if(isset($_SESSION['id'])&& isset($_SESSION['nom_public'])):?>

<!--Zona html--->
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div >
        <div >
            <h3 >
              Benvingut <?php echo $_SESSION['nom_public'] ?>
            </h3>
            <a href="logout.php">Tanca la sessió</a>
        </div>
    </div>
   
  </body>
</html>

<?php else: ?>

    <?php
//Algu està intentant accedir directament a la pag web segura
header("Location:index.php");
?>


<?php endif; ?>