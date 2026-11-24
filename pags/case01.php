<?php
    include("../conexion/conexion.php");

    $resultado = "";
    $sentenciaSQL = "SELECT a.id_alumno, a.nombre, a.ap_paterno, a.ap_materno, c.nombrecurso FROM t_alumno a LEFT JOIN t_curso c ON a.t_curso_id = c.id";

    try {
        // Ejecutar la consulta automáticamente al abrir el archivo
        $stmt = $conexion->query($sentenciaSQL);
        $filas = $stmt->fetchAll();

        if (count($filas) > 0) {
            foreach ($filas as $fila) {
                $resultado .= "ID: " . $fila["id_alumno"] . " - " . $fila["nombre"] . " " . $fila["ap_paterno"] . " | Curso: " . ($fila["nombrecurso"] ?? "Sin curso") . "<br>";
            }
        } else {
            echo "0 resultados";
        }
    } catch (PDOException $e) {
        $resultado = "Error al consultar: " . $e->getMessage();
    }

    $conexion = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css"> <!--dark style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.css"> <!--numeracion de la terminal-->
    <title>Caso05</title>
</head>
<style>.code-editor pre { height: 500px; overflow: auto; margin: 0; }</style>
<header class="container mt-4">
    <div class="row g-2 ">
        <h2 class="text-start mt-5 fw-bold col-sm-8">Caso 04 - Insert o Añadir</h2>
        <div class="col-sm-4 text-end mt-5">
            <a class="btn btn-primary" href="../index.php" role="button">&#x2190; Volver a la Pag. Principal</a>
        </div>
    </div>
</header>
<body>
    <main class="container mt-5">
        <section class="card-body">
            <article class="mb-3 pt-2 pb-0">
                <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                    <strong>ENUNCIADO</strong><br>
                    Desarrollar un programa en PHP que permita registrar y almacenar un nuevo curso en la tabla t_curso utilizando consultas preparadas con PDO, capturando el ID generado automáticamente (AUTO_INCREMENT) e imprimiendo un mensaje de confirmación en pantalla. 
                </div>
            </article>
        </section>
        <section class="row g-3 mb-5">
            <article class="col-md-8">
                <div class="card border-secondary rounded-3 shadow-sm code-editor overflow-hidden">
                    <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-6 mb-0">Visualizador de Codigo - PHP</h2>
                    <div class="card-body bg-dark p-0 rounded-bottom"> <!--vistor de codigo-->
                        <pre class="line-numbers language-php"><code class="language-php">&lt;?php
    include("../conexion/conexion.php");

    try {
        // Inserta un nuevo alumno asignado al curso con ID 1
        $sql = "INSERT INTO t_alumno (nombre, ap_paterno, ap_materno, t_curso_id) 
                VALUES ('Carlos', 'Pérez', 'Gómez', 1)";

        $conexion->exec($sql);
        // Obtiene el ultimo ID generado por AUTO_INCREMENT
        $last_id = $conexion->lastInsertId(); 
        
        echo "Alumno registrado exitosamente. ID de alumno generado: " . $last_id;
    } catch (PDOException $e) {
        echo "Error en la inserción: " . $e->getMessage();
    }

    $conexion = null;
?&gt;</code></pre>
                    </div>
                </div>
            </article>
            <article class="col-md-5">
                <div class="card border-secondary rounded-3 shadow-sm h-100">
                    <h2 class="card-header fw-bold py-2 fs-6 mb-0">Área de Resultado y Consulta</h2>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <!-- Sentencia SQL visible -->
                            <label class="form-label fw-bold text-muted small">Sentencia SQL Ejecutada:</label>
                            <div class="bg-light border rounded p-2 mb-3 font-monospace small text-primary overflow-auto" style="max-height: 70px;">
                                <?= htmlspecialchars($sentenciaSQL) ?>
                            </div>

                            <!-- Resultado (Aparece al abrir el archivo) -->
                            <label class="form-label fw-bold">Resultado obtenido:</label>
                            <div class="form-control bg-light overflow-auto" style="height: 180px;">
                                <?= $resultado ?>
                            </div>
                        </div>

                        <!-- Botón para actualizar o recargar la vista -->
                        <div class="mt-3">
                            <form method="POST">
                                <button type="submit" class="btn btn-primary w-50 py-2">Recargar Datos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
                <div class="text-center" style="padding-top: 20px;">
                    <a class="btn btn-primary w-50 py-2" href="apps/app_case02.php" role="button">Acceder a la Aplicacion</a>
                </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <!-- sintaxis para php -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    <!-- numeracion de la terminal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
</body>
</html>