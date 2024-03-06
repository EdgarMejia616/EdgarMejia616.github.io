<?php
$mysqli = include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['txtDNI'];
    $sql = "SELECT * FROM pacientec WHERE pacientex_di = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $dni);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nombre = $row['pacientex_nombre'];
            $edad = $row['pacientex_edad'];
            $genero = $row['pacientex_genero'];
            $telefono = $row['pacientex_telefono'];
            $direccion = $row['pacientex_direccion'];
            $nacionalidad = $row['pacientex_nacionalidad'];
            $religion = $row['pacientex_religion'];
            $ocupacion = $row['pacientex_ocupacion'];
            $sintomas = $row['pacientex_sintomas'];
            $fecha = $row['pacientex_fecha'];
            $historia = $row['pacientex_historia'];
            $patologico = $row['pacientex_patologico'];
            $alergico = $row['pacientex_alergico'];
            $gineco = $row['pacientex_gineco'];
            $farmaco = $row['pacientex_farmaco'];
            $presion = $row['pacientex_presion'];
            $pulso = $row['pacientex_pulso'];
            $temp = $row['pacientex_temp'];
            $card = $row['pacientex_card'];
            $resp = $row['pacientex_resp'];
            $sat = $row['pacientex_sat'];
            $apariencia = $row['pacientex_apariencia'];
            $examenf = $row['pacientex_examenf'];
            $examenes = $row['pacientex_examenes'];
            $diagnostico = $row['pacientex_diagnostico'];
            $tratamiento = $row['pacientex_tratamiento'];
            $foto = $row['pacientex_foto'];
        } else {
            echo "<p>No se encontraron resultados para el DNI proporcionado.</p>";
        }
    } else {
        echo "<p>Error al preparar la consulta: " . $mysqli->error . "</p>";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Expediente</title>
    <link rel="icon" href="/imagenes/expediente.png" type="image/png">
    <link rel="stylesheet" href="/estilos/style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
        
            <?php if (!empty($nombre)) { ?>
                <div class="botones">
            
            <a href="index.php"><button type="button">Regresar</button></a>
        </div>
                <h2>EXPEDIENTE CLINICO</h2>
                <br>
                <h3>Datos Generales</h3>
                <div class="datos-generales">
                    <div class="form-group">
                        <label for="txtDNI">DNI:</label>
                        <input type="text" id="txtDNI" name="txtDNI" value="<?php echo $dni; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" value="<?php echo $nombre; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtEdad">Edad:</label>
                        <input type="text" id="txtEdad" name="txtEdad" value="<?php echo $edad; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtGenero">Género:</label>
                        <input type="text" id="txtGenero" name="txtGenero" value="<?php echo $genero; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtTelefono">Teléfono:</label>
                        <input type="text" id="txtTelefono" name="txtTelefono" value="<?php echo $telefono; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtDireccion">Dirección:</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" value="<?php echo $direccion; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtNacionalidad">Nacionalidad:</label>
                        <input type="text" id="txtNacionalidad" name="txtNacionalidad" value="<?php echo $nacionalidad; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtReligion">Religión:</label>
                        <input type="text" id="txtReligion" name="txtReligion" value="<?php echo $religion; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtOcupacion">Ocupación:</label>
                        <input type="text" id="txtOcupacion" name="txtOcupacion" value="<?php echo $ocupacion; ?>" readonly>
                    </div>
                </div>

                <h3>Historia de Enfermedad Actual</h3>
                <div class="historia-enfermedad">
                    <div class="form-group">
                        <label for="txtSintoma">Síntomas:</label>
                        <textarea id="txtSintoma" name="txtSintoma" rows="4" readonly><?php echo $sintomas; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="txtFecha">Fecha:</label>
                        <input type="date" id="txtFecha" name="txtFecha" value="<?php echo $fecha; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtHistoria">Historia:</label>
                        <textarea id="txtHistoria" name="txtHistoria" rows="4" readonly><?php echo $historia; ?></textarea>
                    </div>
                </div>

                <h3>Antecedentes Generales</h3>
                <div class="antecedentes-generales">
                    <div class="form-group">
                        <label for="txtPatologico">Antecedentes Patológicos:</label>
                        <input type="text" id="txtPatologico" name="txtPatologico" value="<?php echo $patologico; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtAlergico">Antecedentes Inmuno/Alergicos:</label>
                        <input type="text" id="txtAlergico" name="txtAlergico" value="<?php echo $alergico; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtGineco">Antecedentes Ginecológicos:</label>
                        <input type="text" id="txtGineco" name="txtGineco" value="<?php echo $gineco; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtFarmaco">Antecedentes Farmacológicos:</label>
                        <input type="text" id="txtFarmaco" name="txtFarmaco" value="<?php echo $farmaco; ?>" readonly>
                    </div>
                </div>

                <h3>Examen Físico</h3>
                <div class="examen-fisico">
                    <div class="form-group">
                        <label for="txtPresion">Presión Arterial:</label>
                        <input type="text" id="txtPresion" name="txtPresion" value="<?php echo $presion; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtPulso">Pulso:</label>
                        <input type="text" id="txtPulso" name="txtPulso" value="<?php echo $pulso; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtTemp">Temperatura:</label>
                        <input type="text" id="txtTemp" name="txtTemp" value="<?php echo $temp; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtCard">Frecuencia Cardíaca:</label>
                        <input type="text" id="txtCard" name="txtCard" value="<?php echo $card; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtResp">Frecuencia Respiratoria:</label>
                        <input type="text" id="txtResp" name="txtResp" value="<?php echo $resp; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtSat">Saturación de Oxígeno:</label>
                        <input type="text" id="txtSat" name="txtSat" value="<?php echo $sat; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtApariencia">Apariencia General:</label>
                        <input type="text" id="txtApariencia" name="txtApariencia" value="<?php echo $apariencia; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtExamenF">Examen Físico Segmentario:</label>
                        <textarea id="txtExamenF" name="txtExamenF" rows="4" readonly><?php echo $examenf; ?></textarea>
                    </div>
                </div>

                <h3>Otros campos</h3>
                <div class="otros-campos">
                    <div class="form-group">
                        <label for="txtExamenes">Examenes:</label>
                        <input type="text" id="txtExamenes" name="txtExamenes" value="<?php echo $examenes; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtDiagnostico">Diagnóstico:</label>
                        <input type="text" id="txtDiagnostico" name="txtDiagnostico" value="<?php echo $diagnostico; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="txtTratamiento">Tratamiento:</label>
                        <input type="text" id="txtTratamiento" name="txtTratamiento" value="<?php echo $tratamiento; ?>" readonly>
                    </div>

                    <?php if (!empty($foto)) { ?>
    <div class="foto-container">
        <img src="data:image/jpeg;base64,<?php echo base64_encode($foto); ?>" alt="Foto del paciente" style="max-width: 100%; height: auto; border-radius: 5px;">
    </div>
<?php } ?>
                    
                </div>
            <?php } else { ?>
                <form action="VerExpediente2.php" method="post">
                    <div class="form-group">
                        <label for="txtDNI">Buscar por DNI:</label>
                        <input type="text" id="txtDNI" name="txtDNI" required>
                    </div>
                    <input type="submit" value="Buscar" class="form-submit">
                    
                </form>
                
            <?php } ?>
        </div>   
    </div>
    <br>
    <footer>
<p>&copy; 2024 Centro Médico Honduras. Todos los derechos reservados.</p>
</footer>
</body>
</html>
