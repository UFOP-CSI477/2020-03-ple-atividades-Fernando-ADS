<?php

namespace App\Database;
use PDO;
use Exception;


/**
*
*/
class AdapterSQLite implements AdapterInterface {
  //private $username = "";
  //private $password = "";
  //private $strConnection = "sqlite:" . $dbfile;
  private $dbfile = __DIR__ . "/database.sqlite";
  private $strConnection = "sqlite:";
  private $connection = null;

  public function open(){
    //echo "<br>AdapterSQLite: open()<br>";
    //$this->connection = new PDO($strConnection, $username, $password);
    try{
      $this->connection = new PDO($this->strConnection . $this->dbfile);
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }

  public function close(){
    //echo "<br>AdapterSQLite: close()<br>";
    $this->connection = null;

  }
  public function get(){
    //echo "<br>AdapterSQLite: get()<br>";
    if($this->connection === null){
      $this->open();
    }
    return $this->connection;

  }
}
