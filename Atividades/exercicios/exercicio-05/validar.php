<?php

  //echo "POST";

  $user = $_POST['usuario'];
  $password = $_POST['senha'];

  if($user == "admin" && $password = "123"){
    echo "<h1>Olá, $user!</h1>";
    echo "<h3>Senha: $password</h3>";
  }else {
    echo "<h1>Usuário ou senha inválido!</h1>";
  }

  echo '<a href="index.php">Voltar</a>';
