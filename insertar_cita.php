<?php
$conexion = include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $jornada = $_POST['jornada'];
    $medico = $_POST['medicoSeleccionado']; 
    $problema = $_POST['problema'];

    try {
        
        $sentenciaSQL = "INSERT INTO cita (cita_cedula, cita_nombre, cita_apellido, cita_genero, cita_telefono, cita_fecha, cita_hora, cita_jornada, cita_medico, cita_problema) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $ps = $conexion->prepare($sentenciaSQL);

        if ($ps === false) {
            die("Error al preparar la consulta: " . $conexion->error);
        }

        $ps->bind_param("ssssssssss", $cedula, $nombre, $apellido, $genero, $telefono, $fecha, $hora, $jornada, $medico, $problema);

        $resultado = $ps->execute();

        if ($resultado === false) {
            echo "<script>alert('Error al intentar insertar la cita.'); window.location.href = 'Citas.php';</script>";
        } else {
            echo "<script>alert('Cita guardada exitosamente.'); window.location.href = 'Citas.php';</script>";
        }

    } catch (Exception $ex) {
        echo "<script>alert('Error al guardar la cita: " . $ex->getMessage() . "'); window.location.href = 'Citas.php';</script>";
    }
} else {
    echo json_encode(array('error' => 'No se recibieron datos por el método POST.'));
}
?>
