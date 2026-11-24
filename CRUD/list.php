<?php
    include("../conexion/conexion.php");
    // En este caso tengo problemas similares a la semana anterior (Visual Error) que parece que no reconoce la variable conexion
    // Pero el programa funciona normalmente, aun que se podria colocar el require_once __DIR__ . ("../conexion/conexion.php"); por ser de buena practica.
    try {
        // Consulta para seleccionar todos los alumnos 
        $stmt = $conexion->query("SELECT a.id_alumno, a.nombre, a.ap_paterno, a.ap_materno, c.nombrecurso FROM t_alumno a LEFT JOIN t_curso c ON a.t_curso_id = c.id");

        // fetchAll() recupera todas las filas en un arreglo
        $filas = $stmt->fetchAll();

        if (count($filas) > 0) {
            foreach ($filas as $fila) {
                echo "ID: " . $fila["id_alumno"] . 
                    " - Nombres: " . $fila["nombre"] . " " . $fila["ap_paterno"] . " " . $fila["ap_materno"] . 
                    " | Curso: " . ($fila["nombrecurso"] ?? "Sin curso") . "<br>";
            }
        } else {
            echo "0 resultados";
        }
    } catch (PDOException $e) {
        echo "Error al seleccionar: " . $e->getMessage();
    }

    $conexion = null;
?>