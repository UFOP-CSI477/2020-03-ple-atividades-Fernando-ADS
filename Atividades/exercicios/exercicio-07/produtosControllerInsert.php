<?php

require 'connection.php';

//$id = $_POST['id'];
$nome= $_POST['nome'];
$um = $_POST['um'];

if(empty($nome) || empty($um)){
  echo '<div><a href="produtosViewInsert.php">Voltar</a><div>';
  die('Dados inválidos!');
}


try {

  $conexao->beginTransaction();

  $stmt = $conexao->prepare("INSERT INTO produtos (nome,um) VALUES(:nome, :um)");

  //$stmt->bindParam(':id', $id);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':um', $um);

  $stmt->execute();
  $conexao->commit();

  header('Location: index.php');
  exit();

} catch (Exception $e) {
  $conexao->rollBack();
  die('Erro!' . $e->getMessage());
}
