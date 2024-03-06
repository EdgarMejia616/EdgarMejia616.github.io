<?php
$conexion = include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cedula = $_POST['cedula'];

    try {
        if (!empty($cedula)) {
            
            $sentenciaSQL = "SELECT * FROM paciente WHERE paciente_dni= ?";
            $ps = $conexion->prepare($sentenciaSQL);

            if ($ps === false) {
                die("Error al preparar la consulta: " . $conexion->error);
            }

           
            $ps->bind_param("s", $cedula);

      
            $resultado = $ps->execute();

            if ($resultado === false) {
                die("Error al ejecutar la consulta: " . $ps->error);
            }

           
            $resultado = $ps->get_result();

            if ($resultado->num_rows > 0) {
                
                $fila = $resultado->fetch_assoc();
               
                $response = array(
                    'nombre' => $fila['paciente_nombre'],
                    'apellido' => $fila['paciente_apellido'],
                    'genero' => $fila['paciente_genero'],
                    'telefono' => $fila['paciente_telefono']
                );
               
                echo json_encode($response);
                exit; 
            } else {
                
                echo json_encode(array('error' => 'Paciente no encontrado'));
            }
        } else {
           
            echo json_encode(array('error' => 'Ingrese una cédula para buscar.'));
        }
    } catch (Exception $ex) {
        
        echo json_encode(array('error' => 'Error al buscar paciente: ' . $ex->getMessage()));
    }
}
?>
