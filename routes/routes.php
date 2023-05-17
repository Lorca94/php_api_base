<?php

// Se obtienen los parametros de la url
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

/**
 * Sin petición a la API
 */
if( count( $routesArray ) == 0){
  $json = array(
    'status' => 404,
    'result' => 'Not Found',
  );
  
  echo json_encode($json);

  return;
}

/**
 * Petición a la API
 */
if( count( $routesArray ) == 1 && isset($_SERVER['REQUEST_METHOD'] ) ){

  switch( $_SERVER[ 'REQUEST_METHOD' ] ) {

    // Peticiones GET
    case 'GET':
      include "services/get.php";

    // Peticiones POST
    case 'POST':
      $json = array(
        'status' => 200,
        'result' => 'Solicitud POST',
      );
      
      echo json_encode($json);
      break;

    // Peticiones PUT
    case 'PUT':
      $json = array(
        'status' => 200,
        'result' => 'Solicitud PUT',
      );
      
      echo json_encode($json);
      break;

    // Peticiones DELETE
    case 'DELETE':
      $json = array(
        'status' => 200,
        'result' => 'Solicitud DELETE',
      );
      
      echo json_encode($json);
      break;
  }
}