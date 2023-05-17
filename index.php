<?php

/**
 * Show errors
 */

ini_set('display_erros', 1);
ini_set('log_erros', 1);
ini_set('error_log', 'F:/xampp/htdocs/apirest-dinamica/php_error_log');


/**
 * Requireds
 */
require_once "controllers/routes.controller.php";
require_once "models/connection.php";

// Conexión a la base de datos
Connection::connect();

// Llamada a las rutas
$index = new RoutesController();
$index -> index();