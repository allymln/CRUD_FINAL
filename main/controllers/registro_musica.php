<?php
if (!empty($_POST["btncrear"])) {
    if (!empty($_POST["TituloSingle"]) && !empty($_POST["cancion"]) && !empty($_POST["autor"]) && !empty($_POST["genero"]) && !empty($_POST["FechaLanzamiento"])) {
        
        $TituloSingle = $_POST["TituloSingle"];
        $cancion = $_POST["cancion"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $FechaLanzamiento = $_POST["FechaLanzamiento"];

        $sql = "INSERT INTO singles (TituloSingle, Cancion, Autor, Genero, FechaLanzamiento) VALUES ('$TituloSingle', '$cancion', '$autor', '$genero', '$FechaLanzamiento')";

        if ($conexion->query($sql) === TRUE) {
            echo '<div class="alert alert-success">Album registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-warning">Error al registrar album: ' . $conexion->error . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algun campo esta vacío</div>';
    }
}
?>
<!-- Código desarrollado por Allison Molano -->
<!-- Todos los derechos de autor están reservados para este código. -->