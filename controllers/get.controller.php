<?php
require_once "models/get.model.php";

class GetController {

 
  static public function getData( $table, $select ) {

    $data = GetModel::getData( $table, $select );
    // Se genera la respuesta
    $response = new GetController();
    $response -> controllerResponse( $data );

  }

  static public function getDataFilter( $table, $select, $linkTo, $equalTo ) {

    $data = GetModel::getDataFilter( $table, $select, $linkTo, $equalTo );
  }


  // Respuesta del controlador
  public function controllerResponse( $response ){

    if( !empty( $response ) ) {
      
      $json = array(
        'status'  => 200,
        'total'   => count( $response ),
        'data'  => $response,
      );

    } else {

      $json = array(
        'status'  => 404,
        'data'  => 'Not found', 
      );
  
    }

    echo json_encode( $json, http_response_code( $json[ 'status' ] ) );

  } 

}