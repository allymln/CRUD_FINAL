<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DistroRICH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0-beta2/css/all.min.css" integrity="sha384-3nVEXmw3dKPQ5zG5t7ahpzPTcF6kRN5FLYLjz/DUqDVi9zI8vA6j5p3vhbB8bUCI" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d42fcaf30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="img/disco.png">
</head>

<body>
    <div class="container">
        <br>
        <br>

        <h1 class="text-center">DistroRich</h1>
        <br>
        <h3 class="text-center">Registra tu musica... ¡YA!</h3>
        <br>
        <form class="col-6 mx-auto" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="TituloSingle">Titulo del Single</label>
                    <input type="text" class="form-control" name="TituloSingle" placeholder="Introduzca el título del single" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cancion">Canción</label>
                    <input type="text" class="form-control" name="cancion" placeholder="Canción" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" placeholder="Autor" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="genero">Género</label>
                    <input type="text" class="form-control" name="genero" placeholder="Género" required>
                </div>
            </div>
            <div class="form-group">
                <label for="FechaLanzamiento">Fecha de lanzamiento</label>
                <input type="date" class="form-control" name="FechaLanzamiento" required>
            </div>
            <br>
            <button type="submit" class="btn btn-danger btn-block" name="btncrear" value="ok">Crear</button>

        </form>
    </div>
    <div>Lista de tu musica registrada.
        <?php
    include "modelo/conexion.php";
    include "controllers/registro_musica.php";
    ?>
        <table class="table">
            <thead class="bg-danger">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Cancion</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Fecha de Lanzamiento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql = $conexion->query(" select * from singles ");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->TituloSingle ?></td>
                        <td><?= $datos->Cancion ?></td>
                        <td><?= $datos->Autor ?></td>
                        <td><?= $datos->Genero ?></td>
                        <td><?= $datos->FechaLanzamiento ?></td>
                        <td>
                            <a href="modificar_musica.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="controllers/eliminar_musica.php" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>