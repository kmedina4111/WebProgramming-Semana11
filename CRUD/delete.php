<?php
    include("../conexion/conexion.php");
    // En este caso tengo problemas similares a la semana anterior (Visual Error) que parece que no reconoce la variable conexion
    // Pero el programa funciona normalmente, aun que se podria colocar el require_once __DIR__ . ("../conexion/conexion.php"); por ser de buena practica.
    try {
        $idDelete = 3; // ID del alumno que deseas eliminar

        // Se elimina el registro de la tabla t_alumno segun el id_alumno
        $stmt = $conexion->prepare("DELETE FROM t_alumno WHERE id_alumno = :id");
        $stmt->execute([':id' => $idDelete]);

        // rowCount() devuelve el numero de filas eliminadas
        echo "Filas eliminadas exitosamente: " . $stmt->rowCount();
    } catch (PDOException $e) {
        echo "Error al eliminar: " . $e->getMessage();
    }

    $conexion = null;
?>