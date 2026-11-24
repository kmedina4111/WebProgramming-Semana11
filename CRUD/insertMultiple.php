<?php
    include("../conexion/conexion.php");
    // En este caso tengo problemas similares a la semana anterior (Visual Error) que parece que no recone la variable conexion
    // Pero el programa funciona normalmente, aun que se podria colocar el equire_once __DIR__ . ("../conexion/conexion.php"); por ser de buena practica. 
    try {
        // Inicia la transaccion
        $conexion->beginTransaction();

        $stmt = $conexion->prepare("INSERT INTO t_alumno (nombre, ap_paterno, ap_materno, t_curso_id) VALUES (:nombre, :ap_paterno, :ap_materno, :t_curso_id)");

        // Registro 1
        $stmt->execute([':nombre' => 'Carlos Alberto', ':ap_paterno' => 'Mendoza', ':ap_materno' => 'Ríos', ':t_curso_id' => 1]);
        // Registro 2
        $stmt->execute([':nombre' => 'Ana Sofía', ':ap_paterno' => 'Gómez', ':ap_materno' => 'Torres', ':t_curso_id' => 1]);
        // Registro 3
        $stmt->execute([':nombre' => 'Luis Fernando', ':ap_paterno' => 'Silva', ':ap_materno' => 'Vargas', ':t_curso_id' => 2]);

        // Confirma los cambios
        $conexion->commit();
        echo "Nuevos registros multiples creados EXISTOSAMENTE mediante Transaccion PDO.";

    } catch (PDOException $e) {
        // Revertir cambios en caso de fallo
        $conexion->rollBack();
        echo "Error en insercion multiple: " . $e->getMessage();
    }

    $conexion = null;
?>