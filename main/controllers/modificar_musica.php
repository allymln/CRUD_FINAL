<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["TituloSingle"]) && !empty($_POST["cancion"]) && !empty($_POST["autor"]) && !empty($_POST["genero"]) && !empty($_POST["FechaLanzamiento"])) {

        $id = $_POST["id"];
        $TituloSingle = $_POST["TituloSingle"];
        $cancion = $_POST["cancion"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $FechaLanzamiento = $_POST["FechaLanzamiento"];
        $id = $_POST["id"];

        // Construye la consulta SQL de actualización
        $sql = "UPDATE singles SET TituloSingle='$TituloSingle', Cancion='$cancion', Autor='$autor', Genero='$genero', FechaLanzamiento='$FechaLanzamiento' WHERE id=$id";

        if ($conexion->query($sql) == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar el álbum: ' . $conexion->error . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}
?>
