<?php

require_once "connection.php";

class GetModel{

   /** getData - Peticiones sin filtro
     * Devuelve la clase según los parametros table y select
     * $table[string] tabla a seleccionar en la bbdd
     * $select[string] si no se ha pasado ningún parámetro
     * trae por defecto * y devolverá toda la info de la tabla,
     * hace referencia al SELECT de la secuencia SQL 
   */
  static public function getData( $table, $select ){
    
    // Preparación de sentencia SQL
    $sql = "SELECT $select FROM $table";
    // Preparación de stagement
    $stmt = Connection::connect() -> prepare( $sql );

    // Ejecución de stagement
    $stmt -> execute();

    // Devuelve la información de la tabla.
    return $stmt -> fetchAll( PDO::FETCH_CLASS );
  }

    /** getDataFilter - Peticiones con Filtro
      * 
      */
  static public function getDataFilter( $table, $select, $linkTo, $equalTo ){

    $linkToArray = explode( ",", $linkTo );
    // Se separarán por guiones bajos
    $equalToArray = explode("_", $equalTo );

    echo '<pre>';print_r( $linkToArray ); echo '</pre>';
    echo '<pre>';print_r( $equalToArray ); echo '</pre>';

    return;
    
    $sql = "SELECT $select FROM $table WHERE $linkTo = :$linkTo AND $equalTo";


  }
}