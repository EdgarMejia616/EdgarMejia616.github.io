<?php
$mysqli = include 'conexion.php';

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $nacionalidad = $_POST['nacionalidad'];
    $genero = $_POST['genero'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $estado = $_POST['estado'];
    
    $sql = "INSERT INTO paciente (paciente_dni, paciente_nombre, paciente_apellido, paciente_edad, paciente_genero, paciente_fechaIngreso, paciente_telefono, paciente_direccion, paciente_nacionalidad, paciente_correo, paciente_estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("sssssssssss", $dni, $nombre, $apellido, $edad, $genero, $fecha_ingreso, $telefono, $direccion, $nacionalidad, $email, $estado);
        
        if($stmt->execute()){
            echo "<script>alert('Registro insertado correctamente.'); window.location.href = 'Paciente.php';</script>";
        } else{
            echo "<script>alert('Error al intentar insertar el registro.'); window.location.href = 'Paciente.php';</script>";
        }
    } else {
        echo "<script>alert('Error preparando la consulta: " . $mysqli->error . "'); window.location.href = 'Paciente.php';</script>";
    }
    
    $stmt->close();
    $mysqli->close();
}
?>