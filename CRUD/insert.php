<?php
    include("../conexion/conexion.php");

    try {
        // Inserta un nuevo alumno asignado al curso con ID 1
        $sql = "INSERT INTO t_alumno (nombre, ap_paterno, ap_materno, t_curso_id) 
                VALUES ('Carlos', 'Pérez', 'Gómez', 1)";

        $conexion->exec($sql);
        $last_id = $conexion->lastInsertId(); // Obtiene el último ID generado por AUTO_INCREMENT
        
        echo "Alumno registrado exitosamente. ID de alumno generado: " . $last_id;
    } catch (PDOException $e) {
        echo "Error en la inserción: " . $e->getMessage();
    }

    $conexion = null;
?>
