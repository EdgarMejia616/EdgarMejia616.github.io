<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Médico Honduras</title>
  <link rel="icon" href="/imagenes/LOGOCentroMedico.png" type="image/png">
   <link rel="stylesheet" href="estilos/style3.css">
   
</head>
<body>
    <div class="container">
        <div class="sidebar">
          <img src="/imagenes/LOGOCentroMedico.png" alt="Logo Centro Médico" class="logo">
            <h1>Acciones</h1>
          <a href="Paciente.php" class="btn">Crear Paciente</a>
            
            <a href="VerExpediente2.php" class="btn">Ver Expediente</a>

        </div>
        <div class="content">
            <div class="header">
                <h1>Centro Médico Honduras</h1>
            </div>
            <div class="main">
                <div class="section">
                    <h2>Quirofanos</h2>
                    <div class="gallery">
                        <img src="/imagenes/quirofano1.JPG" alt="Quirofano 1">
                        <img src="imagenes/quirofano.jpg" alt="Quirofano 2">
                    </div>
                </div>
                <div class="section">
                    <h2>Farmacia</h2>
                    <div class="gallery">
                        <img src="/imagenes/farmacia.JPG" alt="Farmacia">
                    </div>
                </div>
                <div class="section">
                    <h2>Nuestros Médicos</h2>

                    <div class="doctor-option">
                        <input type="radio" name="medico" id="drCarlosEstrada" value="Dr. Carlos Estrada">
                        <label for="drCarlosEstrada">Dr. Carlos Estrada</label>
                    </div>
                    <div class="doctor-option">
                        <input type="radio" name="medico" id="draCarolDiaz" value="Dra. Carol Díaz">
                        <label for="draCarolDiaz">Dra. Carol Díaz</label>
                    </div>
                   <div class="doctor-option">
                       <input type="radio" name="medico" id="marioPineda" value="Dr. Mario Pineda">
                       <label for="marioPineda">Dr. Mario Pineda</label>
                   </div>
                   <div class="doctor-option">
                       <input type="radio" name="medico" id="mariaMendoza" value="Dra. Maria Mendoza">
                       <label for="mariaMendoza">Dra. Maria Mendoza</label>
                   </div>
                   <div class="doctor-option">
                       <input type="radio" name="medico" id="carlosFajardo" value="Dr. Carlos Fajardo">
                       <label for="carlosFajardo">Dr. Carlos Fajardo</label>
                   </div>
                   <div class="doctor-option">
                       <input type="radio" name="medico" id="mariaGomez" value="Dra. Maria Gomez">
                       <label for="mariaGomez">Dra. Maria Gomez</label>
                   </div>
                    <div id="infoMedico">
                        <img id="imgMedico" src="" alt="Imagen del médico">
                        <div id="resenaMedico"></div>
                    </div>
                </div>


                <div class="section">
                    <button id="btnCitas" class="btn" disabled>Agendar Cita</button>
                </div>
                
            </div>
        </div>
    </div>
    <footer>
                <p>&copy; 2024 Centro Médico Honduras. Todos los derechos reservados.</p>
                </footer>
    <script>

        var imgMedico = document.getElementById('imgMedico');
        var resenaMedico = document.getElementById('resenaMedico');
        var btnCitas = document.getElementById('btnCitas');

        function mostrarInfoMedico(nombreMedico, imagenSrc, resena) {
            imgMedico.src = imagenSrc;
            resenaMedico.textContent = resena;

            btnCitas.disabled = false;
        }


        var radioButtons = document.querySelectorAll('input[type="radio"][name="medico"]');
        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                if (this.checked) {
                    var nombreMedico = this.value;

                    var imagenSrc, resena;
                    if (nombreMedico === 'Dr. Carlos Estrada') {
                        imagenSrc = '/imagenes/drCarlosEstrada.JPG';
                        resena = 'Especialista en Medicina InternaTratamiento de enfermedades cronico degenerativas. Como ser: Hipertension Diabetes, asma. Atencion: Horario matutino de 8 am a 11 am';
                    } else if (nombreMedico === 'Dra. Carol Díaz') {
                        imagenSrc = '/imagenes/draCarolDiaz.JPG';
                        resena = 'Especialista en Ginecologia y Obstetricia. Atencion de embarazo de alto riesgo y problemas fetales. Atiende en horario matutino de 7 am a 11 am. Cuenta con Ultrasonograma y estudios Doppler,';
                    }else if (nombreMedico === 'Dr. Mario Pineda') {
                      imagenSrc = '/imagenes/drMarioPineda.JPG';
                      resena = 'Especialista en Pediatria. Manejo de enfermedades tipicas de nino, asma, broquitis, etc. Atiende en horarios de 1 pm a 6 pm. Con una subespecialidad en pneumologia pediatrica.';
                  }else if (nombreMedico === 'Dra. Maria Mendoza') {
                  imagenSrc = '/imagenes/draMariaMendoza.JPG';
                  resena = 'Especialista en Psiquiatria. Manejo de enfermedades de la mente y trastornos de la conducta. Atiende en horarios de 1 pm a 6 pm y sabados en 8 am a 11 am. ';
                      }else if (nombreMedico === 'Dr. Carlos Fajardo') {
                  imagenSrc = '/imagenes/drCarlosFajardo.JPG';
                  resena = 'Especialista en Urologia. Manejo de enfermedades del aparato genitourinario del hombre. Atiende en horarios de 1 pm a 6 pm y realiza procedimientos endoscopicos en horario matutino. ';
                      }else if (nombreMedico === 'Dra. Maria Gomez') {
                  imagenSrc = '/imagenes/draMariaGomez.JPG';
                  resena = 'Especialista en cirugia general. Manejo de enfermedades de tratamiento quirurgico, como ser: Hernias, Vesicula biliar etc. Atiende en horario matutino de 7 am a 11 am. ';
                      }

                    mostrarInfoMedico(nombreMedico, imagenSrc, resena);
                }
            });
        });

      btnCitas.addEventListener('click', function() {
          if (document.querySelector('input[type="radio"][name="medico"]:checked')) {
              var medicoSeleccionado = document.querySelector('input[type="radio"][name="medico"]:checked').value;
              window.location.href = 'Citas.php?medico=' + encodeURIComponent(medicoSeleccionado);
          } else {
              alert('Por favor, seleccione un médico antes de agendar una cita.');
          }
      });

    </script>
    
</body>
</html>
