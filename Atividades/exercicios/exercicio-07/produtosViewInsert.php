<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <script src = "./js/validar.js"></script>
  <title>Produtos</title>
</head>

<body>
  <div class="jumbotron">
    <header>
      <h1>Inserção de produtos</h1>
      <p>Utilização de formulários</p>
    </header>
  </div>


  <div class="container-fluid">
    <form class="container-fluid " action="produtosControllerInsert.php" method="post" onsubmit="validacao.php">
      <div class="form-group">
        <!--
        <label for="id" id="labelid">Código:</label>
        <input type="text" name="id" id="id" value="">
      -->

      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="um" id="labelUM">Unidade de Medida:</label>
      <input type="text" class="form-control" name="um" id="um" value="">
    </div>

    <br>

    <div>
      <input type="submit" class="btn btn-success" value="Inserir" onclick="validacao()">
      <input type="reset" class="btn btn-primary "value="Limpar" >
    </div>
  </form>
</div>
</body>
</html>
