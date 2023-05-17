<?php
require_once "controllers/get.controller.php";

// Obtenemos la tabla
$table = explode('?', $routesArray[1])[0];

// Se comprueba get y se da valor
$select = $_GET['select'] ?? "*";
$response = new GetController();

if( isset( $_GET[ 'linkTo' ] ) && isset( $_GET[ 'equalTo' ] ) ){
  
  // Petición con filtro
  $response -> getDataFilter( $table, $select, $_GET[ 'linkTo' ], $_GET[ 'equalTo' ] );
  
} else {

  // Petición sin filtro
  $response -> getData( $table, $select );

}
