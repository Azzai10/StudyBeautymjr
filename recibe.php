<?php
// Conexión con la base de datos
$con = mysqli_connect("localhost", "root", "", "sugerencias");

if (!$con) {
    die("Error en la conexión con la base de datos: " . mysqli_connect_error());
}

// Obtener y limpiar datos del formulario
$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
$pista = mysqli_real_escape_string($con, $_POST["pista"]);
$atencion = mysqli_real_escape_string($con, $_POST["atencion"]);
$servicio = mysqli_real_escape_string($con, $_POST["servicio"]);
$destacado = mysqli_real_escape_string($con, $_POST["destacado"]);
$volverias = mysqli_real_escape_string($con, $_POST["volverias"]);
$propuesta = mysqli_real_escape_string($con, $_POST["propuesta"]);

// Guardar en la base de datos
$sql = "INSERT INTO tiposerv (nombre, pista, servicio, atencion, volverias, destacado, propuesta) 
        VALUES ('$nombre', '$pista', '$servicio', '$atencion', '$volverias', '$destacado', '$propuesta')";

if (mysqli_query($con, $sql)) {
    // Redirigir si se guardó correctamente
    echo "<script>alert('Formulario enviado exitosamente.'); window.location.href = 'index.html';</script>";
} else {
    echo "Error al guardar en la base de datos: " . mysqli_error($con);
}

mysqli_close($con);
?>
