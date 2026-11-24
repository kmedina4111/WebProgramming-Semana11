<?php
    $servername = "sql311.infinityfree.com";
    $username = "if0_43116021";
    $password = "RGpNPqtD6d";
    $dbname = "if0_43116021_db_academico"; 

    try {
        $dsn = "mysql:host={$servername};dbname={$dbname};charset=utf8mb4";
        $conexion = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ]);
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
?>