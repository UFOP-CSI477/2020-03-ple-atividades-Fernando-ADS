<?php
//Configuração:
$dbfile = "./db/database.sqlite";
$dbuser = "";
$dbpassword = "";
$dbhost = "";

$strConnection = "sqlite:" . $dbfile;

try {
  $conexao = new PDO($strConnection, $dbuser, $dbpassword);

} catch (Exception $e) {
  echo "Erro" . $e->getMessage();
}





//var_dump($connection);
