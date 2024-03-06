<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Citas</title>
    <link rel="icon" href="/imagenes/citas.png" type="image/png">
    <link rel="stylesheet" href="estilos/style1.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <form action="insertar_cita.php" method="post">
        <div class="patient-data">
            <h3>Datos del Paciente</h3>
            <div class="row">
                <div class="column">
                    <label for="cedula">Cédula:</label>
                    <input type="text" id="cedula" name="cedula" required><button type="button" onclick="buscarPaciente()" id="buscarBtn">Buscar</button>
                </div>
                <div class="column">
                    <label for="nombre">Nombre del Paciente:</label>
                    <input type="text" id="nombre" name="nombre" required readonly>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="apellido">Apellido del Paciente:</label>
                    <input type="text" id="apellido" name="apellido" required readonly>
                </div>
                <div class="column">
                    <label for="genero">Género:</label>
                    <input type="text" id="genero" name="genero" required readonly>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required readonly>
                </div>
            </div>
        </div>

        <div class="appointment-data">
            <h3>Datos de la Cita</h3>
            <div class="row">
                <div class="column">
                    <label for="fecha">Fecha de la Cita:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>
                <div class="column">
                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" name="hora" required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="medico">Médico Encargado:</label>
                    <input type="text" id="medico" name="medico" value="<?php echo isset($_GET['medico']) ? htmlspecialchars($_GET['medico']) : ''; ?>" readonly>
                    <input type="hidden" id="medicoSeleccionado" name="medicoSeleccionado" value="<?php echo isset($_GET['medico']) ? htmlspecialchars($_GET['medico']) : ''; ?>">
                </div>
                <div class="column">
                    <label for="jornada">Jornada:</label>
                    <select id="jornada" name="jornada" required>
                        <option value="" disabled selected>Seleccione...</option>
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="column half-width">
                    <label for="problema">Problema General:</label>
                    <textarea id="problema" name="problema" rows="4" required></textarea>
                </div>
            </div>
        </div>
        <input type="submit" value="Guardar Cita">
        <div class="botones">
            <button type="button" onclick="limpiarFormulario()">Limpiar</button>
            <a href="index.php"><button type="button">Regresar</button></a>
        </div>
        
    </form>
   
</div>
<footer>
<p>&copy; 2024 Centro Médico Honduras. Todos los derechos reservados.</p>
</footer>
<script>
    function limpiarFormulario() {
        document.getElementById("fecha").value = "";
        document.getElementById("cedula").value = "";
        document.getElementById("hora").value = "";
        document.getElementById("jornada").selectedIndex = 0;
        document.getElementById("problema").value = "";
        document.getElementById("nombre").value = "";
        document.getElementById("apellido").value = "";
        document.getElementById("genero").value = "";
        document.getElementById("telefono").value = "";
    }

    function buscarPaciente() {
        var cedula = document.getElementById("cedula").value.trim();

        if (cedula !== "") {
            $.ajax({
                type: "POST",
                url: "buscar_paciente.php", 
                data: { cedula: cedula },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.error) {
                        alert(data.error);
                    } else {
                        document.getElementById("nombre").value = data.nombre;
                        document.getElementById("apellido").value = data.apellido;
                        document.getElementById("genero").value = data.genero;
                        document.getElementById("telefono").value = data.telefono;
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error al buscar paciente: " + error);
                }
            });
        } else {
            alert("Por favor ingrese una cédula para buscar.");
        }
    }
</script>


</body>
</html>
