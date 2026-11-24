<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>WP - Semana 11</title>
</head>
<header>
    <h1 class="text-center mt-5 fw-bold">MENÚ PRINCIPAL - CRUD | <i>InsertMultiple</i></h1>
</header>
<body>
    <main class="container mt-4">
        <section class="card border-secondary rounded-3 shadow-sm">
            <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-5">Resolucion de Ejercicios - Semana 11</h2>
            <article class="card-body">
                <div class="mb-3 pt-2">
                    <h5 class="fw-bold mb-3"> CASO 01: <a href="pags/case01.php">Insert o Añadir</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado Detallado: </strong>
                        Desarrollar un programa en PHP que permita registrar y almacenar un nuevo curso en la tabla t_curso utilizando consultas preparadas con PDO, capturando el ID generado automáticamente (AUTO_INCREMENT) e imprimiendo un mensaje de confirmación en pantalla.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 02: <a href="pags/case02.php">Insert Multiple</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un script en PHP que realice una inserción múltiple de varios registros de nuevos alumnos en la tabla t_alumno vinculados a sus respectivos cursos, implementando transacciones (beginTransaction, commit y rollBack) con PDO para garantizar la integridad de los datos.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 03: <a href="pags/case03.php">Update o Actualizar</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un programa en PHP que permita modificar los datos de un registro existente en la tabla t_alumno (como el nombre del alumno) filtrando de forma segura por su respectivo identificador (id_alumno) mediante parámetros, y mostrando el número de filas afectadas en la base de datos.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 04: <a href="pags/case04.php">Delete o Eliminar</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un script en PHP que permita dar de baja o eliminar un registro específico de la tabla t_alumno haciendo uso de una sentencia preparada con PDO basada en el ID del alumno (id_alumno), validando y mostrando el resultado de la ejecución en pantalla.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 05: <a href="pags/case05.php">List o Listar Todo</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un programa en PHP que realice una consulta general (SELECT con unión LEFT JOIN entre t_alumno y t_curso) para recuperar y recorrer todos los registros almacenados en la base de datos, imprimiendo la información de manera estructurada y ordenada para el usuario.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CONSULTAS: <a href="">Conjunto Completo de las Consultas</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un programa en PHP que realice una consulta general (SELECT con unión LEFT JOIN entre t_alumno y t_curso) para recuperar y recorrer todos los registros almacenados en la base de datos, imprimiendo la información de manera estructurada y ordenada para el usuario.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> BASE DE DATOS: <a href="">Script Completo de la DB</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un programa en PHP que realice una consulta general (SELECT con unión LEFT JOIN entre t_alumno y t_curso) para recuperar y recorrer todos los registros almacenados en la base de datos, imprimiendo la información de manera estructurada y ordenada para el usuario.
                    </div>
                </div>
            </article>
        </section>
        <section class="card border-secondary rounded-3 shadow-sm mt-3 mb-3">
            <article class="card-body py-3">
                <div class="row g-3 justify-content-center text-center">
                    <div class="col-md-4">
                        <strong>Apellidos y Nombres</strong>
                        <p class="mb-0">Medina Huarhuachi, Kevin</p>
                    </div>
                    <div class="col-md-4">
                        <strong>Semestre</strong>
                        <p class="mb-0">IV Semestre</p>
                    </div>
                    <div class="col-md-4">
                        <strong>Turno</strong>
                        <p class="mb-0">Tarde</p>
                    </div>
                </div>
            </article>
        </section>
    </main>
</body>
</html>