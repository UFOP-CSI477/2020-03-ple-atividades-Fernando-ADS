<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Validação de formulário</title>
  <script src = "calculo.js"></script>
</head>


<body>
  <div class="jumbotron">
    <header>
      <h1>Validação de formulários</h1>
      <p>JavaScript</p>
    </header>
  </div>

  <div class="container-fluid">
    <form action="validar.php" name="dados" method="post"  onsubmit="validarTexto()">

      <div>
        <label for="user" id="labelUser">Usuário:</label>
        <input type="text" name="usuario" id="user" value="">
      </div>

      <div>
        <label for="password" id="labelPass">Senha:</label>
        <input type="password" name="senha" id="password" value="">
      </div>


      <div>
        <label for="nome" id="labelNome">Nome:</label>
        <input type="text" name="nome" id="nome" value="" >
      </div>


      <div>
        <label for="rg" id="labelRG" >RG:</label>
        <input type="text" name="rg" id="rg" value="">
      </div>

      <div>
        <label for="cpf" id="labelCPF">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="">
      </div>

      <div>
        <label for="ano" id="labelAno">Ano Nascimento: </label>
        <input type="text" name="ano" id="ano" value="">
        <label for="idade" id="labelIdade">Idade: </label>
        <input type="text" name="idade" id="idade" value="" disabled>
        <input type="button" class="btn btn-warning" value="Calcular" onclick="calcular()">
      </div>

      <div>
        <label for="email" id="labelEmail">Email:</label>
        <input type="email" name="email" id="email" value="">
      </div>

      <div>
        <label for="telefone" id="labelTel">Telefone:</label>
        <input type="tel" name="telefone"  value="">
      </div>

      <div>
        <label for="endereco" id="labelEndereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="">
      </div>

    </div>

    <div class="container-fluid">
      <input type="submit" class="btn btn-primary" value="Cadastrar" name="btnCadastrar">
      <input type="reset" class="btn btn-secondary "value="Limpar" name="btnLimpar">
    </div>

  </body>
  </html>
