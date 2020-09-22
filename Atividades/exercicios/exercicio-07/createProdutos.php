<?php

require_once 'connection.php';

try {
  $sql = "CREATE TABLE IF NOT EXISTS produtos (id integer not null PRIMARY KEY AUTOINCREMENT, nome VARCHAR(100) NOT NULL, um VARCHAR(3) NOT NULL );";

  // query() e não execute()
  $conexao->query($sql);
  echo "Sucesso!";


} catch (Exception $e) {
  echo "Erro ao criar!" . $e->getMessage;
}
