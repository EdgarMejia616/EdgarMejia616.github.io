<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Paciente</title>
   <link rel="icon" href="/imagenes/paciente.png" type="image/png">
    <link rel="stylesheet" href="estilos/style2.css">

</head>
<body>
    <div class="container">
        <form action="procesar_registroP.php" method="post">
            <h2>Registro de Paciente</h2>
            <div class="section">
                <h3>Datos Personales</h3>
                <div class="row">
                    <div class="column">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="column">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" required>
                    </div>
                    <div class="column">
                        <label for="dni">DNI:</label>
                        <input type="text" id="dni" name="dni" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="clave">Clave:</label>
                        <input type="password" id="clave" name="clave" required>
                    </div>
                    <div class="column">
                        <label for="fecha_ingreso">Fecha de Ingreso:</label>
                        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" required>
                    </div>
                    <div class="column">
                        <label for="edad">Edad:</label>
                        <input type="number" id="edad" name="edad" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="genero">Género:</label>
                        <select id="genero" name="genero" required>
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="section">
                <h3>Contacto</h3>
                <div class="row">
                    <div class="column">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>
                    <div class="column">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
            </div>
            <div class="section">
                <h3>Dirección</h3>
                <div class="row">
                    <div class="column">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" required>
                    </div>
                    <div class="column">
                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado" required>
                    </div>
                </div>
            </div>

            <div class="section">
                <input type="submit" value="Registrar">
              <div class="botones">
                  <button type="button" onclick="limpiarFormulario()">Limpiar</button>
                  <a href="index.php"><button type="button">Regresar</button></a>
              </div>
            </div>
        </form>
        
    </div>
    <footer>
                <p>&copy; 2024 Centro Médico Honduras. Todos los derechos reservados.</p>
                </footer>
  <script>
      function limpiarFormulario() {
          document.getElementById("nombre").value = "";
          document.getElementById("apellido").value = "";
          document.getElementById("usuario").value = "";
          document.getElementById("clave").value = "";
          document.getElementById("dni").value = "";
          document.getElementById("fecha_ingreso").value = "";
          document.getElementById("nacionalidad").value = "";
          document.getElementById("genero").value = "";
          document.getElementById("telefono").value = "";
          document.getElementById("email").value = "";
          document.getElementById("direccion").value = "";
      }
  </script>

</body>
</html>
