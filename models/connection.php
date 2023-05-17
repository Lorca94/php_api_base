<?php 

class Connection{

  // Información de la base de datos
  static public function infoDatabase(){

    $infoDb = array(
      'database' => 'basedeprueba',
      'user'     => 'root',
      'pass'     => '',
    );

    return $infoDb;
  }

  // Conexión a la base de datos
  static public function connect() {

    try{

      $link = new PDO(
        "mysql:host=localhost;dbname=".Connection::infoDatabase()['database'],
        Connection::infoDatabase()['user'],
        Connection::infoDatabase()['pass']
      );

      $link->exec("set names utf8");

    }catch(PDOException $error) {

      die( "Error: ". $error->getMessage() );

    }

    return $link;
  }
}
