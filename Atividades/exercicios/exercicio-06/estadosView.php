<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Estados</title>
</head>

<body>
  <div class="jumbotron">
    <header>
      <h1>Tabela Estados</h1>
      <p>Utilizando PHP</p>
    </header>
  </div>

  <div class="container-fluid">
    <div class="table-responsive container-fluid">
      <table class="table table-bordered table-hover table-striped" style="text-align:center">
        <thead>
          <tr class="thead-dark">
            <th>Estado</th>
            <th>Sigla</th>
          </tr>
        </thead>


        <tbody class="table-primary table-sm">
          <?php
          while($e = $estados->fetch()){
            echo "<tr></tr>\n";
            echo "<td>" .$e["nome"] ."</td>\n";
            echo "<td>".$e["sigla"]."</td>\n";
          }
          ?>
        </tbody>

      </table>
    </div>
  </div>
</body>
</html>
