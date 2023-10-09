<?php
include "modelo/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $TituloSingle = $_POST["TituloSingle"];
    $Cancion = $_POST["cancion"];
    $Autor = $_POST["autor"];
    $Genero = $_POST["genero"];
    $FechaLanzamiento = $_POST["FechaLanzamiento"];

    $sql = "UPDATE singles SET TituloSingle='$TituloSingle', Cancion='$Cancion', Autor='$Autor', Genero='$Genero', FechaLanzamiento='$FechaLanzamiento' WHERE id=$id";
    
    if ($conexion->query($sql) === TRUE) {
        echo"";
    } else {
        echo '<div class="alert alert-danger">Error al modificar el álbum: ' . $conexion->error . '</div>';
    }
}

$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM singles WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFY DistroRICH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0-beta2/css/all.min.css" integrity="sha384-3nVEXmw3dKPQ5zG5t7ahpzPTcF6kRN5FLYLjz/DUqDVi9zI8vA6j5p3vhbB8bUCI" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d42fcaf30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="img/disco.png">
</head>

<body>
    <form class="col-6 mx-auto" method="POST">
        <h5 class="text-center alert alert-secondary">Modificar tu álbum</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

        <?php
        include "controllers/modificar_musica.php";
        while ($datos = $sql->fetch_object()){ ?>
        
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="TituloSingle">Titulo del Single</label>
                    <input type="text" class="form-control" name="TituloSingle" value="<?= $datos->TituloSingle ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="cancion">Canción</label>
                    <input type="text" class="form-control" name="cancion" value="<?= $datos->Cancion ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" value="<?= $datos->Autor ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="genero">Género</label>
                    <input type="text" class="form-control" name="genero" value="<?= $datos->Genero ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="FechaLanzamiento">Fecha de lanzamiento</label>
                <input type="date" class="form-control" name="FechaLanzamiento" value="<?= $datos->FechaLanzamiento ?>">
            </div>
            <input type="hidden" name="id" value="<?= $datos->id ?>">
            <?php }
            ?>
            <br>
            <button type="submit" class="btn btn-danger btn-block" name="btnmodificar" value="ok">Modificar</button>
    
        </form>
</body>
<!-- Código desarrollado por Allison Molano -->
<!-- Todos los derechos de autor están reservados para este código. -->
</html>
