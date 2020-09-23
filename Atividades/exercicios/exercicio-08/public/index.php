<?php

require '../vendor/autoload.php';

use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Produto;
//use App\Views\ProdutoView;
use App\Database\Connection;
use App\Database\AdapterSQLite;




//verificar aqui se tem parenteses ou nn
$connection =  new Connection(new AdapterSQLite());
//var_dump($connection);

$connection->getAdapter()->open();


//$estado = new Estado(1, "Minas Gerais", "MG");
//var_dump($estado);
//$cidade = new Cidade(1, "Belo Horizonte", "1");
//var_dump($cidade);
//$produto = new Produto(1, "Maçã", "kg");
//var_dump($produto);

$sql = "SELECT * FROM produtos";
$prod = $connection->getAdapter()->get()->query($sql);

$sql2 = "SELECT * FROM estados";
$est = $connection->getAdapter()->get()->query($sql2);

$sql3 = "SELECT * FROM cidades";
$cid = $connection->getAdapter()->get()->query($sql3);

//$sql = "SELECT * FROM produtos";

//$connection->getAdapter()->get();

require_once '../App/Views/ProdutoView.php';
require_once '../App/Views/CidadeView.php';
require_once '../App/Views/EstadoView.php';

$connection->getAdapter()->close();
