<?php
$mysqli = include 'conexion.php';

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$dni = $_POST['txtDNI'];
$nombre = $_POST['txtNombre'];
$edad = $_POST['txtEdad'];
$genero = $_POST['txtGenero'];
$fecha_ingreso = $_POST['txtFecha'];
$telefono = $_POST['txtTelefono'];
$direccion = $_POST['txtDireccion'];
$nacionalidad = $_POST['txtNacionalidad'];
$religion = $_POST['txtReligion'];
$ocupacion = $_POST['txtOcupacion'];
$estado = $_POST['txtEstado'];
$sintomas = $_POST['txtSintoma'];
$historia = $_POST['txtHistoria'];
$patologico = $_POST['txtPatologico'];
$alergico = $_POST['txtAlergico'];
$gineco = $_POST['txtGineco'];
$farmaco = $_POST['txtFarmaco'];
$presion = $_POST['txtPresion'];
$pulso = $_POST['txtPulso'];
$temp = $_POST['txtTemp'];
$card = $_POST['txtCard'];
$resp = $_POST['txtResp'];
$sat = $_POST['txtSat'];
$apariencia = $_POST['txtApariencia'];
$examenf = $_POST['txtExamenF'];
$examenes = $_POST['txtExamenes'];
$diagnostico = $_POST['txtDiagnostico'];
$tratamiento = $_POST['txtTratamiento'];


$foto = file_get_contents($_FILES['foto']['tmp_name']); 


$sql = "INSERT INTO pacientec (pacientex_di, pacientex_nombre, pacientex_edad, pacientex_genero, pacientex_fecha, pacientex_telefono, pacientex_direccion, pacientex_nacionalidad, pacientex_religion, pacientex_ocupacion, pacientex_estado, pacientex_sintomas, pacientex_historia, pacientex_patologico, pacientex_alergico, pacientex_gineco, pacientex_farmaco, pacientex_presion, pacientex_pulso, pacientex_temp, pacientex_card, pacientex_resp, pacientex_sat, pacientex_apariencia, pacientex_examenf, pacientex_examenes, pacientex_diagnostico, pacientex_tratamiento, pacientex_foto) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param("sssssssssssssssssssssssssssss", $dni, $nombre, $edad, $genero, $fecha_ingreso, $telefono, $direccion, $nacionalidad, $religion, $ocupacion, $estado, $sintomas, $historia, $patologico, $alergico, $gineco, $farmaco, $presion, $pulso, $temp, $card, $resp, $sat, $apariencia, $examenf, $examenes, $diagnostico, $tratamiento, $foto);

    if($stmt->execute()){
        echo "<script>alert('Registro insertado correctamente.'); window.location.href = 'VerExpediente.php';</script>";
    } else{
        echo "<script>alert('Error al intentar insertar el registro: " . $stmt->error . "'); window.location.href = 'VerExpediente.php';</script>";
    }
} else {
    echo "<script>alert('Error preparando la consulta: " . $mysqli->error . "'); window.location.href = 'VerExpediente.php';</script>";
}


$stmt->close();
$mysqli->close();
?>
