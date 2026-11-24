<?php
    include("../conexion/conexion.php");
    // En este caso tengo problemas similares a la semana anterior (Visual Error) que parece que no reconoce la variable conexion
    // Pero el programa funciona normalmente, aun que se podria colocar el require_once __DIR__ . ("../conexion/conexion.php"); por ser de buena practica.
    try {
        $idUpdate = 1; // ID del alumno que deseas actualizar
        $nuevoNombre = "Carlos Alberto Actualizado";

        // Actualizamos la tabla t_alumno cambiando el nombre según el id_alumno
        $stmt = $conexion->prepare("UPDATE t_alumno SET nombre = :nombre WHERE id_alumno = :id");
        $stmt->execute([
            ':nombre' => $nuevoNombre,
            ':id'     => $idUpdate
        ]);

        // rowCount() devuelve el número de filas afectadas por la operación
        echo "Filas actualizadas correctamente: " . $stmt->rowCount();
    } catch (PDOException $e) {
        echo "Error al actualizar: " . $e->getMessage();
    }

    $conexion = null;
?>