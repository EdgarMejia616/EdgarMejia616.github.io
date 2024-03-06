<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ver Expediente</title>
  <link rel="icon" href="/imagenes/expediente.png" type="image/png">
    <link rel="stylesheet" href="/estilos/style.css">
  
</head>
<body>
    <div class="container">
        <div class="form-container">
            
        <form action="Crear_Expediente.php" method="post" enctype="multipart/form-data">
                <div class="datos-generales">
                  <h2>EXPEDIENTE CLINICO</h2>
                  <br>
                    <h3>Datos Generales</h3>
                   <br>
                    <div class="form-group">
                        <label for="txtDNI">DNI:</label>
                        <input type="text" id="txtDNI" name="txtDNI" required>
                    </div>

                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" required>
                    </div>

                    <div class="form-group">
                        <label for="txtEdad">Edad:</label>
                        <input type="text" id="txtEdad" name="txtEdad" required>
                    </div>

                    <div class="form-group">
                        <label for="txtGenero">Género:</label>
                        <input type="text" id="txtGenero" name="txtGenero" required>
                    </div>

                    <div class="form-group">
                        <label for="txtTelefono">Teléfono:</label>
                        <input type="text" id="txtTelefono" name="txtTelefono" required>
                    </div>

                    <div class="form-group">
                        <label for="txtDireccion">Dirección:</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" required>
                    </div>

                    <div class="form-group">
                        <label for="txtNacionalidad">Nacionalidad:</label>
                        <input type="text" id="txtNacionalidad" name="txtNacionalidad" required>
                    </div>

                    <div class="form-group">
                        <label for="txtReligion">Religión:</label>
                        <input type="text" id="txtReligion" name="txtReligion" required>
                    </div>

                    <div class="form-group">
                        <label for="txtOcupacion">Ocupación:</label>
                        <input type="text" id="txtOcupacion" name="txtOcupacion" required>
                    </div>
                </div>
                  <div class="historia-enfermedad-actual">
                    <h3>Historia de Enfermedad Actual</h3>
                    <br>
                    <div class="form-group">
                        <label for="txtSintoma">Síntomas:</label>
                        <textarea id="txtSintoma" name="txtSintoma" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="txtFecha">Fecha:</label>
                        <input type="date" id="txtFecha" name="txtFecha" required>
                    </div>

                    <div class="form-group">
                        <label for="txtHistoria">Historia:</label>
                        <textarea id="txtHistoria" name="txtHistoria" rows="4" required></textarea>
                    </div>
                    </div>
                    <div class="antecendentes-generales">
                      <h3>Antecendentes Generales</h3>
                      <br>
                    <div class="form-group">
                        <label for="txtPatologico">Antecedentes Patológicos:</label>
                        <input type="text" id="txtPatologico" name="txtPatologico" required>
                    </div>
                      
                    <div class="form-group">
                        <label for="txtAlergico">Antecendetes Inmuno/Alergicos:</label>
                        <input type="text" id="txtAlergico" name="txtAlergico" required>
                    </div>
                      
                    <div class="form-group">
                        <label for="txtGineco">Antecedentes Ginecológicos:</label>
                        <input type="text" id="txtGineco" name="txtGineco" required>
                    </div>
                      
                    <div class="form-group">
                        <label for="txtFarmaco">Antecedentes Farmacológicos:</label>
                        <input type="text" id="txtFarmaco" name="txtFarmaco" required>
                    </div>
                      </div>
              
              <div class="Examen-Fisico">
                <h3>Examen Físico</h3> 
                <br>
                <h2>Signos Vitales</h2>  
                <br>
                <div class="form-group">
                    <label for="txtPresion">Presión Arterial:</label>
                    <input type="text" id="txtPresion" name="txtPresion" required>
                </div>
                
                    <div class="form-group">
                        <label for="txtPulso">Pulso:</label>
                        <input type="text" id="txtPulso" name="txtPulso" required>
                    </div>

                    <div class="form-group">
                        <label for="txtTemp">Temperatura:</label>
                        <input type="text" id="txtTemp" name="txtTemp" required>
                    </div>

                    <div class="form-group">
                        <label for="txtCard">Frecuencia Cardíaca:</label>
                        <input type="text" id="txtCard" name="txtCard" required>
                    </div>

                    <div class="form-group">
                        <label for="txtResp">Frecuencia Respiratoria:</label>
                        <input type="text" id="txtResp" name="txtResp" required>
                    </div>

                    <div class="form-group">
                        <label for="txtSat">Saturación de Oxígeno:</label>
                        <input type="text" id="txtSat" name="txtSat" required>
                    </div>

                    <div class="form-group">
                        <label for="txtApariencia">Apariencia General:</label>
                        <input type="text" id="txtApariencia" name="txtApariencia" required>
                    </div>

                    <div class="form-group">
                        <label for="txtExamenF">Examen Físico Segmentario:</label>
                        <textarea id="txtExamenF" name="txtExamenF" rows="4" required></textarea>
                    </div>
                </div>
              
              <div class="Otros-campos">
                
                    <div class="form-group">
                        <label for="txtExamenes">Examenes:</label>
                        <input type="text" id="txtExamenes" name="txtExamenes" required>
                    </div>

                    <div class="form-group">
                        <label for="txtDiagnostico">Diagnóstico:</label>
                        <input type="text" id="txtDiagnostico" name="txtDiagnostico" required>
                    </div>

                    <div class="form-group">
                        <label for="txtTratamiento">Tratamiento:</label>
                        <input type="text" id="txtTratamiento" name="txtTratamiento" required>
                    </div>

                    <div class="form-group">
                        <label for="txtEstado">Estado:</label>
                        <input type="text" id="txtEstado" name="txtEstado" required>
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto">
                    </div>
                  
                    </div>
                 
              
                    <input type="submit" value="Crear Expediente" class="form-submit">
              <div class="botones">
                  <button type="button" onclick="limpiarFormulario()">Limpiar</button>
                  <a href="index.php"><button type="button">Regresar</button></a>
              </div>
                </form>
            </div>
      <script>
          function limpiarFormulario() {
              document.getElementById("txtDNI").value = "";
              document.getElementById("txtNombre").value = "";
              document.getElementById("txtEdad").value = "";
              document.getElementById("txtGenero").value = "";
              document.getElementById("txtTelefono").value = "";
              document.getElementById("txtDireccion").value = "";
              document.getElementById("txtNacionalidad").value = "";
              document.getElementById("txtReligion").value = "";
              document.getElementById("txtOcupacion").value = "";
              document.getElementById("txtSintoma").value = "";
              document.getElementById("txtFecha").value = "";
              document.getElementById("txtHistoria").value = "";
              document.getElementById("txtPatologico").value = "";
              document.getElementById("txtAlergico").value = "";
              document.getElementById("txtGineco").value = "";
              document.getElementById("txtFarmaco").value = "";
              document.getElementById("txtPresion").value = "";
              document.getElementById("txtPulso").value = "";
              document.getElementById("txtTemp").value = "";
              document.getElementById("txtCard").value = "";
              document.getElementById("txtResp").value = "";
              document.getElementById("txtSat").value = "";
              document.getElementById("txtApariencia").value = "";
              document.getElementById("txtExamenF").value = "";
              document.getElementById("txtExamenes").value = "";
              document.getElementById("txtDiagnostico").value = "";
              document.getElementById("txtTratamiento").value = "";
              document.getElementById("txtEstado").value = "";
              document.getElementById("foto").value = "";
          }
      </script>

        </div>
    </div>
</body>
</html>
