<?php

  require_once 'connection.php';
  require_once 'createProdutos.php';

  //Controller->Model
  $produtos = $conexao->query("SELECT * FROM produtos");
  //var_dump($estados->fetchAll());

  //View
  require 'produtosView.php';
